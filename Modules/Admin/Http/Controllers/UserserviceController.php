<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\userservice;
use Illuminate\Support\Facades\File; 
use illuminate\support\Facades\DB;

class UserserviceController extends Controller
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
    public function editserviceinfo($id)
    {
        $service = userservice::find($id);
        return view('admin::editservice',compact('service'));
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

    public function serviceinfo()
    {
        return view('admin::userservice');
    }


    public function storeserviceinfo(Request $request)
    {
        try {
            \DB::beginTransaction();
            #validation
            $validatedData = $request->validate([
                'servicetype'         => 'required|string|max:255',
                'serviceimage'        => 'required',
                'description'       => 'required|string|max:255',
            ]);


            $service = new userservice();
            $service->type = $request->servicetype;
            // $service->image = $request->serviceimage;

            //$uploadPath = 'images/userserviceimg/';
            if ($request->hasfile('serviceimage')) {
                $file = $request->file('serviceimage');
                $extension = $file->getClientOriginalExtension(); //getting image extension
                $filename = time() . '.' . $extension;

                $file->move('images/userserviceimg/', $filename); //store image
                $service->image = $filename;
                  // $service->image = $uploadPath.$filename;
            } else {
                return $request;
                $service->image = '';
            }

            $service->description = $request->description;
            $service->save();
            \DB::commit();
            return redirect()->back()->with("success", "Query Sent. Service Insert successfully !");
        } catch (Throwable $e) {
            return redirect()->back()->with("error", "Something went wrong. Please try again!");
           \DB::rollback();
        }
    }

    //update
    public function updateserviceinfo(Request $request, $id)
    {
            #validation
            // $validatedData = $request->validate([
            //     'servicetype'         => 'required|string|max:255',
            //     'serviceimage'        => 'required',
            //     'description'       => 'required|string|max:255',
            // ]);

            $service = userservice::find($id);
            $service->type = $request->servicetype;

            //$uploadPath = 'images/userserviceimg/';
            if ($request->hasfile('serviceimage')) {

                $destination = 'images/userserviceimg/' . $service->image;
                if(File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('serviceimage');
                $extension = $file->getClientOriginalExtension(); //getting image extension
                $filename = time() . '.' . $extension;

                $file->move('images/userserviceimg/', $filename); //store image
                $service->image = $filename;
                  // $service->image = $uploadPath.$filename;
            } 

            $service->description = $request->description;
            
            $service->update();
            
            return redirect('mmladmin/service/view')->with("success", "Query Sent. Service Update successfully !");
        
    }


    public function viewservice(Request $request)
    {
        $data = userservice::all();
        return view('admin::viewservice', compact('data'));
    }

    public function servicedelete($id)
    {
        $data = userservice::find($id);

        $destination = 'images/userserviceimg/' . $data->image;
        if (File::exists($destination)) {
            
            File::delete($destination);
        }

        $data->delete();
        // toastr()->success('Brand deleted successfully  !');
        return redirect('mmladmin/service/view')->with("success", "Service deleted successfully!");
        \DB::rollback();
    }
}
