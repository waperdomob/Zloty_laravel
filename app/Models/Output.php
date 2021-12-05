<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;

    public function exchange()
     {
        return $this->hasOne(Exchange::class,'output_id');
    }
}
