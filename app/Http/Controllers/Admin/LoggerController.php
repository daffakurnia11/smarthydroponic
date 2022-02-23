<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;

class LoggerController extends Controller
{
    public function hydroponic(Request $request)
    {
        $validated = [
            'from'  => $request->from,
            'to'  => $request->to,
        ];

        return view('admin.logger.hydroponic', [
            'title' => 'Data Logger Hydroponic',
            'datas' => Sensor::whereBetween('reading_time', [$validated['from'], $validated['to']])->orderBy('reading_time', 'DESC')->get(),
            'from'  => $validated['from'],
            'to'    => $validated['to']
        ]);
    }
    public function solar_tracker(Request $request)
    {
        $validated = [
            'from'  => $request->from,
            'to'  => $request->to,
        ];

        return view('admin.logger.solar-tracker', [
            'title' => 'Data Logger Solar Tracker',
            'datas' => Sensor::whereBetween('reading_time', [$validated['from'], $validated['to']])->orderBy('reading_time', 'DESC')->get(),
            'from'  => $validated['from'],
            'to'    => $validated['to']
        ]);
    }
}
