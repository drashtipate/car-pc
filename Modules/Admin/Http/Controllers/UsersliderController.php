<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\label;
use Illuminate\Support\Facades\File; 
use illuminate\support\Facades\DB;

class UsersliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function label()
    {
        return view('admin::label');
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
    public function slideredit($id)
    {
        $slider = label::find($id);
        return view('admin::editslider',compact('slider'));
    }

    public function head(Request $request){

        try {
            \DB::beginTransaction();
            
            $validatedData = $request->validate([
                'lbl1' => 'required',
                'lbl2' => 'required',
                'image' => 'required',
           ]);
            
            $label = new label();
            // $path = public_path('images/banner');
            $label->label1 = $request->lbl1;
            $label->label2 = $request->lbl2;

            if ($request->hasFile('image')) {
                $imageName = time() . rand(1, 100) . '.' . $request->image->extension();
                $request->image->move('images/label', $imageName);
                $label->image = $imageName;
            }

            $label->save();

            \DB::commit();
            return  redirect('mmladmin/label')->with("success","Slider Added successfully  !!");
        } catch (Throwable $e) {
            return  redirect('mmladmin/label')->with("error","Something Was Wrong!!");
            \DB::rollback();
        }
    }

    public function sliderupdate(Request $request, $id)
    {
           $slider = label::find($id);
           // $path = public_path('images/banner');
           $slider->label1 = $request->label1;
           $slider->label2 = $request->label2;

            if ($request->hasFile('image')) 
            {
                $destination = 'images/label/' . $slider->image;
                if(File::exists($destination)) {
                    File::delete($destination);
                }
                

                $imageName = time() . rand(1, 100) . '.' . $request->image->extension();
                $request->image->move('images/label/', $imageName);
                $slider->image = $imageName;
            }

        
            $slider->update();

            return  redirect('mmladmin/label/view')->with("success","Slider Update successfully  !!");
    
    }

    public function viewslider(Request $request)
    {
        $data = label::all();
        return view('admin::viewslider', compact('data'));
    }

    public function deleteslider($id)
    {
        $data = label::find($id);

        $destination = 'images/label/' . $data->image;
        if (File::exists($destination)) {
            
            File::delete($destination);
        }

        $data->delete();
        // toastr()->success('Brand deleted successfully  !');
        return redirect('mmladmin/label/view')->with("success", "Slider deleted successfully!");
        \DB::rollback();
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
