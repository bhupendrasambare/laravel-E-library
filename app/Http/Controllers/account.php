<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class account extends Controller
{
    //
    function main(){
        if(session('librarystudent')){
            return redirect('student');
        }else{
            return redirect('login');
        }
    }
    function login(Request $req){
        
    }
    function make(Request $req){

    }
    function forgot(Request $req){

    }
}
