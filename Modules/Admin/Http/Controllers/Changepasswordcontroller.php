<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\admin;

class Changepasswordcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       
        return view('admin::changepassword');
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
    public function show($id)
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
    public function updateAdminPassword(Request $request) {
        #validations
            $request->validate([
            'oldpassword' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:6',
            ]);

        
        $hashedPassword = Auth::guard('admin')->user()->password;
        if (Hash::check($request->oldpassword , $hashedPassword)) {
            if (!Hash::check($request->new_password , $hashedPassword)) {

                $users = admin::find(Auth::guard('admin')->id());
                $users->update([
                    'password' => bcrypt($request->new_password)
                    ]);
               
                return redirect()->back()->with('success','password updated successfully');
            }
            else{
                return redirect()->back()->with('error','new password can not be the old password!');
            } 
        }
        else{
            return redirect()->back()->with('error','old password doesnt matched');
        }
    }

    public function checkAdminPassword(Request $request) {
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;
        if(Hash::check($data['oldpassword'],Auth::guard('admin')->user()->password)) {
            return "true";
        }else {
            return "false";
        }
    }
}
