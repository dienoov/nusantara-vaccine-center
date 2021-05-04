<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVaccine;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all()
    {
        return response([
            'users' => User::with(['vac_center', 'user_vaccine.vac_status'])->get(),
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nik' => "required|size:16|unique:users,id,{$id}",
            'name' => 'required|string',
            'dob' => 'required|date|date_format:Y-m-d',
            'address' => 'required|string',
            'contact' => 'required|string',
            'vac_center_id' => 'required|exists:vac_centers,id',
            'vaccine_id' => 'nullable|exists:vaccines,id',
            'vac_status_id' => 'nullable|exists:vac_statuses,id',
        ]);

        $input = $request->only(['nik', 'name', 'address', 'contact', 'vac_center_id']);
        $input['dob'] = Carbon::createFromFormat('Y-m-d', $request->dob)->toDateString();

        $user = User::find($id);
        $user->update($input);

        $second_input = $request->only(['vaccine_id', 'vac_status_id']);

        $user_vaccine = UserVaccine::where('user_id', $id)->first();
        $user_vaccine->update($second_input);

        return response([
            'user' => $user,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        User::destroy($id);

    }

    public function selfUpdate(Request $request)
    {
        $request->validate([
            'nik' => "required|size:16|unique:users,id,{$request->user()->id}",
            'name' => 'required|string',
            'dob' => 'required|date|date_format:Y-m-d',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $input = $request->only(['nik', 'name', 'address', 'contact']);
        $input['dob'] = Carbon::createFromFormat('Y-m-d', $request->dob)->toDateString();

        $user = User::find($request->user()->id);
        $user->update($input);

        return response([
            'user' => $user,
            'message' => 'Success',
        ]);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find($request->user()->id);

        if (!password_verify($request->old_password, $user->password))
            return response([
                'message' => 'Old password does not match',
            ], 401);

        $input['password'] = bcrypt($request->password);

        $user->update($input);

        return response([
            'user' => $user,
            'message' => 'Success',
        ]);
    }

    public function vacCenter(Request $request)
    {
        $request->validate([
            'vac_center_id' => 'required|exists:vac_centers,id',
        ]);

        $user = User::find($request->user()->id);

        $input = $request->only(['vac_center_id']);

        $user->update($input);

        return response([
            'user' => $user,
            'message' => 'Success',
        ]);
    }

    public function byVacCenter(Request $request)
    {
        $user = User::with(['vac_center', 'user_vaccine.vac_status'])
            ->where('vac_center_id', $request->user()->vac_center_id)
            ->get();

        return response([
            'users' => $user,
            'message' => 'Success',
        ]);
    }

    public function updateByVacCenter(Request $request, int $id)
    {
        $request->validate([
            'vaccine_id' => 'nullable|exists:vaccines,id',
            'vac_status_id' => 'nullable|exists:vac_statuses,id',
        ]);

        $user = User::find($id);

        if ($user->vac_center_id !== $request->user()->vac_center_id)
            return response([
                'message' => 'Unauthorized',
            ], 401);

        $input = $request->only(['vaccine_id', 'vac_status_id']);

        $user_vaccine = UserVaccine::where('user_id', $id)->first();
        $user_vaccine->update($input);

        return response([
            'user' => $user,
            'message' => 'Success',
        ]);
    }
}
