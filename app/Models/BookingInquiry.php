<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'arrival',
        'departure',
        'rooms',
        'adults',
        'children'
    ];
}
