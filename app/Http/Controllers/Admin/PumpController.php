<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'value8' => $request->value8,
            'value9' => $request->value9,
        ]);
    }

    public function datacontrol()
    {
        $sensors = Sensor::orderBy('id', 'DESC')->take(30)->get();
        $sensor_inc = Sensor::orderBy('id', 'DESC')->take(2)->get();
        $sensor = Sensor::orderBy('id', 'DESC')->first();


        $data = [
            'value_ph'      => $sensor->value1,
            'value_ec'      => $sensor->value2,
            'value_level'   => $sensor->value3,
            'value_voltage' => $sensor->value4,
            'value_current' => $sensor->value5,
            'value_power'   => $sensor->value6,
            'value_energy'  => $sensor->value7,
            'value_x'       => $sensor->value8,
            'value_y'       => $sensor->value9,

            'progress_voltage'  => ($sensor_inc[0]->value4 - $sensor_inc[1]->value4),
            'progress_current'  => ($sensor_inc[0]->value5 - $sensor_inc[1]->value5),
            'progress_power'    => ($sensor_inc[0]->value6 - $sensor_inc[1]->value6),
            'progress_energy'   => ($sensor_inc[0]->value7 - $sensor_inc[1]->value7),
            'progress_x'   => ($sensor_inc[0]->value8 - $sensor_inc[1]->value8),
            'progress_y'   => ($sensor_inc[0]->value9 - $sensor_inc[1]->value9)
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
            $data['xValue'][] = $query->value8;
            $data['yValue'][] = $query->value9;
            $data['timeAngle'][] = $query->reading_time;
        }
        return json_encode($data);
    }
}
