<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false; //tidak menggunakan timestamps sesuai permintaan soal
    public function book(){
        return $this->belongsToMany(Book::class)
        ->withPivot(['id']);
    }
}
