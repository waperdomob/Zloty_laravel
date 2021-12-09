<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function product()
     {
        return $this->hasOne(Product::class,'product_id');
=======

    public function exchange()
     {
        return $this->hasOne(Exchange::class,'output_id');
    }
    public function product()
     {
        return $this->belongsTo(Product::class,'product_id');
>>>>>>> 41f23af29e8f793018d0a766065de5076b32313f
    }
}
