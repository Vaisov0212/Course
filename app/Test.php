<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model

{
    public $table='tests';
    public $fillable=[
        'query',
        'ansver_1',
        'ansver_2',
        'ansver_3',
        'ansver_4'
    ];
}

