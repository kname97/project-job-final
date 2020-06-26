<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\Models\Employees;
use App\Models\Employers;
use App\Http\Requests\loginRequest;
use App\Http\Requests\registerRequest;
use Illuminate\Support\MessageBag;
use App\Http\Requests\updatePassword;
use Hash;
use App\Models\Jobcategories;
use Illuminate\Support\Facades\View;


class userController extends Controller
{
    function __contruct()
    {

        $this->middleware('guest');
    }

    // get login
    function getloginUser()
    {
        if (Auth::check()) {
            if (Auth::user()->level == 2) {
                return view('employer.manageInfor');
            }
        }
        return view('index');
    }

    // post login
    function postloginUser(loginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if ($request->ajax()) {
            if (Auth::attempt(['email' => $email, 'password' => $password]) || Auth::attempt([
                    'username' => $email,
                    'password' => $password
                ])) {
                if (Auth::check()) {
                    if (Auth::user()->level == 1) {
                        return response()->json(['message' => 'Người tìm việc đăng nhập thành công']);
                    } elseif (Auth::user()->level == 2) {
                        return response()->json(['message' => 'Nhà tuyển dụng đăng nhập thành công']);
                    } else {
                        return response()->json(['errors' => 'Bạn không phải là nhà tuyển dụng hoặc người tìm việc']);
                    }
                }
            }
            return response()->json([
                'errors' => 'Email / tài khoản hoặc mật khẩu không đúng'
            ]);
        }
        return response()->json([
            'errors' => 'Email / tài khoản hoặc mật khẩu không đúng'
        ]);
    }


// get logout user
    function logoutUser(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return Redirect('/');
    }

//register user
    function getRegisterUser()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('generalView.register');
    }

    function postRegisUser(registerRequest $request)
    {
        $username = $request->input('txtusername');
        $email = $request->input('txtemail');
        $password = $request->input('txtpassword');
        $level = $request->input('txtlevel');
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->level = $level;
        $checkRequest = $user->save();
        if ($checkRequest == true) {
            if ($level == 1) {
                Auth::loginUsingId($user->id);
                return redirect(route('getProfileEmployee'))->with('atention-register', 'Chào mừng người tìm việc đã tạo tài khoảng thành công');
//                return redirect(route('home'))->with('atention',
//                    'Chào mừng người tìm việc đã tạo tài khoảng thành công');
            }
            if ($level == 2) {
                Auth::loginUsingId($user->id);
                return redirect(route('getProfileEmployee'))->with('atention-register', 'Chào mừng nhà tuyển dụng đã tạo tài khoảng thành công');
//                return redirect(route('home'))->with('atention',
//                    'Chào mừng nhà tuyển dụng đã tạo tài khoảng thành công');
            }
        } else {
            return redirect()->back();
        }
    }

    // update password
    function updatePassword(updatePassword $request)
    {
        $password = $request->input('new_password');
        $user = User::find(Auth::id());
        $user->password = Hash::make($password);
        if ($user->save() == true) {
            toastr()->Success('Thay đổi mật khẩu thành công');

            if (Auth::user()->level == 1) {
//                redirect(route('getProfileEmployee'));

                return redirect()->route('getProfileEmployee');
            } elseif (Auth::user()->level == 2) {
//                redirect(route('getProfileEmployer'));

                return redirect()->route('getProfileEmployer');
            }
        }
        toastr()->Error('Thay đổi mật khẩu không thành công');
        return redirect()->back();
    }


}
