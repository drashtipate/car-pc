<?php
use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('users')->group(function() {
    
    Route::get('/', 'UserController@index');
    Route::get('/register', 'UserController@register');
    Route::post('/add', 'UserController@add');
    Route::get('/about', 'UserController@about');
    Route::get('/car', 'carController@car');
    Route::get('/service', 'carController@service');
    Route::get('/team', 'UserController@team');
    Route::get('/profile', 'UserController@account');
    Route::get('/list', 'carController@list');
    Route::post('/bookings', 'carController@bookings');
    Route::get('/testimonial', 'UserController@testimonial');   
    Route::get('/login', 'UserController@login');
    Route::post('/checks', 'UserController@checks');
    Route::get('/logout', 'UserController@logout');
    Route::get('details/{id}', 'carController@details');
    Route::get('booking/{id}', 'carController@booking');
    Route::get('pay/{id}', 'carController@pay');
    Route::get('shows/{id}', 'carController@shows');
    Route::post('/check', 'carController@check');
    Route::post('/cash', 'carController@cash');
    Route::post('/cashes', 'carController@cashes');
    Route::get('/contact', 'UserController@contact');
    Route::get('/location', 'carController@location');
    Route::get('/search', 'carController@search');
    Route::post('/payment', 'carController@bookings');
    Route::post('/paymentes', 'carController@payment');
    Route::get('/success', 'carController@success');
    Route::get('/failed', 'carController@failed');
    Route::get('/signature', 'carController@signature');

    Route::get('/contact', 'UserController@contact');
    Route::post('/contactus', 'UserController@contactusadd');
    Route::post('/changes/{id}', 'carController@change');
 
    
  

  Route::get('/terms', 'UserController@terms');
  Route::get('/privatepolicy', 'UserController@privatepolicy');


  // forgot password
  Route::get('forget-password','ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');

  Route::post('forget-password','ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post'); 
  Route::get('reset-password/{token}','ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
  Route::post('reset-password','ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

  //subscriber
  Route::get('newsletter/subscribe','NewsletterController@newsletterForm');
  Route::post('newsletter/subscribes','NewsletterController@storeEmail')->name('email.store');


  //edit profile
  Route::get('/profile/edit/{id}', 'UserController@editprofile');
  Route::put('/profile/update/{id}','UserController@updateprofile');

  // login with google
  Route::get('auth/google',[GoogleController::class,'loginwithGoogle'])->name('login');
Route::any('auth/google/callback',[GoogleController::class,'callbackFromGoogle'])->name('callback');


  // Route::get('users', function(){
  //     return view('index');
  // })->name('users/');

});


