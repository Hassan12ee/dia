<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class diabtesrecords extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
     'id'=>$this-> id,
     'patient_id'=>$this-> patient_id,
     'gender' =>$this ->gender,
     'age' => $this-> age,
     'hypertension'=>$this-> hypertension,
     'heart_disease'=>$this-> heart_disease,
     'smoking_history'=>$this-> smoking_history,
     'bmi'=>$this-> bmi,
     'HbA1c_level'=>$this-> HbA1c_level,
     'blood_glucose_level'=>$this-> blood_glucose_level,
     'diabetes'=>$this-> diabetes,
     'activity_level'=>$this->activity_level,
        ];
    }
}
