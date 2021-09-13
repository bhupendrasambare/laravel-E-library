<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class account extends Controller
{
    //
    function main(){
        if(session('librarylogin')){
            return redirect('details');
        }else{
            return redirect('login');
        }
    }
    function login(Request $req){
        $data = $req->input();
        if($data['id'] != null && $data['password'] !=null){
            if(substr($data['id'],0,1)== "S"){
                $student = Student::where('s_id',substr($data['id'],1))->where('password',$data['password'])->get();
                if(count($student) >0){
                    $req->session()->put('librarylogin',$student[0]);
                    return redirect('/');
                }
                $req->session()->flash('loginfail',"fail");
            return redirect('login');
            }
            elseif(substr($data['id'],0,1)== "L"){
                return "Libriran";
            }else{
                $req->session()->flash('loginfail',"fail");
            return redirect('login');
            }
        }else{
            $req->session()->flash('loginfail',"fail");
            return redirect('login');
        }
    }
    function make(Request $req){
        $data =  $req->input();
        if($data['name'] !=null && $data['last'] != null && $data['email'] !=null && $data['password'] != null && $data['number'] != null){
            $details = Student::where('name',$data['name'])->where('last',$data['last'])->where('email',$data['email'])->where('number',strval($data['number']))->get();
            if(count($details) >0){
                return view('details',['massage'=>"account exist",'details'=>$details[0]]);
            }else{
                $student = new Student;
                $student->s_id = null;
                $student->name = $data['name'];
                $student->last = $data['last'];
                $student->email = $data['email'];
                $student->number = strval($data['number']);
                $student->password = $data['password'];
                $student->save();
                $details = Student::where('name',$data['name'])->where('last',$data['last'])->where('email',$data['email'])->where('number',strval($data['number']))->where('password',$data['password'])->get();
                return view('details',['massage'=>"account created",'details'=>$details[0]]);
            }
        }else{
            return redirect('login');
        }

    }
    function forgot(Request $req){
        $data =  $req->input();
        if($data['name'] !=null && $data['last'] != null && $data['email'] !=null && $data['number'] != null){
            $details = Student::where('name',$data['name'])->where('last',$data['last'])->where('email',$data['email'])->where('number',strval($data['number']))->get();
                return view('details',['massage'=>"account found",'details'=>$details[0]]);
        }
    }
    function logout(){
        session()->forget('librarylogin');
        return redirect('/');
    }
}
