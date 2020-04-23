<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{
    function __contruct()
    {
        $this->middleware('guest');
    }

}
