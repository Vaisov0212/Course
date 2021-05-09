<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table='posts';
     public $fillable=[
           'name',
           'subject',
           'title',
           'views',
           'img'
     ];


}
