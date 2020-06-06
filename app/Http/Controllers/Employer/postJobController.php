<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobcategories;
use DB;
class postJobController extends Controller
{
    function getJobcategories(){
        $cateJobs = DB::table('jobcategories')->get();
//        return response()->json($cateJobs);
        return view('employer.postJob',compact('cateJobs'));
    }
}
