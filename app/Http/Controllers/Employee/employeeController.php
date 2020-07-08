<?php

namespace App\Http\Controllers\Employee;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\createProfile;
use App\Models\employees;
use DB;
use App\Http\Requests\createAvatar;
use App\Models\wishlistjobs;
use App\Models\wishlistemployers;
use App\Models\applies;

class employeeController extends Controller
{
//    // get view
    function __construct()
    {
        $this->middleware('employee');
    }

    function getProfile()
    {
        $user = Auth::user()->id;
        $wishlistJob = wishlistjobs::where('user_id',$user)->get();
        $countwishList = $wishlistJob->count();
        $wishlistEmployer = wishlistemployers::where('user_id',$user)->get();
        $countwishListEr = $wishlistEmployer->count();
        $employees = User::findOrFail($user);
        $profileEmployees = employees::where('user_id', $user)->first();
        return view('employee.profileEmployee', compact('employees', 'profileEmployees','countwishList','countwishListEr'));
    }

//    update profile
    function profilUpdate(createProfile $request)
    {
        $employee_id = $request->employee_id;

        $user_id = Auth::user()->id;
        $check_id = User::find($user_id)->id;
        $employeeUpdate = employees::where('user_id', $check_id)->first();
        $employeeUpdate->firstname = $request->txtfirstname;
        $employeeUpdate->university = $request->txtuniversity;
        $employeeUpdate->lastname = $request->txtlastname;
        $employeeUpdate->gender = $request->gender;
        $employeeUpdate->dob = $request->txtdob;
        $employeeUpdate->description = $request->txtdescription;
        $employeeUpdate->phone = $request->txtphone;
        $employeeUpdate->address = $request->txtaddress;
        $employeeUpdate->city = $request->txtcity;
        $employeeUpdate->district = $request->txtdistrict;
        $employeeUpdate->tag_skill = $request->txttag_skill;
//        $employeeUpdate->hobby = $request->txthobby;
        $employeeUpdate->university = $request->txtuniversity;
        $employeeUpdate->save();
        toastr()->success("Cập nhật thông tin cá nhân thành công");
        return redirect()->back();

    }

    function updateAvatar(createAvatar $request)
    {
        $user_id = Auth::user()->id;
        $check_id = User::find($user_id)->id;

        $employeeUpdateAvatar = employees::where('user_id', $check_id)->first();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $nameavatar = time().'employee'.'.'.$avatar->getClientOriginalExtension();
            $locationavatar = public_path('images/employee');
            $avatar->move($locationavatar, $nameavatar);
            $saveName = 'images/employee/' . $nameavatar;
            $employeeUpdateAvatar->avatar = $saveName;
        }
        $employeeUpdateAvatar->save();
        return response()->json([
                'data'=> $saveName,
        ]);
    }
}
