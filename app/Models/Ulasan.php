<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'produk_id',
        'ulasan',
        'bintang',
        'tanggal',

    ];

    public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id');
    }
    public function produk(){
        return $this->belongsTo( Produk::class, 'produk_id', 'id' );
    }
}
