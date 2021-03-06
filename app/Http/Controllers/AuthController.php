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
            'dob' => 'required|date|date_format:Y-m-d',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $input = $request->only(['nik', 'name', 'address', 'contact']);
        $input['password'] = bcrypt($request->password);
        $input['dob'] = Carbon::createFromFormat('Y-m-d', $request->dob)->toDateString();

        $user = User::create($input);
        $token = $user->createToken('nvc', ['user'])->accessToken;

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
        $token = $user->createToken('nvc', ['user'])->accessToken;

        return response([
            'user' => $user,
            'token' => $token,
            'message' => 'Success',
        ]);
    }

    public function admin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        if (!Auth::guard('admin-web')->attempt($request->only(['username', 'password'])))
            return response([
                'message' => 'Invalid username or password',
            ], 401);

        $user = Auth::guard('admin-web')->user();
        $token = $user->createToken('nvc', ['admin'])->accessToken;

        return response([
            'user' => $user,
            'token' => $token,
            'message' => 'Success',
        ]);
    }

    public function staff(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        if (!Auth::guard('staff-web')->attempt($request->only(['username', 'password'])))
            return response([
                'message' => 'Invalid username or password',
            ], 401);

        $user = Auth::guard('staff-web')->user();
        $token = $user->createToken('nvc', ['staff'])->accessToken;

        return response([
            'user' => $user,
            'token' => $token,
            'message' => 'Success',
        ]);
    }
}
