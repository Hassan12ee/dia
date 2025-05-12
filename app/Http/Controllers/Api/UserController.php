<?php

namespace App\Http\Controllers\Api;



use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use ApiResponseTrait;

    // // Store a new user
    // public function store(Request $request)
    // {
    //     try {
    //     // Validate incoming request
    //     $validated = $request->validate([
    //         'age' => 'required|integer|min:0|max:150',
    //         'activity_level'=>'required|in:0,1,2,3',
    //         'gender' => 'required|in:Male,Female',
    //         'diabetes' => 'required|in:0,1',
    //         'smoking_history' => 'required|in:non-smoker,past_smoker,current'
    //     ]);



    //     $user = User::create($validated);

    //         // Return a successful response
    //         return response()->json([
    //             'message' => 'User created successfully!',
    //             'user' => $user
    //         ], Response::HTTP_CREATED);

    //     } catch (ValidationException $e) {
    //         // Handle validation errors
    //         return response()->json([
    //             'error' => 'Validation Error',
    //             'messages' => $e->errors()
    //         ], Response::HTTP_UNPROCESSABLE_ENTITY);
    //     }

    // }
    public function show($id)
    {
        try {
            $user = user::findOrFail($id);

            return response()->json([
                'message' => 'User found successfully!',
                'user' => $user
            ], Response::HTTP_OK);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'User Not Found',
                'message' => "No user found with ID: $id"
            ], Response::HTTP_NOT_FOUND);

        }
    }

    // 📌 Update a user
    public function update(Request $request, $id)
    {

            // Find the user
            $user = User::findOrFail($id);

            // Validate the incoming request
            $validated = $request->validate([
                'activity_level'=>'required|in:0,1,2,3',
                'diabetes' => 'required|in:0,1',
                'smoking_history' => 'required|in:non-smoker,past_smoker,current'
            ]);

            // Update the user with the validated data
            $user->update([
                "activity_level" => $request->activity_level,
                "smoking_history" => $request->smoking_history,
                "diabetes" => $request->diabetes,
            ]);

            return response()->json([
                'message' => 'User updated successfully!',
                'user' => $user
            ], Response::HTTP_OK);


    }
}



