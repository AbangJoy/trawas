<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = ['menu' => 'array'];
    protected $guarded = [];
    public $timestamps = false;
}
