<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
