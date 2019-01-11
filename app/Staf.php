<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $table = 'staf';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
