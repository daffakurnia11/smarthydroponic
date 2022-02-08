<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;

class LoggerController extends Controller
{
    public function hydroponic(Request $request)
    {
        $firstData = Sensor::first()->reading_time;

        $validated = [
            'from'  => $request->from ?: $firstData,
            'to'  => $request->to,
        ];

        return view('admin.logger.hydroponic', [
            'datas' => Sensor::whereBetween('reading_time', [$validated['from'], $validated['to']])->get(),
            'from'  => $validated['from'],
            'to'    => $validated['to']
        ]);
    }
    public function solar_tracker(Request $request)
    {
        $firstData = Sensor::first()->reading_time;

        $validated = [
            'from'  => $request->from ?: $firstData,
            'to'  => $request->to,
        ];

        return view('admin.logger.solar-tracker', [
            'datas' => Sensor::whereBetween('reading_time', [$validated['from'], $validated['to']])->get(),
            'from'  => $validated['from'],
            'to'    => $validated['to']
        ]);
    }
}
