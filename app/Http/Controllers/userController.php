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

    // post login
    function postloginUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $rule = [
            'email' => 'required ',
            'password' => 'required',
        ];

        $mes = [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'bạn chưa nhập mật khẩu',
        ];

        $vali = validator::make($request->all(), $rule, $mes);
        if ($vali->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $vali->errors()
            ], 200);
        } else {
            if (Auth::attempt(['email' => $email, 'password' => $password]) || Auth::attempt([
                    'username' => $email,
                    'password' => $password
                ])) {
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

    //register user
    function getRegisterUser()
    {
        if(Auth::check())
            return redirect('/');
        return view('generalView.register');
    }

    function postRegisUser(Request $request)
    {
        $username = $request->txtusername;
        $email = $request->txtemail;
        $password = $request->txtpassword;
        $level = $request->txtlevel;
        $rule = [
            'txtemail' => 'required|email|string|unique:Users,email',
            'txtusername' => 'required|string|alpha_dash|unique:Users,username',
            'txtpassword' => 'required|min:5|confirmed',
            'txtlevel' => 'required',
        ];
        $mes = [
            'txtemail.required' => 'Bạn chưa nhập email',
            'txtemail.email' => 'Không đúng định dạng email',
            'txtemail.unique' => 'Email đã được tạo trước đó',
            // tạo email
            'txtusername.required' => 'Bạn chưa nhập tên tài khoản',
            'txtusername.unique' => 'Tài khoản đã được tạo trước đó',
            // 'username.array' => 'Tên tài khoản không được có dấu',
            'txtusername.alpha_dash' => 'Tên tài khoản không hợp lệ',
            //tao username
            'txtpassword.required' => 'Bạn chưa nhập mật khẩu',
            'txtpassword.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
            'txtpassword.confirmed' => 'Mật khẩu không trùng khớp',
            //tạo password
        ];
        $vali = validator::make($request->all(), $rule, $mes);
        if ($vali->fails()) {
            return redirect()->back()->withErrors($vali)->withInput();
        } else {
            $user = new User;
            $user->username = $username;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->level = $level;
            $user->save();
            if ($level == 1) {
                Auth::loginUsingId($user->id);
//                return redirect('/tim-viec/thong-tin-ca-nhan/'.Auth::guard('account')->user()->username)->with('atention2','Chào mừng người tìm việc đã tạo tài khoảng thành công');
            }
            if ($level == 2) {
                Auth::loginUsingId($user->id);
//                return redirect('/tuyen-dung/thong-tin-ca-nhan/'.Auth::guard('account')->user()->username)->with('atention2','Chào mừng nhà tuyển dụng đã tạo tài khoảng thành công');
            }
        }
    }

}
