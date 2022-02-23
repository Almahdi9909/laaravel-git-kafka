<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resolveConflictController extends Controller
{
    function retriveHelloVersion(){
        return view('hello');
    }
}
