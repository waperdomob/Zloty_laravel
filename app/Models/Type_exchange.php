<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_exchange extends Model
{
    use HasFactory;
    
<<<<<<< HEAD
    protected $fillable = [
        'id',
        'type_exchanges',
        
    ];
    public function exchanges()
    {
       return $this->hasMany(Exchangue::class);
=======
    public function exchanges()
     {
        return $this->hasMany(Exchangue::class);
>>>>>>> 41f23af29e8f793018d0a766065de5076b32313f
    }
}
