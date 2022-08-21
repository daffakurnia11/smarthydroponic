<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Control;
use App\Models\Output;
use App\Models\Setpoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        }

        return back()->with('message', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Success');
    }

    public function index()
    {
        return view('admin.index', [
            'title'     => 'Dashboard Control',
            'control'   => Control::first()
        ]);
    }

    public function hydroponic()
    {
        return view('admin.monitoring.hydroponic', [
            'title'             => 'Monitoring Hydroponic',
            'phUp_state'        => Output::firstWhere('name', 'ph Up'),
            'phDown_state'      => Output::firstWhere('name', 'ph Down'),
            'nutrisi_state'     => Output::firstWhere('name', 'Nutrisi'),
        ]);
    }

    public function solar_tracker()
    {
        return view('admin.monitoring.solar-tracker', [
            'title'             => 'Monitoring Solar Tracker',
        ]);
    }

    public function control_update(Request $request, Control $control)
    {
        $validated = $request->validate([
            'control'       => 'required|boolean',
            'upper_level'   => 'required',
            'lower_level'   => 'required',
            'upper_ph'      => 'required',
            'lower_ph'      => 'required',
            'upper_nutrisi' => 'required',
            'lower_nutrisi' => 'required',
        ]);
        $validated['locked'] = true;

        $control->update($validated);
        return redirect('/admin')->with('message', 'System control has been updated');
    }

    public function control_reset(Request $request)
    {
        $control = Control::firstWhere('id', $request->control);
        $control->update([
            'control'       => 0,
            'upper_level'   => 0,
            'lower_level'   => 0,
            'upper_ph'      => 0,
            'lower_ph'      => 0,
            'upper_nutrisi' => 0,
            'lower_nutrisi' => 0,
            'locked'        => 0
        ]);
        return redirect('/admin')->with('message', 'System control has been updated');
    }

    public function set_point()
    {
        return view('admin.setpoint', [
            'title'     => 'Data Set Point Hydroponic Plants',
            'setpoints' => Setpoint::all()
        ]);
    }
}
