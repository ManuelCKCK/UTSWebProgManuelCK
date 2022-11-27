<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function categories(){
        return $this->hasOne(Categories::class);
    }
    public function books(){
        return $this->belongsToMany(Books::class);
    }
}
