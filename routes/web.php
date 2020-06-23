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

Route::get('/trang-ca-nhan', function () {
    return view('employer.profileDetail');
});
Route::get('/', 'userController@getloginUser')->name('home');
Route::post('/', "userController@postloginUser")->name('loginUser');
Route::get('/dang-ky', 'userController@getRegisterUser');
Route::post('/dang-ky', 'userController@postRegisUser')->name('createUser');
Route::get('/dang-xuat', 'userController@logoutUser');
Route::get('/demo', 'generalController@getDemo');
Route::post('/cap-nhat-mat-khau','userController@updatePassword')->name('updatePassword');

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dang-nhap', 'admin\AdminController@getLoginAdmin')->name('getadminLogin');
    Route::post('/dang-nhap', 'admin\AdminController@postLoginAdmin')->name('adminLogin');
    Route::get('/dang-xuat', 'admin\AdminController@logoutAdmin')->name('adminLogout');
    Route::get('/', 'admin\AdminController@getAdminHome')->name('adminHome')->middleware('checkAdmin');
    Route::get('/manage-accounts', 'admin\defineAdminController@getAccounts')->name('adminAccount');
    Route::get('/list-accounts', 'admin\defineAdminController@getListAcounts')->name('listAccounts');
    Route::get('/manage-applies', 'admin\defineAdminController@getApplies')->name('adminApply');
    Route::get('/manage-reviews', 'admin\defineAdminController@getReviews')->name('adminReview');
    Route::get('/manage-ranks', 'admin\defineAdminController@getRanks')->name('adminRank');
    Route::get('/manage-accounts/delete/{id}', 'admin\defineAdminController@deleteAccount')->name('deleteAccount');
    Route::get('/manage-accounts/edit/{id}', 'admin\defineAdminController@editAccount')->name('editAccount');
    Route::post('manage-accounts/save', 'admin\defineAdminController@saveAccount')->name('saveAccount');
});
//employer

Route::group(['prefix' => 'nha-tuyen-dung'], function () {
    Route::get('/dang-tin-tuyen-dung', 'Employer\employerController@getViewPostJob')->name('getPostJob');
    Route::get('/thong-tin-ca-nhan', 'Employer\employerController@getProfile')->name('getProfileEmployer');

    //Route::get('/dang-tin-tuyen-dung/category','Employer\postJobController@getJobcategories')->name('getCateJob');
});

//employee
Route::group(['prefix' => 'nguoi-tim-viec'], function () {
    Route::get('/thong-tin-ca-nhan', 'Employee\employeeController@getProfile')->name('getProfileEmployee');
    Route::post('/thong-tin-ca-nhan','Employee\employeeController@profileStore')->name('postProfileEmployee');
    Route::get('/quan-li-don-xin-viec', 'Employee\manageAppliesController@index')->name('getViewManageApplies');
    Route::get('/bang-xep-hang', 'Employee\rankController@index')->name('getViewRank');
    Route::get('/danh-gia-nha-tuyen-dung', 'Employee\reviewController@index')->name('getViewReview');
    Route::get('/yeu-thich-ntd', 'Employee\wishlistEmployerController@index')->name('getViewWishlistEmployer');
    Route::get('/yeu-thich-viec', 'Employee\wishlistJobController@index')->name('getViewWishlistJob');


});
// employer
Route::group(['prefix' => 'thong-tin-ca-nhan'], function () {
    Route::get('/{username}', 'userController@getProfiledetail')->name('getProfileDetail');
});
