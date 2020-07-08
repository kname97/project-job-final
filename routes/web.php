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

Route::get('/', 'userController@getloginUser')->name('home');
Route::post('/', "userController@postloginUser")->name('loginUser');
Route::get('/dang-ky', 'userController@getRegisterUser');
Route::post('/dang-ky', 'userController@postRegisUser')->name('createUser');
Route::get('/dang-xuat', 'userController@logoutUser');

Route::post('/cap-nhat-mat-khau','userController@updatePassword')->name('updatePassword');
Route::get('/tim-kiem-viec-lam','userController@search')->name('getviewSearch');
Route::get('thong-tin-ca-nhan-nha-tuyen-dung/{id}','generalController@getProfilEmployer')->name('general.getProfileEmployer');
Route::get('/chi-tiet-cong-viec/{id}' , 'generalController@jobDetail')->name('getJobDetail');
// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dang-nhap', 'Admin\AdminController@getLoginAdmin')->name('getadminLogin');
    Route::post('/dang-nhap', 'Admin\AdminController@postLoginAdmin')->name('adminLogin');
    Route::get('/dang-xuat', 'Admin\AdminController@logoutAdmin')->name('adminLogout');
    Route::get('/', 'Admin\AdminController@getAdminHome')->name('adminHome')->middleware('checkAdmin');
    Route::get('/quan-ly-tai-khoan', 'Admin\DefineAdminController@getAccounts')->name('adminAccount')->middleware('checkAdmin');
    Route::get('/danh-sach-tai-khoan', 'Admin\DefineAdminController@getListAcounts')->name('listAccounts')->middleware('checkAdmin');
    Route::get('/quan-ly-don-xin-viec', 'Admin\DefineAdminController@getAppliesAdmin')->name('adminApply')->middleware('checkAdmin');
    Route::post('/quan-ly-don-xin-viec/xac-nhan','Admin\DefineAdminController@AppliedAdmin')->name('admin.applied')->middleware('checkAdmin');
    Route::post('/quan-ly-don-xin-viec/huy-bo','Admin\DefineAdminController@UnAppliedAdmin')->name('admin.unapplied')->middleware('checkAdmin');
    Route::get('/quan-ly-nhan-xet', 'Admin\DefineAdminController@getReviews')->name('adminReview')->middleware('checkAdmin');
    Route::get('/quan-ly-tin-tuyen-dung', 'Admin\DefineAdminController@getJobs')->name('adminJob')->middleware('checkAdmin');
    Route::post('/quan-ly-tin-tuyen-dung/xac-nhan','Admin\DefineAdminController@AppliedAdminjob')->name('admin.appliedjob')
        ->middleware('checkAdmin');
    Route::post('/quan-ly-tin-tuyen-dung/huy-bo','Admin\DefineAdminController@UnAppliedAdminjob')->name('admin.unappliedjob')
        ->middleware('checkAdmin');
    Route::get('/quan-ly-tai-khoan/delete/{id}', 'Admin\DefineAdminController@deleteAccount')->name('deleteAccount')->middleware('checkAdmin');
    Route::get('/quan-ly-tai-khoan/edit/{id}', 'Admin\DefineAdminController@editAccount')->name('editAccount')->middleware('checkAdmin');
    Route::post('/quan-ly-tai-khoan/save', 'Admin\DefineAdminController@saveAccount')->name('saveAccount')->middleware('checkAdmin');
});
//employer

Route::group(['prefix' => 'nha-tuyen-dung'], function () {
    Route::get('/dang-tin-tuyen-dung', 'Employer\employerController@getViewPostJob')->name('getPostJob');
    Route::get('/thong-tin-ca-nhan', 'Employer\employerController@getProfile')->name('getProfileEmployer');
    Route::get('/','Employer\employerController@getviewInforEmployer')->name('getviewInforEmployer');
    Route::post('/thong-tin-ca-nhan/cap-nhat/{id}','Employer\employerController@profilUpdate')->name('updateEmployer');
    Route::post('dang-tin-tuyen-dung/store','Employer\postJobController@jobStore')->name('jobStore');
    Route::get('/quan-ly-tin-tuyen-dung','Employer\employerController@getViewManageJobs')->name('getviewManageJobEmployer');
    Route::get('/danh-sach-tin-tuyen-dung','Employer\employerController@getDataManageJobs')->name('getDataJobEmployer');
    Route::get('/quan-ly-tin-tuyen-dung/delete/{id}', 'Employer\employerController@deletelJob')->name('deleteJob');
    Route::get('/quan-ly-tin-tuyen-dung/edit/{id}', 'Employer\employerController@editJob')->name('editJob');
    Route::post('dang-anh-dai-dien','Employer\employerController@updateAvatar')->name('employer.updateAvatar');
    Route::get('thong-tin-nguoi-tim-viec/{id}','Employer\employerController@getProfileEmployee')->name('employer.getEmployee');
    Route::get('quan-ly-don-xin-viec','Employer\employerController@getApplied')->name('employer.getApplied');
    Route::post('quan-ly-don-xin-viec/xac-nhan','Employer\employerController@Applied')->name('employer.Applied');
});

//employee
Route::group(['prefix' => 'nguoi-tim-viec'], function () {
    Route::get('/thong-tin-ca-nhan', 'Employee\employeeController@getProfile')->name('getProfileEmployee');
//    Route::post('/thong-tin-ca-nhan','Employee\employeeController@profileStore')->name('postProfileEmployee');
    Route::get('/quan-li-don-xin-viec', 'Employee\manageAppliesController@index')->name('getViewManageApplies');
    Route::get('/bang-xep-hang', 'Employee\rankController@index')->name('getViewRank');
    Route::get('/danh-gia-nha-tuyen-dung', 'Employee\reviewController@index')->name('getViewReview');
    Route::get('/yeu-thich-ntd', 'Employee\wishlistEmployerController@index')->name('getViewWishlistEmployer');
    Route::get('/yeu-thich-viec', 'Employee\wishlistJobController@index')->name('getViewWishlistJob');
    Route::post('/thong-tin-ca-nhan/cap-nhat/{id}','Employee\employeeController@profilUpdate')->name('updateProfile');
    Route::post('/dang-anh-dai-dien','Employee\employeeController@updateAvatar')->name('updateAvatar');
    Route::post('yeu-thich-nha-tuyen-dung/{id}','Employee\wishlistEmployerController@addWishlistmployer')->name('employee.addWLEmployer');
    Route::post('/luu-tin-tuyen-dung/{id}','Employee\wishlistJobController@addWishlistJob')->name('employee.addWLJob');
    Route::get('/xoa-yeu-thich-nha-tuyen-dung/{id}','Employee\wishlistEmployerController@deleteWishListSingle')->name('employee.delWLEmployer');
    Route::get('/xoa-luu-tin-tuyen-dung/{id}','Employee\wishlistJobController@deleteWishListSingle')->name('employee.delWLJob');
    Route::post('nop-don-tuyen-dung/{id}', 'Employee\manageAppliesController@applyJob')->name('employee.apply');
});
// employer
