<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\Models\employees;
use App\Models\employers;
use App\Http\Requests\loginRequest;
use App\Http\Requests\registerRequest;
use Illuminate\Support\MessageBag;
use App\Http\Requests\updatePassword;
use Hash;
use App\Models\Jobcategories;
use Illuminate\Support\Facades\View;
use App\Models\jobs;


class userController extends Controller
{
    function __contruct()
    {

        $this->middleware('guest');
    }
//    function getviewSearchJob() {
//        $jobSearchs = jobs::getAllJobinHome()->paginate(9);
//
//        if(Auth::check() && Auth::user()->level == 2){
//            return redirect(route('getviewInforEmployer'));
//        }
//        return view('generalView.resultSearch',compact('jobSearchs'));
//    }
    function search(Request $request) {
        $cate = $request->cate;
        $area = $request->area;

        $jobSearchs = jobs::getSearch($cate, $area)->paginate(9);
//        dd($jobSearchs);
        return view('generalView.resultSearch',compact('jobSearchs'));
    }
    // get login
    function getloginUser()
    {
        $jobDatas = jobs::getAllJobinHome()->get();
        $employerDatas = employers::getEmployerandCountJob()->get();
//        dd($jobDatas); exit();
        if (Auth::check() && Auth::user()->level == 2) {

                return view('employer.manageInfor');
        }
//        dd( $jobDatas);
        return view('index',compact('jobDatas','employerDatas'));
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
                        Auth::logout();
                        $request->session()->invalidate();
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
                $employee = new employees();
                $employee->user_id =$user->id;
                $employee->save();
                Auth::loginUsingId($user->id);
                return redirect(route('getProfileEmployee'))->with('atention-register', 'Chào mừng người tìm việc đã tạo tài khoảng thành công');
//                return redirect(route('home'))->with('atention',
//                    'Chào mừng người tìm việc đã tạo tài khoảng thành công');
            }
            if ($level == 2) {
                $employer = new employers();
                $employer->user_id = $user->id;
                $employer->save();
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
                return redirect()->route('getProfileEmployee');
            } elseif (Auth::user()->level == 2) {
                return redirect()->route('getProfileEmployer');
            }
        }
        toastr()->Error('Thay đổi mật khẩu không thành công');
        return redirect()->back();
    }


}
