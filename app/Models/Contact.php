<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Table name (optional but safe)
    protected $table = 'contacts';

    // Mass assignment allow
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
