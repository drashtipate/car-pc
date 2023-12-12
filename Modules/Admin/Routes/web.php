<?php

use Illuminate\Support\Facades\Route;
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

Route::prefix('mmladmin')->group(function () {
    Route::get('/', 'AdminController@login');
    Route::post('/checkAdmin', 'AdminController@checkAdmin');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/home', 'AdminController@index');
        Route::get('/logout', 'AdminController@logout');

        //location
        Route::get('/location', 'AdminController@location');
        Route::get('/country', 'AdminController@country');
        Route::get('/state', 'AdminController@state');
        Route::get('/states', 'AdminController@states');                                                                   
        Route::get('/city', 'AdminController@city');
        Route::post('/getState', 'AdminController@getState');
        Route::get('/citys', 'AdminController@citys');
        Route::get('/pincode', 'AdminController@pincode');
        Route::post('/getcity', 'AdminController@getcity');
        Route::get('/pincodes', 'AdminController@pincodes');


        //brand
        Route::get('/brand', 'AdminController@brand');
        Route::post('/brands', 'AdminController@brands');
        Route::get('/brandview', 'AdminController@brandes');
        Route::get('/editbrand/{id}', 'AdminController@editbrand');
        Route::PUT('/brandupdate/{id}', 'AdminController@brandupdate');
        Route::get('/brand/delete/{id}','AdminController@branddelete');

        //car
        Route::get('/car', 'AdminController@car');
        Route::POST('/cars', 'AdminController@cars');
        Route::get('/carview', 'AdminController@carviews');
        Route::get('/car/edit/{id}', 'AdminController@caredit');
        Route::put('/car/view/update/{id}','AdminController@carupdate')->name('car/view/update/');
        Route::get('/car/delete/{id}','AdminController@viewcardelete')->name('/car/delete/');
        //booking
        Route::get('/booking', 'AdminController@booking');
        Route::get('/pending', 'AdminController@pending');
        Route::get('/canceled', 'AdminController@canceled');
        Route::post('/changes/{id}', 'AdminController@change');
        Route::PUT('/updatestatus', 'AdminController@updatestatus');

        //user
        Route::get('/viewuser', 'AdminController@viewuser');

        //change password
        Route::get('/change-password', 'ChangePasswordController@index');
        Route::match(['get','post'],'/update-admin-password','ChangePasswordController@updateAdminPassword');
        Route::post('/check-admin-password','ChangePasswordController@checkAdminPassword');

        //updatecontactus
        Route::get('contact-info','UsercontactinfoController@edit_contactinfo')->name('edit-contactinfo');
        Route::put('update-contact','UsercontactinfoController@update_contactinfo')->name('update-contact');

            #contactusquery
            Route::get('/contactusquery','UsercontactinfoController@viewcontactquery')->name('contactusquery');
            Route::get('/deletequery/{id}', 'UsercontactinfoController@delete');

            //label
            Route::get('/label', 'UsersliderController@label');
            Route::post('/head', 'UsersliderController@head');
            Route::get('/label/view','UsersliderController@viewslider');
            Route::get('/label/edit/{id}', 'UsersliderController@slideredit');
            Route::put('/label/view/update/{id}','UsersliderController@sliderupdate');
            Route::get('/label/delete/{id}','UsersliderController@deleteslider');

            //Discount
            Route::get('/offer', 'DiscountController@add')->name('discount.add');
            Route::post('/insert', 'DiscountController@insert');
            Route::get('/deletediscount/{id}', 'DiscountController@delete');

            //service
            Route::get('user-service','UserserviceController@serviceinfo');
            Route::post('user-service-info','UserserviceController@storeserviceinfo');
            Route::get('/service/view','UserserviceController@viewservice')->name('service/view');
            Route::get('/service/edit/{id}', 'UserserviceController@editserviceinfo');
            Route::put('/service/view/update/{id}','UserserviceController@updateserviceinfo');
            Route::get('/service/delete/{id}','UserserviceController@servicedelete');

            #useritem
          Route::get('user-team','UserteamController@teaminfo');
          Route::post('user-team-info','UserteamController@storeteaminfo');
          Route::get('/team/view','UserteamController@viewteam')->name('mmladmin/team/view');
          Route::get('/team/edit/{id}', 'UserteamController@editteaminfo');
          Route::put('/team/view/update/{id}','UserteamController@updateteaminfo');
          Route::get('/team/delete/{id}','UserteamController@teamdelete');
    });
});
