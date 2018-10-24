<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'name', 'description','slug','price'
    ];

    public function bookings()
    {
        return $this->hasMany('App\Booking', 'activity_id', 'id');
    }
    
}
