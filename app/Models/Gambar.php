<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail', 'produk_id'
    ];

    protected $hidden = [

    ];

    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
}
