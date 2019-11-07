<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ["title", "author", "subtitle", "description", "available"];
    public function book(){
        return $this->belongsTo(User::class);
    }
}
