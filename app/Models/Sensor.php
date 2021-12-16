<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = ['value1', 'value2', 'value3', 'value4', 'value5', 'value6', 'value7', 'reading_time'];
}
