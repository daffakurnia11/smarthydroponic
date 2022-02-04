<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('value1', 10)->default(0);
            $table->string('value2', 10)->default(0);
            $table->string('value3', 10)->default(0);
            $table->string('value4', 30)->default(0);
            $table->string('value5', 30)->default(0);
            $table->string('value6', 30)->default(0);
            $table->string('value7', 30)->default(0);
            $table->timestamp('reading_time');
            $table->timestamps();
            $table->string('value8', 30)->default(0);
            $table->string('value9', 30)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensors');
    }
}
