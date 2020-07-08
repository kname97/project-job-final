<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\jobs;
use App\Models\wishlistemployers;
class rankController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('employee');
//    }

    function index()
    {
        $ranks =wishlistemployers::getRankbyWishListEmployer();
//        $rank = wishlistemployers::all();
//        dd($ranks);
        return view('employee.rankEmployer',compact('ranks'));
    }

}
