<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storediabtes_recordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'patient_id' => 'required|max:100',
            'gender' => 'required|in:Male,Female',
            'age' => 'required|max:13',
            'hypertension'=> 'required|in:0,1',
            'heart_disease'=> 'required|in:0,1',
            'smoking_history'=> 'required|in:non-smoker,past_smoker,current',
            'bmi'=> 'required',
            'HbA1c_level'=> 'required',
            'blood_glucose_level'=> 'required|max:255',
            'activity_level'=>'required|in:1,2,3,4',
            'diabetes'=> 'required|in:0,1',
        ];
    }
}
