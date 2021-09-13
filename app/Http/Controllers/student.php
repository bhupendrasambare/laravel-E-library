<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller
{
    //
    function detail(){
        if(session('librarylogin')){
            $student = session('librarylogin');
            return view('account',['account'=>$student]);
        }else{
            return redirect('login');
        }
    }
    function due(){

    }
    function bag(){

    }
    function edit(Request $req){
        
    }

}
