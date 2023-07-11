<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function kecamatans(){
        return $this->hasMany(Kecamatan::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function kotas(){
        return $this->hasMany(Kota::class);
    }
}
