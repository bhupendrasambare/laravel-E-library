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
        if($data['student'] && $data['bookid'] && $data['managerpass'])
        {
            if($data['managerpass'] != session('manager')->password)
            {
                session()->flash('bookissuefail',"Password Invalid");
                return redirect('library/issue');
            }
            else
            {
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
    function booksearch(Request $req){
        $data = $req->input();
        if($data['managerpass'] == session('manager')->password){
            if($data['name'] || $data['subject'] || $data['department'])
            {
                $books = Book::where('name',$data['name'])->orWhere('department', $data['department'])->orWhere('subject',$data['subject'])->get();
                if(count($books) >0){
                    session()->flash('bookfound',$books);
                return redirect('library/book');
                }
                session()->flash('passfail',"No data found");
                return redirect('library/book');
            }
            else
            {
                session()->flash('passfail',"Atleast One entry required");
                return redirect('library/book');
            }
        }
        else
        {
            session()->flash('passfail',"Wrong manager password");
            return redirect('library/book');
        }
    }
    function addbook(Request $req){
        $data = $req->input();
        if($data['password'] == session('manager')->password)
        {
            if($data['name'] && $data['author'] && $data['department'] && $data['subject'] && $data['year'] && $data['location'])
            {
                $book = new Book;
                $book->name = $data['name'];
                $book->author = $data['author'];
                $book->department =  $data['department'];
                $book->subject =  $data['subject'];
                $book->year =  $data['year'];
                $book->issued =  "false";
                $book->location =  $data['location'];
                $book->save();
                session()->flash('bookaddsuccess',$data['name']." Added to ".$data['location']);
                return redirect('library/add');
            }
            else
            {
                session()->flash('bookaddfail',"Insufficient data");
                return redirect('library/add');
            }
        }
        else
        {
            session()->flash('bookaddfail',"Password Incorrect");
            return redirect('library/add');
        }
    }
}
