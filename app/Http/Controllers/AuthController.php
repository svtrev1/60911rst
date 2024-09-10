<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
            $fields = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string'
            ]);

            $user = User::where('email', $fields['email'])->first();

            if (!$user){
                return response(['message' => 'Wrong email'], 401);
            }

            if (!Hash::check($fields['password'], $user->password)) {
                return response(['message' => 'Wrong password'], 401);
            }

            $token = $user->createToken('myapptoken')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];
            return response($response, 201);
            //  $credentials = $request->validate([
            //      'email' => ['required', 'email'],
            //      'password' => ['required']
            //  ]);

            //  if (Auth::attempt($credentials)) {
            //      $user = Auth::user();
            //      $token = $user->createToken('authToken')->plainTextToken;
            //      return response()->json([
            //          'access_token' => $token,
            //          'token_type' => 'Bearer',
            //      ]);
            //  }

            //  return response()->json(['error' => 'Invalid credentials'], 401);
         }

}
