<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Requests\loginRequest;
use App\User;
use Validator;
use  App\Models\employers;
use  App\Models\employees;
use App\Models\applies;
class AdminController extends Controller
{

    function getLoginAdmin()
    {
        return view('admin.loginAdmin');
    }
    function postLoginAdmin(loginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 0]) || Auth::attempt(['username' => $email, 'password' => $password, 'level' => 0]) ) {
            return redirect()->route('adminHome');
        }
        else {
            $errors= new MessageBag(['errorloginadmin'=>'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    function getAdminHome()
    {
        $users = User::where('level','!=',0)->get();
        $countUsers = $users->count();
       $employees = employees::all();
       $countEe = $employees->count();
       $employers =employers::all();
       $countEr = $employers->count();
       $applies = applies::all();
       $countApplies = $applies->count();

        return view('admin.indexAdmin',compact('countUsers','countEe','countEr','countApplies'));
    }

    function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect(route('getadminLogin'));
    }
}
