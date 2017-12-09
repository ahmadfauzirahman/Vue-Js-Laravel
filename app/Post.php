<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //deklarasikan field yg ada di database
    protected  $table = 'posts';
    protected $fillable = ['title','body'];
}
