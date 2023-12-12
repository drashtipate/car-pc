<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\userteam;
use Illuminate\Support\Facades\File; 
use illuminate\support\Facades\DB;

class UserteamController extends Controller
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
    public function editteaminfo($id)
    {
        $team = userteam::find($id);
        return view('admin::editteam',compact('team'));
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
    public function teaminfo()
    {
        return view('admin::userteam');
    }
    public function storeteaminfo(Request $request)
    {
        try {
            #validation
            $validatedData = $request->validate([
                'name'         => 'required|string|max:255',
                'designation'       => 'required|string|max:255',
                'teamimage'        => 'required',
                
               ]);


            $team = new userteam();
            $team->name = $request->name;
            $team->designation = $request->designation; 
            // $service->image = $request->serviceimage;

            // $uploadPath = 'images/userteamimg/';
            if($request->hasfile('teamimage')) {
                $file = $request->file('teamimage');
                $extension = $file->getClientOriginalExtension(); //getting image extension
                $filename = time().'.'.$extension;

                $file->move('images/userteamimg/', $filename); //store image
                // $team->image = $uploadPath.$filename;
                $team->image = $filename;
            } else {
                return $request;
                $team->image = '';
            }

            $team->save();
            \DB::commit();
            return redirect()->back()->with("success","Query Sent. Team Insert successfully !");
        } catch (Throwable $e) {
            return redirect()->back()->with("error","Something went wrong. Please try again!");
            \DB::rollback();
        }
    }

    //update
    public function updateteaminfo(Request $request, $id)
    {

            $team = userteam::find($id);
            $team->name = $request->name;
            $team->designation = $request->designation; 
            // $service->image = $request->serviceimage;

            // $uploadPath = 'images/userteamimg/';
            if($request->hasfile('teamimage')) 
            {
                $destination = 'images/userteamimg/' . $team->image;
                if(File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('teamimage');
                $extension = $file->getClientOriginalExtension(); //getting image extension
                $filename = time().'.'.$extension;

                $file->move('images/userteamimg/', $filename); //store image
                // $team->image = $uploadPath.$filename;
                $team->image = $filename;
            } 
            
            $team->update();
            
            return redirect('mmladmin/team/view')->with("success", "Query Sent. Team Update successfully !");
        
    }


    public function viewteam(Request $request) 
    {
        $data = userteam::all();
        return view('admin::viewteam',compact('data'));
    }

    public function teamdelete($id)
        {
            $data = userteam::find($id);

            $destination = 'images/userteamimg/' .$data->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $data->delete();
            // toastr()->success('Brand deleted successfully  !');
            return redirect('mmladmin/team/view')->with("success","Team deleted successfully!");
            \DB::rollback();
        }
}
