<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function publisher(){
        return $this->belongsTo(publisher::class);
    }
        public function bookcategory(){
            return $this->belongsToMany(bookcategory::class);
        }
}

