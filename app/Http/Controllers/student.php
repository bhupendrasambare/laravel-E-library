<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\due;
use App\Models\issue;
use Illuminate\Http\Request;

class student extends Controller
{
    //
    function detail(){
        if(session('librarylogin')){
            $student = session('librarylogin');
            $books = Book::all();
            $issue=0;
            $issue = count(issue::where('s_id',$student['s_id'])->get());
            return view('account',['student'=>$student,'books'=>$books,'issue'=>$issue]);
        }else{
            return redirect('login');
        }
    }
    function due(){
        if(session('librarylogin')){
            $student = session('librarylogin');
            $due = due::where('student',$student['s_id'])->get();

            return view('due',['due'=>$due,'count'=>0]);
        }else{
            return redirect('login');
        }
    }
    function bag(){
        if(session('librarylogin')){
            $student = session('librarylogin');
            $due = issue::where('s_id',$student['s_id'])->get();
            return view('bag',['due'=>$due]);
        }else{
            return redirect('login');
        }
    }
    function edit(Request $req){
        
    }

}
