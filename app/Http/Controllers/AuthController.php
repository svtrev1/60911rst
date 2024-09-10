<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'Logged out'
        ]);
    }

    public function login(Request $request)
         {
             $credentials = $request->validate([
                 'email' => ['required', 'email'],
                 'password' => ['required']
             ]);

             if (Auth::attempt($credentials)) {
                 $user = Auth::user();
                 $token = $user->createToken('authToken')->plainTextToken;
                 return response()->json([
                     'access_token' => $token,
                     'token_type' => 'Bearer',
                 ]);
             }

             return response()->json(['error' => 'Invalid credentials'], 401);
         }

}
