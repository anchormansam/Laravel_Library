<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BookviewController extends Controller
{
    public function viewbook($title){

        $sql = DB::table('books')->where('title', '=', $title)->get();
        return view ('/bookview', ['book'=> $sql]);
    }
}
