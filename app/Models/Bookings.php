<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{

    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';
    public $timestamps = true;
    public $incrementing = true; // or false if it's not auto-increment
    protected $keyType = 'int'; // or 'string' if booking_id is not an integer

    protected $fillable = [
        'booking_number',
        'user_id',
        'guest_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'number_of_guest',
        'total_price',
        'booking_status',
        'message',
    ];
    protected $casts = [
        'check_in_date' => 'date',
        'check_out_date' => 'date',
        'total_price' => 'decimal:2',
    ];    

    // Define the relationship with the Room model
    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id', 'id');
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Define the relationship with the Images model
    public function images()
    {
        return $this->hasMany(Images::class, 'room_id', 'room_id');
    }

    // Define the relationship with the guest model
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

}
