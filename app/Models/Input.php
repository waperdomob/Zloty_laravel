<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;
    public function exchange()
     {
        return $this->hasOne(Exchange::class,'input_id');
    }
    public function product()
     {
        return $this->belongsTo(Product::class,'product_id');
    }

}
