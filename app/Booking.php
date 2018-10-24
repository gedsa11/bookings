<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'activity_id', 'date','people_number','total_price'
    ];

    public function activity()
    {
        return $this->belongsTo('App\Activity', 'activity_id');
    }
}
