<?php

namespace App\Http\Controllers;

use App\Models\issue;
use App\Models\Student;
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
            $req->session()->flash('managerstudentissue',$issue);
            return redirect('library/student');
        }
        return redirect('library/student');
        // return session('manager') . $req->input()['managerpass'];
        // return $req->input()['student'];
    }
}