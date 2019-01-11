<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
