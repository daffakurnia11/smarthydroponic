<?php

namespace Database\Seeders;

use App\Models\Output;
use Illuminate\Database\Seeder;

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

        $output = new Output;
        $output->name   = 'ph Up';
        $output->board  = 1;
        $output->gpio   = 5;
        $output->state  = 1;
        $output->save();

        $output = new Output;
        $output->name   = 'ph Down';
        $output->board  = 1;
        $output->gpio   = 16;
        $output->state  = 1;
        $output->save();

        $output = new Output;
        $output->name   = 'Nutrisi A';
        $output->board  = 1;
        $output->gpio   = 15;
        $output->state  = 1;
        $output->save();

        $output = new Output;
        $output->name   = 'Nutrisi B';
        $output->board  = 1;
        $output->gpio   = 17;
        $output->state  = 1;
        $output->save();
    }
}
