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
            $table->string('value1', 10)->nullable();
            $table->string('value2', 10)->nullable();
            $table->string('value3', 10)->nullable();
            $table->string('value4', 30)->nullable();
            $table->string('value5', 30)->nullable();
            $table->string('value6', 30)->nullable();
            $table->string('value7', 30)->nullable();
            $table->string('value8', 30)->nullable();
            $table->string('value9', 30)->nullable();
            $table->timestamp('reading_time');
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
        Schema::dropIfExists('sensors');
    }
}
