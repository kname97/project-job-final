<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Illuminate\Support\MessageBag;

class userController extends Controller
{
    function __contruct()
    {
        $this->middleware('guest');
    }
    // get login
    function getloginUser()
    {
        return view('index');
    }
    //register user
    function getRegisterUser()
    {
        return view('generalView.register');
    }

    // post login
    function postloginUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $rule =[
            'email' =>'required ',
            'password' =>'required',
        ];

        $mes = [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'bạn chưa nhập mật khẩu',
        ];

        $vali = validator::make($request->all(), $rule ,$mes);
        if($vali->fails())
        {
            return response()->json([
                'status' => 'error',
                'message' => $vali->errors()
            ],200);
        }
        else{
            if(Auth::attempt(['email' => $email, 'password' => $password]) || Auth::attempt(['username' => $email, 'password' => $password]) ) {
                if (Auth::check()) {
                    if (Auth::user()->level == 1) {
                        return response()->json(
                            [
                                'status' => 'success',
                                'message' => 'Đăng nhập thành công',
                            ]);
                    } elseif (Auth::user()->level == 2) {
                        return response()->json(
                            [
                                'status' => 'success',
                                'message' => 'Đăng nhập thành công',
                            ]);
                    }
                } else {
                    //                $errors= new MessageBag(['errorlogin'=>'Email hoặc mật khẩu không đúng']);
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Email hoặc mật khẩu không đúng',
                        'false' => true
                    ]);
                }
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Email hoặc mật khẩu không đúng',
                'false' => true
            ]);
        }
    }

    // get logout user
    function logoutUser(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

}
