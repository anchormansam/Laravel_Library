<?php

namespace App\Http\Controllers;
use DB;
use App\Book;
use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function index(){
        
        $addbook = Book::all();
        return view('addbook', ['addbook'=> $addbook]);
    }
   
    public function create(){
        return view('create');
    }
 
    public function store(Request $request){
        //dd($request);
        $addbook = Book::create([
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'author' => $request['author'],
            'description' => $request['description'],
            'available' => true,
        ]);
 
        $addbook->save();
        // return redirect()->back() ->with('alert', 'Updated!');
            echo '<script>alert("Book Added")</script>';
        return view('create',['flash'=>'Book Added']);
 
    }
    
 
}

