<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function all()
    {
        return response([
            'schedules' => Schedule::with('vac_center')->get(),
            'message' => 'Success',
        ]);
    }

    public function recent()
    {
        return response([
            'schedules' => Schedule::with('vac_center')->orderByDesc('date')->limit(4)->get(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'date' => 'required|date|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'vac_center_id' => 'required|exists:vac_centers,id',
        ]);

        $input = $request->only(['vac_center_id']);
        $input['date'] = Carbon::createFromFormat('Y-m-d', $request->date)->toDateString();
        $input['time'] = Carbon::createFromFormat('H:i', $request->time)->toTimeString();

        $schedule = Schedule::create($input);

        return response([
            'schedule' => $schedule,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'date' => 'required|date|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'vac_center_id' => 'required|exists:vac_centers,id',
        ]);

        $input = $request->only(['vac_center_id']);
        $input['date'] = Carbon::createFromFormat('Y-m-d', $request->date)->toDateString();
        $input['time'] = Carbon::createFromFormat('H:i', $request->time)->toTimeString();

        $schedule = Schedule::find($id);
        $schedule->update($input);

        return response([
            'schedule' => $schedule,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        Schedule::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }
}
