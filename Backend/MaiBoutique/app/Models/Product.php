<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function cart(){
        return $this->belongsToMany(Cart::class)
        ->withPivot(['id', 'qty']);
    }

    public function transaction(){
        return $this->belongsToMany(Transaction::class)
        ->withPivot(['id', 'qty']);
    }
}
