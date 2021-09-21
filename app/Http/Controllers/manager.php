<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manager extends Controller
{
    //
    function redirect(){
        if(!session('manager')){
            return redirect('login');
        }
        return redirect('library/detail');
    }
    function check(){
        if(!session('manager')){
            return redirect('login');
        }
        return view('managerdetails',['data'=>session('manager')]);
    }
    function managerstudent(){
        return "student";
    }
}