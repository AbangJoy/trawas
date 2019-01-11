<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'informasi';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
