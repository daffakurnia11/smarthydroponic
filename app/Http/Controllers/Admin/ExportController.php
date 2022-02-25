<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AllHydroponicExport;
use App\Exports\FilterHydroponicExport;
use App\Exports\FilterSolarExport;
use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExportController extends Controller
{
    public function hydroponic(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to'   => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('message', 'No Data');
        }

        $from = $request->from;
        $to = $request->to;
        return (new FilterHydroponicExport($from, $to))->download("Hydroponic_${from}_${to}.xlsx");
    }

    public function all_hydroponic()
    {
        return (new AllHydroponicExport())->download("Hydroponic_All Data.xlsx");
    }

    public function solar_tracker(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to'   => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('message', 'No Data');
        }

        $from = $request->from;
        $to = $request->to;
        return (new FilterSolarExport($from, $to))->download("Solar Tracker_${from}_${to}.xlsx");
    }

    public function all_solar_tracker()
    {
        return (new AllHydroponicExport())->download("Solar Tracker_All Data.xlsx");
    }
}
