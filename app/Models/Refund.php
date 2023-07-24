<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function transaction(){
        return $this->belongsTo( Transaction::class, 'transaction_id', 'id' );
    }
    public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id');
    }

}
