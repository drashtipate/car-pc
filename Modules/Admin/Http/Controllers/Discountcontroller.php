<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Discount;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Discountcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function add()
    {
        $data = Discount::get();
        return view('admin::offer', compact('data'));
    }

    public function insert(Request $request)
    {
        try {
            DB::beginTransaction();

            
            $validatedData = $request->validate([
                    'code' => 'required',
                    'discount' => 'required',
                    'discription' => 'required',
                    'time' => 'required',
               ]);
            

            $exitcoupon = Discount::where('code', $request->code)->first();
            if ($exitcoupon) {
                toastr()->error('Coupne Code Already Exit!');
            } else {
                $discount = new Discount();
                $discount->code = $request->code;
                $discount->discount = $request->discount;
                $discount->disc = $request->discription;
                $discount->limit = $request->time;
                $discount->save();
                toastr()->success('Coupon Code Added Successfully!');
            }

            DB::commit();
            return redirect()->route('discount.add');
        } catch (Exception $e) {
            DB::rollBack();
            toastr()->error('Something was wrong');
            return back()->with(['message' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {
      
            $delete = Discount::find($id);
            $delete->delete();
            DB::commit();
            return redirect()->back()->with('success','Coupon Code Deleted!');
      
    }
}
