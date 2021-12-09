<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    protected $fillable = [
        
<<<<<<< HEAD
        'user_id',
        'type_exchange_id',
        'exchange_state',
        'input_id',
        'output_id',
=======
        
        'user_id',
        'input_id',
        'output_id',
        'type_exchange_id',
        'exchange_state',
>>>>>>> 41f23af29e8f793018d0a766065de5076b32313f
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
<<<<<<< HEAD
        return $this->hasOne(Output::class,'output_id');
    }
    public function type_Exchange()
     {
        return $this->belongsTo(Type_exchange::class,'type_exchange_id');
    }
    public function Exchange_state()
     {
        return $this->belongsTo(Type_exchangue::class,'exchange_state_id');
=======
        return $this->hasOne(Output::class,'input_id');
    }
    public function typeExchange()
     {
        return $this->belongsTo(Type_exchangue::class,'type_exchangue_id');
    }
    public function exchange_state()
     {
        return $this->belongsTo(Exchange_state::class,'exchange_state_id');
>>>>>>> 41f23af29e8f793018d0a766065de5076b32313f
    }
}
