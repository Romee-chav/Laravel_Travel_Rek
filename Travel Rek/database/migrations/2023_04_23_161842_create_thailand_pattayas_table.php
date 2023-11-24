<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThailandPattayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thailand_pattayas', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('');
            $table->string('golden_beach_hotel')->nullable();
            $table->string('baron_beach_hotel')->nullable();
            $table->string('the_beverly_hotel')->nullable();
            $table->foreignId('meals')->nullable();
            $table->foreignId('dinner')->nullable();
            $table->string('hkt')->nullable();
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
        Schema::dropIfExists('thailand_pattayas');
    }
}
