<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class wishlistEmployerController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('employee');
//    }

    function index()
    {
        return view('employee.wishlistEmployer');
    }
    function deleteAccount($id){
        if (request()->ajax()) {
            $findAccount = User::find($id)->delete();
            return response()->json($findAccount);
        }
        return view('errors.404');
    }
}
