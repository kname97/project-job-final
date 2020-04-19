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
   function getDemo()
   {
       return view('admin.pagesAdmin.demoAdmin');
   }
}
