<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diabtes_record extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'patient_id',
        'gender',
        'age',
        'hypertension',
        'heart_disease',
        'smoking_history',
        'bmi',
        'HbA1c_level',
        'blood_glucose_level',
        'diabetes',
        'activty_level',
        ];

}
