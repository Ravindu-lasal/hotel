<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Rooms extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'room_number',
        'room_type',
        'price_per_night',
        'capacity',
        'description',
        'overview',
        'advance_facilities',
        'challenge',
        'status',
        'is_accessible'
    ];

    public function images()
    {
        return $this->hasMany(Images::class, 'room_id');
    }

}
