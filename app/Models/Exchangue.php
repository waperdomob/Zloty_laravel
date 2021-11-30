<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchangue extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'type_exchanghe_id',
        'user_id',
        'product_id',
    ];
    
    public function user()
     {
        return $this->belongsTo(User::class,'user_id');
    }
    public function product()
     {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function typeExchange()
     {
        return $this->belongsTo(Type_exchangue::class,'type_exchangue_id');
    }
}
