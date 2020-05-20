<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class employerController extends Controller
{
    function __construct(){
        $this->middleware('employer');
    }

    function getViewPostJob(){
        return view('employer.postJob');
    }
    function postJob(Request $request){

    }
}
