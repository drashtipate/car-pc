<?php
 namespace App\helper;

use App\Models\brand;
use App\Models\car;
use App\Models\locations;
use Illuminate\Support\Facades\DB;
class helper
{
static function get_cars()
{
     // $numberofloan = locations::where(['user_id' => Auth::user()->id, 'payment_status' => 1])->count();
    // $countries = DB::table('countries')->orderBy('name', 'ASC')->get();
    $member = car::with(['brands','pincodes'])->get();
   
    return $member;
   
}

public function profile()
{
    $user = auth()->user();
        var_dump($user);
}
}
?>