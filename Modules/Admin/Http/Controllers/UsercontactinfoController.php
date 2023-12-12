<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Http;
 
use App\Models\{contactusquery,contactusinfo,User};

use illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 
use Intervention\Support\Facades\Image; 
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use DataTables;
class UsercontactinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
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

    public function edit_contactinfo()
    {
        $results = \DB::table('contactusinfos')->orderBy('headoffice','ASC')->get();
        // $results = contactusinfo::find($id);
        return view('admin::update-contactinfo',compact('results'));
    }

    public function update_contactinfo(Request $request)
    {

        try {
            #validation
            $validatedData = $request->validate([
                'headoffice'         => 'required|string|max:255',
                'branchoffice'       => 'required|string|max:255',
                'emailId'            =>  'required|email|max:255',
                'contactno'          => 'required|max:10|min:10',
               ]);


            $contactus = new contactusinfo();
            $contactus->headoffice = $request->headoffice;
            $contactus->branchoffice = $request->branchoffice;
            $contactus->emailId = $request->emailId;
            $contactus->contactno = $request->contactno;
            $contactus->save();
            \DB::commit();
            return redirect()->back()->with("success","Query Sent. Info Update successfully !");
        } catch (Throwable $e) {
            return redirect()->back()->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }

    }

    public function viewcontactquery(Request $request) 
    {
        $data = contactusquery::all();
        return view('admin::contactusquery',compact('data'));
    }

    public function delete($id)
    {
            $delete = contactusquery::find($id);
            $delete->delete();
            \DB::commit();
            return redirect()->back()->with("success","Contact Deleted Successfully !");
      
    }
    
    
}
