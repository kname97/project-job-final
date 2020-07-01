<?php

namespace App\Http\Controllers\Employee;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\createProfile;
use App\Models\employees;
use DB;

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
        $employees = User::findOrFail($user);
        $profileEmployees = employees::where('user_id',$user)->first();
//        dd($profileEmployees, $user);
        return view('employee.profileEmployee', compact('employees','profileEmployees'));
    }
//    update profile
    function profilUpdate(createProfile $request)
    {
        $employee_id = $request->employee_id;
        $employeeUpdate = employees::find($employee_id)->first();
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
        return redirect()->back();

    }
}
