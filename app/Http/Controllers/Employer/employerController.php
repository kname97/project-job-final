<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use  DB;
class employerController extends Controller
{
    function __construct(){
        $this->middleware('employer');
    }
     function checkEmployer(){

     }
    function getViewPostJob(){
        if (Auth::check())
        {
            $cateJobs = DB::table('jobcategories')->get();
//        return response()->json($cateJobs);
            return view('employer.postJob',compact('cateJobs'));
//            return view('employer.postJob');
        }
        return back();

    }
    function postJob(Request $request){

    }
}
