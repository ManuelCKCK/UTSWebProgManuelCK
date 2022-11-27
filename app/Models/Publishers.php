<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function books(){
        return $this->hasMany(books::class);
    }
}
