<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nik' => 'required|size:16|unique:users',
            'name' => 'required|string',
            'password' => 'required|min:8|confirmed',
            'dob' => 'required|date|date_format:d-m-Y',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $input = $request->only(['nik', 'name', 'address', 'contact']);
        $input['password'] = bcrypt($request->password);
        $input['dob'] = Carbon::createFromFormat('d-m-Y', $request->dob)->toDateString();

        $user = User::create($input);
        $token = $user->createToken('nvc')->accessToken;

        return response([
            'user' => $user,
            'token' => $token,
            'message' => 'Success',
        ]);
    }

    public function user(Request $request)
    {
        $request->validate([
            'nik' => 'required|size:16',
            'password' => 'required|min:8',
        ]);

        if (!Auth::attempt($request->only(['nik', 'password'])))
            return response([
                'message' => 'Invalid NIK or password',
            ], 401);

        $user = Auth::user();
        $token = $user->createToken('nvc')->accessToken;

        return response([
            'user' => $user,
            'token' => $token,
            'message' => 'Success',
        ]);
    }
}
