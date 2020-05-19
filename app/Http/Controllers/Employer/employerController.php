<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class employerController extends Controller
{
    function getViewPostJob(){
        return view('employer.postJob');
    }
}
