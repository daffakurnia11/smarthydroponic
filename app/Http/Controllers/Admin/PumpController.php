<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Angle;
use App\Models\Output;
use App\Models\Sensor;
use Illuminate\Http\Request;

class PumpController extends Controller
{
    public function pumpcontrol(Request $request)
    {
        Output::where('gpio', $request->gpio)->update([
            'state' => $request->state
        ]);
    }

    public function datainsert(Request $request)
    {
        Sensor::insert([
            'value1' => $request->value1,
            'value2' => $request->value2,
            'value3' => $request->value3,
            'value4' => $request->value4,
            'value5' => $request->value5,
            'value6' => $request->value6,
            'value7' => $request->value7,
        ]);

        Angle::insert([
            'x_angle' => $request->x,
            'y_angle' => $request->y,
        ]);
    }

    public function datacontrol()
    {
        $sensors = Sensor::orderBy('id', 'DESC')->take(30)->get();
        $angles = Angle::orderBy('id', 'DESC')->take(30)->get();

        $sensor = Sensor::orderBy('id', 'DESC')->first();
        $angle = Angle::orderBy('id', 'DESC')->first();

        $data = [
            'value_ph' => $sensor->value1,
            'value_ec' => $sensor->value2,
            'value_level' => $sensor->value3,
            'value_voltage' => $sensor->value4,
            'value_current' => $sensor->value5,
            'value_power' => $sensor->value6,
            'value_energy' => $sensor->value7,
            'value_x' => $angle->x_angle,
            'value_y' => $angle->y_angle,
        ];
        foreach ($sensors as $query) {
            $data['pHValue'][] = $query->value1;
            $data['ECValue'][] = $query->value2;
            $data['LevelValue'][] = $query->value3;
            $data['VoltageValue'][] = $query->value4;
            $data['CurrentValue'][] = $query->value5;
            $data['PowerValue'][] = $query->value6;
            $data['EnergyValue'][] = $query->value7;
            $data['timeSensor'][] = $query->reading_time;
        }
        foreach ($angles as $query) {
            $data['xValue'][] = $query->x_angle;
            $data['yValue'][] = $query->y_angle;
            $data['timeAngle'][] = $query->reading_time;
        }
        return json_encode($data);
    }
}
