<?php

// app/Models/Event.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'image',
        
    ];

    public function getDateRange()
    {
        $startDate = $this->start_date;
        $endDate = $this->end_date;

        $dateRange = [];
        $currentDate = $startDate;

        while ($currentDate <= $endDate) {
            $dateRange[] = $currentDate;
            $currentDate = \Carbon\Carbon::parse($currentDate)->addDay()->toDateString();
        }

        return $dateRange;
    }


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public function users()
{
    return $this->belongsToMany(User::class)->withPivot('preferred_date');
}

}
