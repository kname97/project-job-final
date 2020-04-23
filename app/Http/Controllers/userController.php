<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class userController extends Controller
{
    //
    function loginUser(Request $request)
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
                'error' => true,
                'message' => $vali->errors()
            ],200);
        }
        else{
            if(Auth::attempt(['email' => $email, 'password' => $password]) ||Auth::attempt(['username' => $email, 'password' => $password]) ){
                if(Auth::check()->user == 1){
                    return response()->json(
                    ['error' => false,
                    'message' => 'success',
                    ]);
                }
                elseif(Auth::check()->user == 2){
                    return response()->json(
                    ['error' => false,
                    'message' => 'success',
                    ]);
                }
            }
            else{
                $errors= new MessageBag(['errorlogin'=>'Email hoặc mật khẩu không đúng']);
                return response()->json([
                    'error' => true,
                    'message' => $errors
                ], 200);
            }
        }

    }
}
