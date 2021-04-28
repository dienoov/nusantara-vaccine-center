<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function all()
    {
        return response([
            'vaccines' => Vaccine::all(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'detail' => 'required|string',
        ]);

        $input = $request->only(['brand', 'detail']);

        $vaccine = Vaccine::create($input);

        return response([
            'vaccine' => $vaccine,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'brand' => 'required|string',
            'detail' => 'required|string',
        ]);

        $input = $request->only(['brand', 'detail']);

        $vaccine = Vaccine::find($id);
        $vaccine->update($input);

        return response([
            'vaccine' => $vaccine,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        Vaccine::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }
}
