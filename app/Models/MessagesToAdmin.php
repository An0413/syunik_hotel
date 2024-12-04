<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagesToAdmin extends Model
{
    use HasFactory;

    protected $table = 'messages_to_admin';
    protected $guarded = [];
}
