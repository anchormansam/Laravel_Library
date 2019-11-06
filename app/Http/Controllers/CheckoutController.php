<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CheckoutController extends Controller
{
    public function index(){

        $books = DB::select('select * from books');
        
        return view ('/checkout', ['books' => $books]);
        // $books = array("G", "D", "E", "F");
    }
}
