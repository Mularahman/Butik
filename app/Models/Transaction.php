<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tanggal',
        'diskon',
        'total_harga',
        'transaction_status',
        'kode'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id');
    }
    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
    public function totalSoldQuantity()
    {
        return $this->transaction_details()->sum('qty');
    }
}
