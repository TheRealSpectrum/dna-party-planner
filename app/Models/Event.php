<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "organizer",
        "date",
        "location",
        "description",
        "max_registration_num",
    ];

    protected $casts = [
        "date" => "datetime",
    ];
}