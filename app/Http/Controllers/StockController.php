<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function all()
    {
        return response([
            'stocks' => Stock::with(['vac_center', 'vaccine'])->get(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'vac_center_id' => 'required|exists:vac_centers,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'stock' => 'required|integer',
        ]);

        $input = $request->only(['vac_center_id', 'vaccine_id', 'stock']);

        $stock = Stock::create($input);

        return response([
            'stock' => $stock,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'vac_center_id' => 'required|exists:vac_centers,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'stock' => 'required|integer',
        ]);

        $input = $request->only(['vac_center_id', 'vaccine_id', 'stock']);

        $stock = Stock::find($id);
        $stock->update($input);

        return response([
            'stock' => $stock,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        Stock::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }
}
