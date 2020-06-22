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
//    // get view
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
        $checkEmployeeStore = $employeeStore->save();
        if($checkEmployeeStore == true){
            toastr()->success('cập nhật thông tin cá nhân thành công');
            return redirect()->back();
        }else{
            toastr()->error('cập nhật thông tin thất bại vui lòng kiểm tra lại các trường bên dưới');
            return redirect()->back();

        }
    }

//    update profile
    function profilUpdate()
    {

    }
}
