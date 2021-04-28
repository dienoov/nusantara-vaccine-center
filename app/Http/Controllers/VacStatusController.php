<?php

namespace App\Http\Controllers;

use App\Models\VacStatus;
use Illuminate\Http\Request;

class VacStatusController extends Controller
{
    public function all()
    {
        return response([
            'statuses' => VacStatus::all(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $input = $request->only(['status']);

        $status = VacStatus::create($input);

        return response([
            'status' => $status,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $input = $request->only(['status']);

        $status = VacStatus::find($id);
        $status->update($input);

        return response([
            'status' => $status,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        VacStatus::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }
}
