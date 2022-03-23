<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setpoints', function (Blueprint $table) {
            $table->id();
            $table->string('plant');
            $table->float('lower_ph');
            $table->float('upper_ph');
            $table->float('lower_ec');
            $table->float('upper_ec');
            $table->integer('lower_ppm');
            $table->integer('upper_ppm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setpoints');
    }
}
