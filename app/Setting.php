<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = [
        'menu' => 'array',
        'menu1' => 'array',
        'menu2' => 'array',
        'menu3' => 'array',
        'menu4' => 'array',
        'menu5' => 'array',
        'menu6' => 'array',
        'menu7' => 'array',
        'menu8' => 'array',
        'menu9' => 'array',
        'menu10' => 'array',
    ];
    protected $guarded = [];
    public $timestamps = false;
}
