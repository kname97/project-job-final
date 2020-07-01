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
Route::get('/tim-kiem-viec-lam','userController@getviewSearchJob')->name('getviewSearch');

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dang-nhap', 'Admin\AdminController@getLoginAdmin')->name('getadminLogin');
    Route::post('/dang-nhap', 'Admin\AdminController@postLoginAdmin')->name('adminLogin');
    Route::get('/dang-xuat', 'Admin\AdminController@logoutAdmin')->name('adminLogout');
    Route::get('/', 'Admin\AdminController@getAdminHome')->name('adminHome')->middleware('checkAdmin');
    Route::get('/quan-ly-tai-khoan', 'Admin\DefineAdminController@getAccounts')->name('adminAccount');
    Route::get('/danh-sach-tai-khoan', 'Admin\DefineAdminController@getListAcounts')->name('listAccounts');
    Route::get('/quan-ly-don-xin-viec', 'Admin\DefineAdminController@getApplies')->name('adminApply');
    Route::get('/quan-ly-nhan-xet', 'Admin\DefineAdminController@getReviews')->name('adminReview');
    Route::get('/quan-ly-bang-xep-hang', 'Admin\DefineAdminController@getRanks')->name('adminRank');
    Route::get('/quan-ly-tai-khoan/delete/{id}', 'Admin\DefineAdminController@deleteAccount')->name('deleteAccount');
    Route::get('/quan-ly-tai-khoan/edit/{id}', 'Admin\DefineAdminController@editAccount')->name('editAccount');
    Route::post('/quan-ly-tai-khoan/save', 'Admin\DefineAdminController@saveAccount')->name('saveAccount');
});
//employer

Route::group(['prefix' => 'nha-tuyen-dung'], function () {
    Route::get('/dang-tin-tuyen-dung', 'Employer\employerController@getViewPostJob')->name('getPostJob');
    Route::get('/thong-tin-ca-nhan', 'Employer\employerController@getProfile')->name('getProfileEmployer');
    Route::get('/','Employer\employerController@getviewInforEmployer')->name('getviewInforEmployer');
    //Route::get('/dang-tin-tuyen-dung/category','Employer\postJobController@getJobcategories')->name('getCateJob');
    Route::post('dang-tin-tuyen-dung/store','Employer\postJobController@jobStore')->name('jobStore');
    Route::get('/quan-ly-tin-tuyen-dung','Employer\employerController@getViewManageJobs')->name('getviewManageJobEmployer');
    Route::get('/danh-sach-tin-tuyen-dung','Employer\employerController@getDataManageJobs')->name('getDataJobEmployer');
    Route::get('/quan-ly-tin-tuyen-dung/delete/{id}', 'Employer\employerController@deletelJob')->name('deleteJob');
    Route::get('/quan-ly-tin-tuyen-dung/edit/{id}', 'Employer\employerController@editJob')->name('editJob');
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
    Route::post('/thong-tin-ca-nhan/cap-nhat/{id}','Employee\employeeController@profilUpdate')->name('updateProfile');
});
// employer
Route::group(['prefix' => 'thong-tin-ca-nhan'], function () {
    Route::get('/{username}', 'userController@getProfiledetail')->name('getProfileDetail');
});
