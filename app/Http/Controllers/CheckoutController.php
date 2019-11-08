<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Book;
use App\Checkedout;

class CheckoutController extends Controller
{
    public function index(){
        $books=[];
        if(Auth::user() != null){
            if(Auth::user()->librarian){
                $books = Book::all();
            } 
        }
        if(count($books)==0) {
            $books = Book::where('available', 1)->get();

        }
       
        return view ('/checkout', ['books' => $books]);
    }

    public function checkout(Request $request){
        
        $id = Auth::user()->id;
        $checkedbook = Checkedout::create([
            'user_id' => $id,
            'book_id' => $request['book_id'],
            
        ]);
        $checkedbook->save();
 
        $update = Book::find($request['book_id']);
        $update->available = 0;

        $update->save();
        
        $books = Book::all();
        
        return view('/checkout', ['books' => $books]);

    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $checkedbook = Checkedout::destroy($request['book_id']);
 
        $update = Book::find($request['book_id']);
        $update->available = 1;

        $update->save();
        
        $books = Book::all();
        
        return view('/checkout', ['books' => $books]);


    }

}
