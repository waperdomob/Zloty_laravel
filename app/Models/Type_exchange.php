<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_exchange extends Model
{
    use HasFactory;
    
    public function exchanges()
     {
        return $this->hasMany(Exchangue::class);
    }
}
