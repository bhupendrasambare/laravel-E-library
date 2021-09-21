<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manager extends Controller
{
    //
    function check(){
        return session('manager');
    }
}
