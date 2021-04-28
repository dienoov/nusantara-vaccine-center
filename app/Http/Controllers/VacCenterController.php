<?php

namespace App\Http\Controllers;

use App\Models\VacCenter;
use Illuminate\Http\Request;

class VacCenterController extends Controller
{
    public function all()
    {
        return response([
            'vac_centers' => VacCenter::all(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $input = $request->only(['name', 'address', 'contact']);

        $vacCenter = VacCenter::create($input);

        return response([
            'vac_center' => $vacCenter,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $input = $request->only(['name', 'address', 'contact']);

        $vacCenter = VacCenter::find($id);
        $vacCenter->update($input);

        return response([
            'vac_center' => $vacCenter,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        VacCenter::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }
}
