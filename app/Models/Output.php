<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;
    protected $fillable = [                
        'date',
        'quantity',
        'product_id',
    ];
    public function exchange()
     {
        return $this->belongsTo(Exchange::class,'output_id');
    }
    public function product()
     {
        return $this->belongsTo(Product::class,'product_id');
    }
}
