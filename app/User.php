<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function staf()
    {
        return $this->hasMany(Staf::class);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }

    public function informasi()
    {
        return $this->hasMany(Informasi::class);
    }

    public function profil()
    {
        return $this->hasMany(Profil::class);
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }

    public function beranda()
    {
        return $this->hasMany(Beranda::class);
    }
}
