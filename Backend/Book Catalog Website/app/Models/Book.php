<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false; //tidak menggunakan timestamps sesuai permintaan soal

    use HasFactory;

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class)
        ->withPivot(['id']);
    }
}
