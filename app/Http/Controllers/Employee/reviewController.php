<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reviewController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('employee');
//    }

    function index()
    {
        return view('employee.reviewEmployer');
    }
}
