<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected  $primaryKey = 'flight_id';
    protected $fillable = [
        'date',
        'limit',
        'airline_id'
    ];
}
