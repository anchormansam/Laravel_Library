<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Checkedout;

class CheckoutController extends Controller
{
    public function index(){

        $books = DB::select('select * from books');
        
        return view ('/checkout', ['books' => $books]);
        // $books = array("G", "D", "E", "F");
    }

    public function checkout(Request $request){

        $id = Auth::user()->id;
        $checkedbook = Checkedout::create([
            'user_id' => $id,
            'book_id' => $request['book_id'],
            
        ]);
 
        $checkedbook->save();
        
        $books = DB::select('select * from books');
        
        return view('/checkout', ['books' => $books]);

    }

    // public function destroy(Request $request){
    //     $grabid = 



    //     $book_id->delete();
    //     return view('/checkout', ['books' => $books]);
    // }

}
