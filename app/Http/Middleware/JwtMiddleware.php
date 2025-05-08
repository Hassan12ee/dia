<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;

class JWTMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Get the 'Authorization' header
        $authHeader = $request->header('Authorization');

        if (!$authHeader) {
            return response()->json(['error' => 'Authorization header is missing'], 401);
        }

        // Extract the token from the 'Authorization' header (in the format 'Bearer <token>')
        $token = str_replace('Bearer ', '', $authHeader);

        try {
            // Attempt to authenticate the user with the token
            $user = JWTAuth::setToken($token)->authenticate();

            if (!$user) {
                return response()->json(['error' => 'Invalid token'], 401);
            }

            // Attach the authenticated user to the request object
            $request->auth = $user;

        } catch (JWTException $e) {
            return response()->json(['error' => 'Token could not be parsed or is invalid'], 401);
        }

        return $next($request);
    }
}
