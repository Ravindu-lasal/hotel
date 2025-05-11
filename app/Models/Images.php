<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Images extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'ImageURL', 'ImageOrder'];

    
    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }
}
