<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Control;
use App\Models\Output;
use App\Models\Sensor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Article::factory(20)->create();

        // $output = new Output;
        // $output->name   = 'ph Up';
        // $output->board  = 1;
        // $output->gpio   = 5;
        // $output->state  = 1;
        // $output->save();

        // $output = new Output;
        // $output->name   = 'ph Down';
        // $output->board  = 1;
        // $output->gpio   = 16;
        // $output->state  = 1;
        // $output->save();

        // $output = new Output;
        // $output->name   = 'Nutrisi A';
        // $output->board  = 1;
        // $output->gpio   = 15;
        // $output->state  = 1;
        // $output->save();

        // $user = new User;
        // $user->name     = 'Admin';
        // $user->email    = 'smarthydroponictfunas@gmail.com';
        // $user->password = Hash::make('TF2021Hydroponic');
        // $user->save();

        // $sensor = new Sensor;
        // $sensor->value1 = 0;
        // $sensor->value2 = 0;
        // $sensor->value3 = 0;
        // $sensor->value4 = 0;
        // $sensor->value5 = 0;
        // $sensor->value6 = 0;
        // $sensor->value7 = 0;
        // $sensor->value8 = 0;
        // $sensor->value9 = 0;
        // $sensor->reading_time = Carbon::now();
        // $sensor->save();
        // $sensor = new Sensor;
        // $sensor->value1 = 0;
        // $sensor->value2 = 0;
        // $sensor->value3 = 0;
        // $sensor->value4 = 0;
        // $sensor->value5 = 0;
        // $sensor->value6 = 0;
        // $sensor->value7 = 0;
        // $sensor->value8 = 0;
        // $sensor->value9 = 0;
        // $sensor->reading_time = Carbon::now();
        // $sensor->save();

        $control = new Control;
        $control->control = 0;
        $control->upper_level = 0;
        $control->lower_level = 0;
        $control->upper_ph = 0;
        $control->lower_ph = 0;
        $control->upper_nutrisi = 0;
        $control->lower_nutrisi = 0;
        $control->save();
    }
}
