<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $table='quizs';
    public $fillable=[
        'query',
        'ansver_1',
        'ansver_2',
        'ansver_3',
        'ansver_4',
        'quiz_img',
        'id_cat'
    ];

    public function category()
    {
           return $this->hasOne(Category::class,'id','id_cat');
    }
}
