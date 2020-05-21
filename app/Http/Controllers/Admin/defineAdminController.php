<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\User;

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
   function getListAcounts(){
//       $users = User::where('level', '!=', 0)->first();
       $users = User::select(['id','username','email','created_at','updated_at'])->where('level', '!=', 0);
       print_r($users); exit;
       return DataTables::of($users)->make(true);
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
