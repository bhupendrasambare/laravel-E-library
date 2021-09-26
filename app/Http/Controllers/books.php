<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\issue;
use App\Models\Student;
use Illuminate\Http\Request;

class books extends Controller
{
    //
    function issuebook(Request $req){
        $data =$req->input();
        if($data['student'] && $data['bookid'] && $data['managerpass']){
            if($data['managerpass'] != session('manager')->password){
                session()->flash('bookissuefail',"Password Invalid");
                return redirect('library/issue');
            }
            else{
            $student = Student::where('s_id',$data['student'])->get();
            $book = Book::where('book_id',$data['bookid'])->get();
            if(count($student) >0 && count($book) > 0)
            {
                if($book[0]->issued == "false")
                {
                    Book::where('book_id',$data['bookid'])->update(['issued'=>"true"]);
                    $issuebook = new issue;
                    $issuebook->i_id = null;
                    $issuebook->b_id = $data['bookid'];
                    $issuebook->s_id = $data['student'];
                    $issuebook->L_id = session('manager')->id;
                    $issuebook->issue_date =date('d/m/Y');
                    $issuebook->save();
                    session()->flash('bookissuesuccess',"Success");
                    return redirect('library/issue');
                }
                else{
                    session()->flash('bookissuefail',"Book alredy issued");
                    return redirect('library/issue');
                }
            }
            else
            {
                session()->flash('bookissuefail',"Incorrect data");
                return redirect('library/issue');
            }
        }
        }
        else{
            session()->flash('bookissuefail',"Input Data Invalid");
            return redirect('library/issue');
        }
    }
}
