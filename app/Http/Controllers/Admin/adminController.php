<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\User;
use Validator;

class adminController extends Controller
{
    function getLoginAdmin()
    {
        return view('admin.loginAdmin');
    }
    function postLoginAdmin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $level = $request->level;

        // rule
        $rule = [
            'email'=>"required",
            'password'=>'required'
        ];
        $mesEr = [
            'email.required' => 'Bạn chưa nhập Email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
        ];
        $vali = validator::make($request->all(),$rule,$mesEr);
        if($vali->fails())
        {
            return redirect()->back()->withErrors($vali)->withInput();
        }
        else
        {
            if (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 0]) || Auth::attempt(['username' => $email, 'password' => $password, 'level' => 0]) ) {
                return redirect()->route('adminHome');
            }
            else {
                $errors= new MessageBag(['errorloginadmin'=>'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
  
    function getAdminHome()
    {
        return view('admin.indexAdmin');
    }
}
