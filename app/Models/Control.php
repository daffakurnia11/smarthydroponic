<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;

    protected $fillable = [
        'control', 'upper_level', 'lower_level', 'upper_ph', 'lower_ph', 'upper_nutrisi', 'lower_nutrisi'
    ];
}
