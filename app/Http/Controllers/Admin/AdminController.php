<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Output;
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
            'title'     => 'Dashboard Controll'
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
}
