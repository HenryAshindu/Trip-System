<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_location', 'dropoff_location', 'type', 'driver_name',
        'car_make', 'car_model', 'car_number', 'status', 'distance', 'time',
    ];
}
