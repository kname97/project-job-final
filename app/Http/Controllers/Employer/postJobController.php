<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobcategories;
use DB;
class postJobController extends Controller
{
  function __construct()
  {
      $this->middleware('employer');
  }

//  store jobs
function jobStore(){

}
}
