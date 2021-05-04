<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function all()
    {
        return response([
            'staff' => Staff::with('vac_center')->get(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'name' => 'required|string',
            'password' => 'required|min:8',
            'vac_center_id' => 'required|exists:vac_centers,id',
        ]);

        $input = $request->only(['username', 'name', 'vac_center_id']);
        $input['password'] = bcrypt($request->password);

        $staff = Staff::create($input);

        return response([
            'staff' => $staff,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string',
            'vac_center_id' => 'required|exists:vac_centers,id',
        ]);

        $input = $request->only(['name', 'vac_center_id']);

        $staff = Staff::find($id);
        $staff->update($input);

        return response([
            'staff' => $staff,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        Staff::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }
}
