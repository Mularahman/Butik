<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'produk_id',
        'harga',
        'status',
        'resi',
        'qty',
        'catatan',
        'kurir',
        'kode',
        'ongkir',
    ];

    protected $hidden = [

    ];

    public function produk(){
        return $this->hasOne( Produk::class, 'id', 'produk_id' );
    }
    public function product()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function transaction(){
        return $this->hasOne( Transaction::class, 'id', 'transaction_id' );
    }

    public function scopeSoldProductsCount($query)
    {
        return $query->selectRaw('produk_id, sum(qty) as total_sold')
            ->groupBy('produk_id')
            ->orderByDesc('total_sold');
    }
}
