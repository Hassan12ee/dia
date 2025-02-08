<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class excercises extends Model
{
    use HasFactory;
    protected $fillable = [
        'activty_level',
        'excercise_ID',
        'Name',
        'Type',
        'Time',
        'Sets',
    ];
}
