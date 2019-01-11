<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $table = 'beranda';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
