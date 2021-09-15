<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class student extends Controller
{
    //
    function detail(){
        if(session('librarylogin')){
            $student = session('librarylogin');
            $books = Book::all();
            return view('account',['student'=>$student,'books'=>$books]);
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
