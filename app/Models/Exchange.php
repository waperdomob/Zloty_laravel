<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id',
        'type_exchange_id',
        'exchange_state',
        'input_id',
        'output_id',
    ];
    
    public function user()
     {
        return $this->belongsTo(User::class,'user_id');
    }
    public function input()
     {
        return $this->hasOne(Input::class,'input_id');
    }
    public function output()
     {
        return $this->hasOne(Output::class,'output_id');
    }
    public function type_Exchange()
     {
        return $this->belongsTo(Type_exchange::class,'type_exchange_id');
    }
    public function Exchange_state()
     {
        return $this->belongsTo(Type_exchangue::class,'exchange_state_id');
    }
}
