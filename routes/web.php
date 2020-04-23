<?php

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
Auth::routes();
Route::get('/', function () {
    return view('index');
});
Route::post('/',"userController@loginUser")->name('loginUser');
Route::group(['prefix' => 'admin'], function () {
    Route::get ('/login'            ,'admin\adminController@getLoginAdmin')->name('getadminLogin');
    Route::post('/login'            , 'admin\adminController@postLoginAdmin')->name('adminLogin');
    Route::get ('/logout'           ,'admin\adminController@logoutAdmin')->name('adminLogout');
    Route::get ('/'                 ,'admin\adminController@getAdminHome')->name('adminHome')->middleware('checkAdmin');
    Route::get ('/manage-accounts'  ,'admin\defineAdminController@getAccounts');
    Route::get ('/manage-applies'   ,'admin\defineAdminController@getApplies');
    Route::get ('/manage-reviews'   ,'admin\defineAdminController@getReviews');
    Route::get ('/manage-ranks'     ,'admin\defineAdminController@getRanks');
});
