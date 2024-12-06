<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomComment extends Model
{
    use HasFactory;
    protected $table = 'room_comments';
    protected $guarded =[];
}
