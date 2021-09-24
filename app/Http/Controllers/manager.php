<?php

namespace App\Http\Controllers;

use App\Models\issue;
use App\Models\Student;
use App\Models\Book;
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
    function studentsearch(Request $req){
        if(session('manager')->password == $req['managerpass']){
            $student = Student::where('s_id',$req->input('student'))->get();
            $issue = issue::where('s_id',$req->input('student'))->get();
            if(count($student) > 0){
                $req->session()->flash('managerstudentsearch',$student[0]);
            }else{
                return redirect('library/student');
            }
            if(count($issue) > 0){
                $req->session()->flash('managerstudentissue',$issue);
            } 
            return redirect('library/student');
        }
        return redirect('library/student');
    }
    function deleteissue(Request $req){
        if(isset($req->input()['book'])){
            $books = $req->input()['book'];
            issue::where('i_id',$books)->delete();
            Book::where('book_id',$books)->update(['issued'=>"false"]);
            // return $book;
            return "true";
        }
        return $req->input();
    }
    function deleteissueall(Request $req){
        if(isset($req->input()['student'])){
            $books = $req->input()['student'];
            issue::where('s_id',$books)->delete();
            Book::where('book_id',$books)->update(['issued'=>"false"]);
            return "true";
        }
        return $req->input();
    }
}