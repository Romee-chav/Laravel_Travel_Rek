<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuketBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuket_basics', function (Blueprint $table) {
            $table->id();
            $table->string('agency_name')->nullable();
            $table->string('guest_name')->nullable();
            $table->time('arrival_flight')->nullable();
            $table->time('dept_flight')->nullable();
            $table->date('check_in')->nullable();
            $table->foreignId('room')->nullable();
            $table->string('adults')->nullable();
            $table->string('child')->nullable();
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
        Schema::dropIfExists('phuket_basics');
    }
}
