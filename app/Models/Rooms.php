<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $guarded = [];

    public function roomType(){
        return $this->hasOne(RoomType::class,  'id', 'type_id');
    }

    public function bookings(){
        return $this->hasOne(Book::class,  'room_id', 'id');
    }
}
