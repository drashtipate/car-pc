<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\{bookings, car, car_image, checks, brand, pincode,Discount};
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;
use Session;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {

        return view('user::show');
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
    public function car()
    {
        $query = car::with(['brands', 'car_image'])->get();

        return view('user::car', compact('query'));
    }
    public function list()
    {
        $query = car::with(['brands', 'car_image'])->get();

        return view('user::list', compact('query'));
    }

    public function shows($id)
    {
        $data = car::where('id', $id)->first();
        return response()->json($data);
    }
    
    public  function change($id)
    {
        $car = car::find($id);  
      
        $query = car_image::where('car_id',$id)->first();
        
        return response()->json([
            'status' => 200,
            'car' => $car,
            'query' => $query,
         
            
        ]);
    }


    public function details($id)
    {
        $data = car::where('id', $id)->first();
        $query = car::with(['car_images'])->get();
        //  echo session()->get('drops');
        $detail = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('pickups'))->first();
        $details = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('drops'))->first();
        return view('user::details', compact('data', 'query', 'detail', 'details'));
    }



    public function booking($id)
    {
        $detail = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('pickups'))->first();
        $details = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('drops'))->first();
        $data = car::where('id', $id)->first();
        $query = car::with(['car_image'])->get();
        return view('user::booking', compact('data', 'query', 'detail', 'details'));
    }



    // public function booking()
    // {
    //     $data = new bookings();
    //     $data = Auth::guard('users')->id();
    //       $cashs= checks::with(['cars'])->where('user_id',$data)->get();

    //     $detail = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('pickups'))->first();
    //     $details = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('drops'))->first();

    //     return view('user::booking', compact('data', 'cashs', 'detail', 'details'));
    // }





    // public function check(Request $request)
    // {
    //     if (Auth::guard('users')->check()) {

    //         $location = new checks();
    //         $location->car_id = $request->id;
    //         $location->user_id = Auth::guard('users')->id();
    //         $location->pickup = $request->pickup;
    //         $location->drop = $request->drop;
    //         $location->ptime = $request->ptime;
    //         $location->dtime = $request->dtime;
    //         $location->hour = $request->hour;
    //         $location->person = $request->person;
    //         $location->save();

    //         return redirect('users/booking');
    //     } else {
    //         toastr()->error('booking not successfully', '  please login first');
    //         return redirect()->back();
    //     }
    // }
    public function service()
    {
        $service = DB::table('userservices')->orderBy('id','ASC')->get();
        $data = Discount::all();
        return view('user::service',compact('service','data'));
    }


    public function location(Request $request)
    {
        $free_data = bookings::join('cars', 'cars.id', 'booking.car_id')->where('dtime', '>=', $request->time1)->where('ptime', '<=', $request->time2)->pluck('booking.car_id');
        $free['cars'] = car::whereNotIn('id', $free_data)->get();
        return response()->json($free);
    }


    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'pickups' => 'required',
            'drops'   => 'required',
           ]);

        $dtime = Carbon::parse($request->dtime);
        $ptime = Carbon::parse($request->ptime);

        $diff_in_hours = $dtime->diffInHours($ptime);
        // dd($diff_in_hours);

        $request->session()->put('diff_in_hours', $diff_in_hours);

        $pickup =  $request->input('pickups');
        $request->session()->put('pickups', $pickup);
        $drop = $request->input('drops');
        $request->session()->put('drops', $drop);
        $ptime = $request->input('ptime');
        $request->session()->put('ptime', $ptime);
        $dtime = $request->input('dtime');
        $request->session()->put('dtime', $dtime);
        $car =  $request->input('car');
        $request->session()->put('car', $car);

        $data = car::with(['car_image'])->get();
        $sroom = car::where('id', $car)->first();
        return view('user::car', compact('data', 'sroom'));
    }


    public function cash(Request $request)
    {
        if (Auth::guard('users')->check()) {
            $cash = new bookings();
            $cash->user_id = Auth::guard('users')->id();
            $cash->car_id = $request->id;
            $cash->firstname = $request->firstname;
            $cash->lname = $request->lastname;
            $cash->email = $request->email;
            $cash->number = $request->number;
            $cash->amount = $request->amount;
            $cash->pickup = $request->pickups;
            $cash->drop = $request->drops;
            $cash->ptime = $request->ptime;
            $cash->dtime = $request->dtime;
            $cash->adult = $request->adult;
            $cash->child = $request->child;
            $cash->request = $request->description;
            $cash->save();
            $id = $cash->id;

            return redirect('users/pay/' . $id);
        } else {
            toastr()->error('booking not successfully', 'please login first');
            return redirect('users/');
        }
    }

    public function pay($id)
    {
        $user_id = Auth::guard('users')->id();
        $detail = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('pickups'))->first();
        $details = pincode::with(['country', 'state', 'cityes'])->where('id', '=', session()->get('drops'))->first();
        $data = bookings::where('id', $id)->get();
        $query = bookings::with(['cars', 'car_image'])->where('id', $id)->get();
        return view('user::pay', compact('user_id', 'data', 'query', 'detail', 'details'));
    }

    public function cashes(Request $request)
    {
        $cash = bookings::find($request->id);

        // $cash->user_id = Auth::guard('users')->id();
        // $cash->car_id = $request->car_id;
        // $cash->firstname = $request->firstname;
        // $cash->lname = $request->lname;
        // $cash->email = $request->email;
        // $cash->number = $request->number;
        // $cash->amount = $request->amount;
        // $cash->pickup = $request->pickup;
        // $cash->drop = $request->drop;
        // $cash->ptime = $request->ptime;
        // $cash->dtime = $request->dtime;
        // $cash->adult = $request->adult;
        // $cash->child = $request->child;
        // $cash->request = $request->description;
        $cash->payment_type = $request->type;
        if ($request->type == 'cash') {
            $cash->payment_status = 0;
        }
        $api = new Api('rzp_test_aWAKaYaCExMwwC', 'aDahrqXmE0yYnNIHLzBsSpNC');
        $order = $api->order->create(array('receipt' => '123', 'amount' => $request->all()['amount'] * 100, 'currency' => 'INR'));
        $orderId = $order['id'];
        if ($request->type == 'online') {
            $cash->order_id = $orderId;
        }
        $cash->save();


        $response = [
            'orderId' => $order['id'],
            'razorpayId' => 'rzp_test_yhgW39BHH0jJgi',
            'amount' => $request->all()['amount'] * 100,
            'firstname' => $request->all()['firstname'],
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR',
            'number' => $request->all()['number'],
            'email' =>  $request->all()['email'],
        ];

        if ($request->type == 'cash') {
            return redirect('users/success');
        } elseif ($request->type == 'online') {
            return view('user::payment', compact('response'));
        }



        return redirect('users/success');
    }

    public function bookings(Request $request)
    {

        
        // $api = new Api('rzp_test_yhgW39BHH0jJgi', 'D0ewCmvLF1Rzbi3kf91EMEXB');
        $api = new Api('rzp_test_aWAKaYaCExMwwC', 'aDahrqXmE0yYnNIHLzBsSpNC');
        $order = $api->order->create(array('receipt' => '123', 'amount' => $request->all()['amount'] * 100, 'currency' => 'INR'));
        $orderId = $order['id'];

        $response = [
            'orderId' => $order['id'],
            'razorpayId' => 'rzp_test_yhgW39BHH0jJgi',
            'amount' => $request->all()['amount'] * 100,
            'firstname' => $request->all()['firstname'],
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR',
            'number' => $request->all()['number'],
            'email' =>  $request->all()['email'],


        ];


        return view('user::payment', compact('response'));
    }

    public function payment(Request $request)
    {
        $signaturestatus = $this->signature(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid'],
        );

        if ($signaturestatus == true) {
            $data = bookings::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid, 'payment_status' => 1]);
            return view('user::success');
        } else {
            return view('users/failed');
        }
    }

    private function signature($_signature, $_paymentId, $_orderId)
    {
        try {
            // $api =  new Api('rzp_test_yhgW39BHH0jJgi', 'D0ewCmvLF1Rzbi3kf91EMEXB');
            $api = new Api('rzp_test_aWAKaYaCExMwwC', 'aDahrqXmE0yYnNIHLzBsSpNC');
            $attrbutes = array('razorpay_signature' => $_signature, 'razorpay_payment_id' => $_paymentId, 'razorpay_order_id' => $_orderId);
            $order = $api->utility->verifyPaymentSignature($attrbutes);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function success(Request $request)
    {
        return view('user::success');
    }
    public function failed(Request $request)
    {
        return view('user::failed');
    }
}
