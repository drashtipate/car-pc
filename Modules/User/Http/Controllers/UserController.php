<?php

namespace Modules\User\Http\Controllers;

use DataTables;
use Newsletter;
use App\helper\helper;
use App\Models\userteam;

use App\Models\subscriber;

//contactusinfo
use App\Models\userservice;

//userservice
use Illuminate\Http\Request;

//userteam
use App\Models\contactusinfo;

//subscriberemail
use App\Mail\Mailmastersubscribe;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Support\Renderable;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\{car, car_image, locations, brand, User, bookings, contactusquery, labels, Discount};




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $query = car::with(['brands', 'car_image'])->get();
        $category = brand::all();

        // $label = labels::all();
        $label = \DB::table('labels')->orderBy('id','ASC')->get();

        $data = Discount::all();
        $service = \DB::table('userservices')->orderBy('id','ASC')->get();

        $team = \DB::table('userteams')->orderBy('id','ASC')->get();

        $contactus = \DB::table('contactusinfos')->orderBy('id','ASC')->get();

        return view('user::index', compact('query', 'category', 'label', 'data','service','team','contactus'));
    }
    public function register()
    {
        return view('user::register');
    }
    public function about()
    {
        return view('user::about');
    }

    public function service()
    {
        $service = \DB::table('userservices')->orderBy('id','ASC')->get();

        $data = Discount::all();

        return view('user::service',compact('service','data'));
    }

    public function team()
    {
        $team = \DB::table('userteams')->orderBy('id','ASC')->get();
        return view('user::team',compact('team'));
    }

    public function account(Request $request)

    {
        $data = Auth::guard('users')->id();
        $datas = bookings::with(['cars', 'car_image'])->where('user_id', $data)->get();

        return view('user::profile', compact('datas'));
    }

    public function testimonial()
    {
        return view('user::testimonial');
    }
    public function login()
    {
        return view('user::login');
    }
    public function detail()
    {
    }
    public function booking()
    {
    }
    public function contact()
    {
        $contactus = \DB::table('contactusinfos')->orderBy('id','ASC')->get();
        return view('user::contact',compact('contactus'));

    }


    public function getState(Request $request)
    {

        $data['states'] = car_image::where("countries_id", $request->cid)->get();
        return response()->json($data);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }
    public function terms()
    {
        return view('user::terms');
    }

    public function privatepolicy()
    {
        return view('user::privatepolicy');
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
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
    public function cars()
    {
        $data = helper::get_cars();
        dd($data);
    }
    public function add(Request $request)
    {
        try {
            \DB::beginTransaction();

            // $validator = Validator::make($request->all(), [
            //     'username' => 'required',
            //     'email' => 'required|email|unique:users',
            //     'password' => 'required|confirmed',
            //     'number' => 'required|max:10|min:10',
            // ]);

            // if ($validator->fails()) {
            //     return response()->json($validator->errors(), 422);
            // }
            $request->validate([
                'user_image'                => 'required',
                'username'                  => 'required|string',
                'email'                     => 'required|email|regex:/(.*)@gmail\.com/i|unique:users',
                'number'                    => 'required|max:10|min:10',
                'password'                  => 'required_with:password_confirmation|same:password_confirmation|min:5|max:12|',
                'password_confirmation'     => 'required|min:5|max:12|',
                'checkbox'                  => 'required',

            ]);

            $data = new User();
            if ($request->hasfile('user_image')) {


                $file = $request->file('user_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('images/user', $filename);
                $data->images = $filename;
            }
            $data->name = $request->username;
            $data->email = $request->email;
            $data->number = $request->number;
            $data->password = Hash::make($request->password);

            $data->save();
            \DB::commit();
            // toastr()->success('Registered  successfully!!.');
            // return redirect('users/login');
            return redirect('users/register')->with("message","Registered  successfully!!.");
        } catch (Throwable $e) {

            return redirect('users/')->with("error","Registered  not successfully!!.");
            \DB::rollback();
        }
    }
    public function  checks(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|',
        ]);

        $user =  $request->only('email', 'password');

        if (Auth::guard('users')->attempt($user)) {

            return redirect('users/')->with("message","Login  successfully!!.");

        } else {
            // toastr()->error('This Email and Password is not registered.');
            return redirect()->back()->withFail('Wrong Email Address or Password!');

        }
    }

    public function logout(Request $request)
    {

        Auth::guard('users')->logout();
        return redirect('users/')->with("success","Logout Success!!");
    }
    public function contactusadd(Request $request)
    {
        // try {
            #validation
            $validatedData = $request->validate([
                'name'               => 'required|string|max:255',
                // 'email'              => 'required|email|regex:/(.*)@gmail\.com/i|unique:users',
                'email'              => 'required|email|regex:/(.*)@gmail\.com/i',
                'contactnumber'      => 'required|string|max:10|min:10',
                'message'            => 'required|string',
               ]);

            if (Auth::guard('users')->check()) {
                $contactus = new contactusquery();
                $contactus->name = $request->name;
                $contactus->emailId = $request->email;
                $contactus->contactnumber = $request->contactnumber;
                $contactus->message = $request->message;

                $contactus->save();
                \DB::commit();
                return redirect()->back()->with("message","Query Sent. We will contact you shortly !");
            }
            else
            {
                return redirect()->back()->withFail('Something Went Wrong. Please Login First!!');
                // echo "<script>alert('please login first!!')</script>";
            }
    }


    #subscriber email
        // public function newsletter()
        // {
        //     return view('user::index');

        // }

        // public function SubscriberEmail(Request $request) {

        //     if ( ! Newsletter::isSubscribed($request->email) )
        //     {
        //         Newsletter::subscribePending($request->email);
        //         return redirect('/users')->with('success', 'Thanks For Subscribe');
        //     }
        //     return redirect('/users')->with('failure', 'Sorry! You have already subscribed ');

        // }

    public function sendEmail($title, $subject, $body, $email, $name='', $admin='')
    {
        $formated_body = str_replace('{{$email}}', $email, $body);
        $credentials = [
            'title' => $title,
            'subject' => $subject,
            'body' => $formated_body,
            'email' => $email
        ];

        Mail::to($email)->send(new Mailmastersubscribe($credentials));
    }


    #edit profile
    public function editprofile(Request $request, $id)
    {

        // $data = Auth::guard('users')->id();
        $data = User::find($id);

        return view('user::editprofile',compact('data'));
    }

    public function updateprofile(Request $request, $id)
    {

        // $data = Auth::guard('users')->id();
        $data = User::find($id);

        $request->validate([
            'username'                  =>  'required|string',
            'email'                     =>  'required|email|regex:/(.*)@gmail\.com/i',
            'number'                    =>  'required|max:10|min:10',
            'password'                  =>  'required_with:password_confirmation|same:password_confirmation|min:5|max:20|',
            'password_confirmation'     =>  'required|min:5|max:20|',

        ]);

            if ($request->hasfile('user_image')) {

                // $currentImagePath = 'images/user/' . $data->images; // Use the correct column name

                $destination = 'images/user/' .$data->images;
                    if(File::exists($destination))
                    {
                        File::delete($destination);
                    }

                $file = $request->file('user_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('images/user', $filename);
                $data->images = $filename;
            }

            $data->name = $request->username;
            $data->email = $request->email;
            $data->number = $request->number;
            $data->password = Hash::make($request->password);

        $data->update();

        // toastr()->success('Brand updated successfully!');
        return redirect('users/profile')->with('data', $data)->with("success","Profile Updated!!");
    }
}

