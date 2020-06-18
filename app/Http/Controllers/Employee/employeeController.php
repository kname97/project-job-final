<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employees;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\createProfile;


class employeeController extends Controller
{
    // get view
    function __construct()
    {
        $this->middleware('employee');
    }

    function getProfile()
    {
        $user = Auth::user()->id;
        $employee = User::find($user);

        return view('employee.profileEmployee', compact('employee'));
    }

//     create profile
    function profileStore(createProfile $request)
    {
        $user_id = $request->input('user_id');
        $firstname = $request->input('txtfirstname');
        $lastname = $request->input('txtlastname');
        $address = $request->input('txtaddress');
        $gender = $request->input('gender');
        $dob = $request->input('txtdob');
        $city = $request->input('txtcity');
        $district = $request->input('txtdistrict');
        $description = $request->input('description-profile');
        $password = $request->input('txtpassword');

        $employeeStore = new Employees;
        $employeeStore->user_id = $user_id;
        $employeeStore->firstname = $firstname;
        $employeeStore->lastname = $lastname;
        $employeeStore->address = $address;
        $employeeStore->gender = $gender;
        $employeeStore->dob = $dob;
        $employeeStore->city = $city;
        $employeeStore->district = $district;
        $employeeStore->description = $description;


    }

//    update profile
    function profilUpdate()
    {

    }
}
