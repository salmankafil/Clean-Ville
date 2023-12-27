<?php

// app/Models/Task.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'event_id',
        'description',
        // Add more fields as needed
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
