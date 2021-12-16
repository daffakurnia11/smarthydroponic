<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angle extends Model
{
    use HasFactory;

    protected $fillable = ['x_angle', 'y_angle', 'reading_time'];
}
