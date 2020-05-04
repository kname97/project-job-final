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

Route::get('/trang-ca-nhan',function (){
    return view('employer.profileDetail');
});
Route::get('/', 'userController@getloginUser');
Route::post('/',"userController@postloginUser")->name('loginUser');
Route::get('dang-ky','userController@getRegisterUser');
Route::get('/dang-xuat', 'userController@logoutUser');

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get ('/login'            ,'admin\adminController@getLoginAdmin')->name('getadminLogin');
    Route::post('/login'            ,'admin\adminController@postLoginAdmin')->name('adminLogin');
    Route::get ('/logout'           ,'admin\adminController@logoutAdmin')->name('adminLogout');
    Route::get ('/'                 ,'admin\adminController@getAdminHome')->name('adminHome')->middleware('checkAdmin');
    Route::get ('/manage-accounts'  ,'admin\defineAdminController@getAccounts');
    Route::get ('/manage-applies'   ,'admin\defineAdminController@getApplies');
    Route::get ('/manage-reviews'   ,'admin\defineAdminController@getReviews');
    Route::get ('/manage-ranks'     ,'admin\defineAdminController@getRanks');
});

// employer
Route::group(['prefix'=>'thong-tin-ca-nhan'], function (){
    Route::get('/{username}','userController@getProfiledetail')->name('getProfileDetail');
});
