<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\DiabetesType;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\diabtes_record;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DiabetesTypeController extends Controller
{
    public function predictDiabetesType(Request $request)
    {
        $validated = $request->validate([
            'age' => 'required|integer',
            'gender' => 'required|string',
            'insulin' => 'required|numeric',
            'glucose' => 'required|numeric',
            'hba1c' => 'required|numeric',
            'bmi' => 'required|numeric',
            'homa_ir' => 'required|numeric',
            'family_history' => 'boolean',
            'pregnant' => 'boolean',
            'c_peptide' => 'nullable|numeric',
            'gad_antibodies' => 'nullable|boolean',
        ]);

        try {
            $response = Http::post('http://127.0.0.1:8000/diabetes_type/predict_diabetes_type', $validated);
            $result = $response->json();

            $diabetes = diabtes_record::create(array_merge($validated, [
                'diabetes_type' => $result['diabetes_type'] ?? null,
                'message' => $result['message'] ?? null,
                'confirmed' => $result['confirmed'] ?? false,
            ]));

            return response()->json($diabetes);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to connect to AI server',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}