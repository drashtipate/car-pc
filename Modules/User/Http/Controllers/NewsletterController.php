<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use App\Models\Newsletter;
// use App\Models\subscriber;
use App\Models\EmailMessage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class NewsletterController extends Controller
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

    // public function newsletter() 
    // {
    //     return view('user::index');
    // }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function storeEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|regex:/(.*)@gmail\.com/i|unique:users',
        ]); 

        Newsletter::create(['email'=>$request->email]);
        $mail_controller = new UserController;
        $subsciber_message = EmailMessage::where('action', 'NEWSLETTER_SUBSCRIPTION_CUSTOMER')->first();
        $admin_message = EmailMessage::where('action', 'NEWSLETTER_SUBSCRIPTION_ADMIN')->first();
        if($subsciber_message){
            $mail_controller->sendEmail($subsciber_message->title, $subsciber_message->subject, $subsciber_message->body, $request->email);
        }  
        if($admin_message){
            $admins = User::where('email','drashtiv2392002@gmail.com')->get();
            foreach($admins as $admin){
                $mail_controller->sendEmail($admin_message->title, $admin_message->subject, $admin_message->body, $admin->email, '','Admin');
            }
        }    
        // return back();
        return redirect('users/')->with("success","Subscribe Successfully!!");
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

    
}
