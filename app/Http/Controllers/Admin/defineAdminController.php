<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class defineAdminController extends Controller
{
   function __contruct()
   {
       $this->middleware('checkAdmin');
   }
   function getAccounts()
   {
       return view('admin.pagesAdmin.accountsAdmin');
   }
   function getApplies()
   {
       return view('admin.pagesAdmin.appliesAdmin');
   }
   function getReviews()
   {
       return view('admin.pagesAdmin.reviewsAdmin');
   }
   function getRanks()
   {
       return view('admin.pagesAdmin.ranksAdmin');
   }
}
