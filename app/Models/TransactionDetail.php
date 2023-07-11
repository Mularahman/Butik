<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'transactions_id',
        'produk_id',
        'harga',
        'status',
        'resi',
        'kode'
    ];

    protected $hidden = [

    ];

    public function produk(){
        return $this->hasOne( Produk::class, 'id', 'produk_id' );
    }

    public function transaction(){
        return $this->hasOne( Transaction::class, 'id', 'transactions_id' );
    }
}
