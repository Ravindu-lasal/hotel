<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    // Define the relationship with the bookings model
    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'guest_id', 'guest_id');
    }
}
