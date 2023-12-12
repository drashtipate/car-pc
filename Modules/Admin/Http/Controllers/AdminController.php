<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Http; 

use App\Models\{admin, country, state, city, pincode, brand,
     car, car_image, bookings, User,contactusquery,labels};

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\File;
use Intervention\Support\Facades\Image; 
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use DataTables;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
        public function index()
        {
            if (!Auth()->guard('admin')->check())
                return view("admin::login");

                $car = DB::table('cars')->selectRaw('count(*) as id')->get();
                $totals = DB::table('booking')->selectRaw('count(*) as id')->get();
                $users = DB::table('users')->selectRaw('count(*) as id')->get();

            return view('admin::index',compact('car','totals','users'));
        }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
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

        return view('admin::show');
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
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
    public function login()
    {
        return view('admin::login');
    }

    public function checkAdmin(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'email'       => 'required|exists:admins,email',
                'password'    => 'required'
            ]
        );

        if ($validate->fails()) {
            $messages = $validate->getMessageBag();
            foreach ($messages->all() as $message) {
                toastr()->error($message);
            }
            return back()->withInput()->withErrors($validate);
        }

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // toastr()->success('You are Login successfully!!');
            // return redirect('mmladmin/home');
            return redirect('mmladmin/home')->with("success","You are Login successfully!!");
        } else {
            // toastr()->error('Wrong input email or Password');
            // return back();
            return redirect()->back()->with("error","Wrong input email or Password!!");
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        // toastr()->warning('Logout Successfully');
        // return redirect('mmladmin/');
        return redirect('mmladmin/')->with("warning","Logout Successfully!!");
    }


    public function location()
    {
        return view('admin::location');
    }
    public function country(Request $request)
    {
        try {
            \DB::beginTransaction();
            // $validator = Validator::make($request->all(), [
            //     'country' => 'required',

            // ]);
            $validatedData = $request->validate([
                'country' => 'required',
               ]);

            // if ($validator->fails()) {
            //     return response()->json($validator->errors(), 422);
            // }

            $country = new country();
            $country->name = $request->country;
            $country->save();
            \DB::commit();
            // toastr()->success('Country Inserted Succesfully !');
            // return redirect('mmladmin/state');
            return redirect('mmladmin/state')->with("success","Country Inserted Succesfully !!");
        } catch (Throwable $e) {
            // toastr()->error('Something Was Wrong');
            // return redirect('mmladmin/location');
            return redirect('mmladmin/location')->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }
    public function state()
    {
        $countries = DB::table('countries')->orderBy('name', 'ASC')->get();
        return view('admin::state', compact('countries'));
    }

    public function states(Request $request)
    {
        try {
            \DB::beginTransaction();
           
            $validatedData = $request->validate([
                'state' => 'required',
                'country' => 'required',
               ]);

            $state = new state();
            $state->name = $request->state;
            $state->countries_id = $request->country;
            $state->save();
            \DB::commit();
            return redirect('mmladmin/city')->with("success","States Inserted Succesfully !!");
        } catch (Throwable $e) {
            return redirect('mmladmin/state')->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }
    public function getState(Request $request)
    {

        $data['states'] = state::where("countries_id", $request->cid)->get();
        return response()->json($data);
    }
    public function city()
    {
        $countries = DB::table('countries')->orderBy('name', 'ASC')->get();
        return view('admin::city', compact('countries'));
    }
    public function citys(Request $request)
    {
        try {
            \DB::beginTransaction();
            
            $validatedData = $request->validate([
                'city' => 'required',
                'country' => 'required',
                'state' => 'required',
            ]);

            $city = new city();
            $city->name = $request->city;
            $city->countries_id = $request->country;
            $city->states_id = $request->state;
            $city->save();
            \DB::commit();
            return redirect('mmladmin/pincode')->with("success","City Inserted Succesfully !!");
        } catch (Throwable $e) {
            return redirect('mmladmin/city')->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }


    public function pincode()
    {
        $countries = DB::table('countries')->orderBy('name', 'ASC')->get();
        return view('admin::pincode', compact('countries'));
    }

    public function getcity(Request $request)
    {

        $data['citys'] = city::where("states_id", $request->sid)
            ->get(["name", "id"]);
        return response()->json($data);
    }

    public function pincodes(Request $request)
    {
        try {
            \DB::beginTransaction();
            
            $validatedData = $request->validate([
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'pincode' => 'required',
                'area' => 'required',
            ]);
            

            $pincode = new pincode();
            $pincode->countries_id = $request->country;
            $pincode->states_id = $request->state;
            $pincode->citys_id = $request->city;
            $pincode->pincode = $request->pincode;
            $pincode->area = $request->area;
            $pincode->save();
            \DB::commit();
            return redirect('mmladmin/home')->with("success","location Inserted Succesfully !!");
        } catch (Throwable $e) {
            return redirect('mmladmin/pincode')->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }

    //brand

    public function brand()
    {
        return view('admin::brand');
    }

    public function brands(Request $request)
    {
        try {
            \DB::beginTransaction();
            
            $validatedData = $request->validate([
                'brand' => 'required',
                'image' => 'required',
            ]);
            
            $brand = new brand();
            // $path = public_path('images/banner');
            $brand->name = $request->brand;

            if ($request->hasFile('image')) {
                $imageName = time() . rand(1, 100) . '.' . $request->image->extension();
                $request->image->move('images/brand', $imageName);
                $brand->image = $imageName;
            }

            $brand->save();

            \DB::commit();
            return  redirect('mmladmin/brand')->with("success","brand added Succesfully!");
        } catch (Throwable $e) {
            return  redirect('mmladmin/brand')->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }

    public function brandes()
    {
        $data = brand::all();

        return view('admin::brandview', compact('data'));
    }


    public function editbrand($id)
    {

        $brand = brand::find($id);
        return view('admin::editbrand', compact('brand'));
    }

    public function brandupdate(Request $request, $id)
    {
         // $validatedData = $request->validate([
        //     'image' => 'required',
        // ]);

        $brand = brand::find($id);
        
                $brand->name = $request->name;
                
                if ($request->hasfile('image')) {

                    $destination = 'images/brand/' .$brand->image;
                            if(File::exists($destination))
                            {
                                File::delete($destination);
                            }
        
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalExtension(); //getting image extension
                    $filename = time() . '.' . $extension;
                    $file->move('images/brand/', $filename); //store image
                    $brand->image = $filename;
                } 

                $brand->update();

                return redirect('mmladmin/brandview')->with("success","Brand updated successfully!");
        

    }

    public function branddelete($id)
    {
        $delete = brand::find($id);
        $destination = 'images/brand/' . $delete->image;
        if (File::exists($destination)) {

            File::delete($destination);
        }
        $delete->delete();
        // toastr()->success('Brand deleted successfully  !');
        return redirect('mmladmin/brandview')->with("success", "Brand deleted successfully!");
        \DB::rollback();
    }




    public function car()
    {
        $brands = \DB::table('brands')->orderBy('name', 'ASC')->get();
        return view('admin::car', compact('brands'));
    }
    public function cars(Request $request)
    {

        try {
            \DB::beginTransaction();
            
            $validatedData = $request->validate([
            
                'name' => 'required',
                'brand' => 'required',
                'Models' => 'required',
                'type' => 'required',
                'average' => 'required',
                'gps' => 'required',
                'amount' => 'required',
                'descriptions' => 'required',
            ]);
            

            $cars = new car();
            $cars->name = $request->name;
            $cars->brand_id = $request->brand;
            $cars->Model = $request->Models;
            $cars->type = $request->type;
            $cars->average = $request->average;
            $cars->gps = $request->gps;
            $cars->amount = $request->amount;
            $cars->description = $request->descriptions;
            $cars->save();


            if ($request->hasFile('photos')) {
                $allowedfileExtension = ['pdf', 'jfif', 'jpg', 'png', 'docx'];

                foreach ($request->file('photos') as $file) {
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $file->move('images/car', $filename);
                    $image = new car_image;
                    $image->car_id = $cars->id;
                    $image->img_path = $filename;
                    $image->save();
                }
            }

            \DB::commit();
            return redirect('mmladmin/carview')->with("success","Car Inserted Succesfully!");
        } catch (Throwable $e) {
            return redirect('mmladmin/car')->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }

    public function carviews()
    {
        $data = car::all();

        $brands = \DB::table('brands')->orderBy('name', 'ASC')->get();
    
        return view('admin::carview', compact('data','brands'));
    }

    public function caredit($id)
    {
        $brands = \DB::table('brands')->orderBy('name', 'ASC')->get();

        $data = car::where('id', $id)->first();
        $query = car::with(['car_images'])->get();


        return view('admin::editcar', compact('data', 'brands', 'query'));
    }


    public function carupdate(Request $request, $id)
        {
            $data = car::find($id);
            
            $car = car::where('id',$request->id)->first();

            $validatedData = $request->validate([
                'name' => 'required',
                'brand_id' => 'required',
                'type' => 'required',
                'model' => 'required',
                'average' => 'required',
                'gps' => 'required',
                'amount' => 'required',
                'description' => 'required',
                // 'image' => 'required|mimes:jpeg,jpg',
               ]);

            if($car)
            {
                    $car->name     = $request->name;
                    $car->brand_id = $request->brand_id;
                    $car->type     = $request->type;
                    $car->model    = $request->model;  
                    $car->average  = $request->average;
                    $car->gps      = $request->gps;
                    $car->amount    = $request->amount;
                    $car->description = $request->description;

                if ($request->hasFile('photos')) {
                    $allowedfileExtension = ['pdf', 'jfif', 'jpg', 'png', 'docx'];
    
                    foreach ($request->file('photos') as $file) {
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension();
                        $file->move('images/car', $filename);
                        $image = new car_image;
                        $image->car_id = $car->id;
                        $image->img_path = $filename;
                        $image->save();
                    }
                }

                $car->update();

                return redirect('mmladmin/carview')->with("success","car updated successfully  !!");
            }
            else
            {
                return redirect('mmladmin/carview')->with("error","car updated fail !!");
            }
            
            
        }

    public function viewcardelete($id)
    {
        $data = car::find($id);
        $data->delete();
        return redirect('mmladmin/carview')->with("success", "car deleted successfully!");
        \DB::rollback();
    }



    public function canceled(Request $request)
    {
        $query = bookings::where('payment_status', 2)->get();
        return view('admin::canceled', compact('query'));
    }

    public function booking(Request $request)
    {
        $query = bookings::where('payment_status', 1)->get();

        return view('admin::booking', compact('query'));
    }
    public  function change($id,  Request $request)
    {

        $booking = bookings::find($id);
        return response()->json([
            'status' => 200,
            'booking' => $booking,
        ]);
    }

    public function updatestatus(Request $request)
    {
        $stud_id = $request->input('stud_id');
        $booking = bookings::find($stud_id);

        // if(!$booking) {
        //     return redirect()->back()->with('error','Booking not found');
        // }

        // if (!property_exists($booking, 'payment_status')) {
        //     return redirect()->back()->with('error', 'Payment status property not found');
        // }
    
        $booking->payment_status = $request->input('status');
        $booking->save();
        return redirect()->back()->with('booking change succesfully');
    }
    public function pending(Request $request)
    {
        $query = bookings::where('payment_status', 0)->get();

        return view('admin::pennding', compact('query'));
    }

    public function viewuser()
    {

        $data = user::all();
        return view('admin::viewuser', compact('data'));
    }

    
}
