<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

    function addUser(){
        return [
            "username" => "almahdi",
            "password" => "jassim"
        ];
    }
}
