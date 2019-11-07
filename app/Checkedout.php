<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkedout extends Model
{
    //
    protected $fillable = ["user_id", "book_id"];
}
