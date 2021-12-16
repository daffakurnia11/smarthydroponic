<?php

namespace App\Http\Controllers;

use App\Models\Output;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('guest.dashboard', [
            'phUp_state'  => Output::firstWhere('name', 'ph Up'),
            'phDown_state'  => Output::firstWhere('name', 'ph Down'),
            'nutrisiA_state'  => Output::firstWhere('name', 'Nutrisi A'),
            'nutrisiB_state'  => Output::firstWhere('name', 'Nutrisi B'),
        ]);
    }
}
