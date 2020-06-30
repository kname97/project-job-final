<?php

namespace App\Http\Controllers\Employer;

use App\User;
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
     function getProfile(){

        return view('employer.profileEmployer');
     }
    function getViewPostJob(){

            return view('employer.postJob');

    }
    function getviewInforEmployer() {
        return view('employer.manageInfor');
    }
    function postJob(Request $request){

    }
}
