<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'type',
        'route',
        'status',
        'stub_number',
        'first_meter_reading',
        'contact_number',
        'meter_number',
        'status',
    ];
}
