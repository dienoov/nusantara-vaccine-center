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

        $second_input = $request->only(['vaccine_id','vac_status_id']);

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
}
