<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save();

        return response()->json([
            'message' => 'Successfully registered!'
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }
        else{
            $status = 'Is Login Successful';
            return view('welcome')->with('status', $status);
        }
        // return redirect()->route('dashboard');
        // return response()->json([
        //     'message' => 'Is Login Successful'
        // ], 200);

    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //         'remember_me' => 'boolean'
    //     ]);

    //     $credentials = request(['email', 'password']);

    //     if (!Auth::attempt($credentials)) {
    //         return response()->json([
    //             'message' => 'Invalid credentials'
    //         ], 401);
    //     }

    //     $user = $request->user();

    //     $tokenResult = $user->createToken('Personal Access Token');
    //     $token = $tokenResult->plainTextToken;

    //     if ($request->remember_me) {
    //         $token->expires_at = now()->addWeeks(1);
    //     }

    //     return response()->json([
    //         'access_token' => $tokenResult->accessToken,
    //         'token_type' => 'Bearer',
    //         'expires_at' => $request->remember_me ? $token->expires_at->toDateTimeString() : null
    //     ]);
    // }

    public function loginPage(){
        return view('auth.login');
    }
}
