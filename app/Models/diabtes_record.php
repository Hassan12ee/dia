<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diabtes_record extends Model
{
    use HasFactory;
    protected $fillable = [
        'record_id',
        'patient_id',
        'height',
        'weight',
        'number_of_pregnacies',
        'glucose_level',
        'skin_thickness',
        'activity_level',
        'insulin_level',
        'BMI',
        'outcome',
        'Age',
        ];

}
