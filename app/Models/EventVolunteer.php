<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventVolunteer extends Model
{
   
    protected $fillable = [
        'event_id',
        'preferred_date',
        'user_id',
    ];
}
