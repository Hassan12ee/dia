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
        return false;
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
            'height' => 'required',
            'weight' => 'required|max:255',
            'number_of_pregnacies'=> 'required|max:100',
            'glucose_level'=> 'required|max:100',
            'skin_thickness'=> 'required|max:100',
            'activity_level'=> 'required|max:100',
            'insulin_level'=> 'required|max:100',
            'BMI'=> 'required|max:100',
            'outcome'=> 'required|max:100',
            'Age'=> 'required|max:100',

        ];
    }
}
