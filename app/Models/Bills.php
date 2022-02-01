<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;


    protected $fillable = [
        'client_id',
        'cubic_meter',
        'bill_amount',
        'status'
    ];



    public function client() {
        return $this->belongsTo(Client::class);
    }
}
