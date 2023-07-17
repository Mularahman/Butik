<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'kategori_id','namaproduk', 'subkategori_id','kodeproduk', 'beratproduk','ukuranproduk', 'warnaproduk','stokproduk', 'hargaproduk','deskripsishort', 'deskripsiproduk', 'diskon', 'status',
    ];
    // protected $guarded = ['id'];
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function subkategori(){
        return $this->belongsTo(Subkategori::class);
    }
    public function users(){
        return $this->hasOne( User::class, 'id', 'user_id');
    }
    public function gambar(){
        return $this->hasMany( Gambar::class, 'produk_id', 'id' );
    }
    public function ulasan(){
        return $this->hasMany( Ulasan::class, 'produk_id', 'id' );
    }
}
