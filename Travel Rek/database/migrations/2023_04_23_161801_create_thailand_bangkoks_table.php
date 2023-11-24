<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThailandBangkoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thailand_bangkoks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('');
            $table->string('hotel_season_siam')->nullable();
            $table->string('ecotel_bangkok')->nullable();
            $table->string('ibis_bangkok_sukhumvit_4')->nullable();
            $table->foreignId('meals')->nullable();
            $table->foreignId('dinner')->nullable();
            $table->string('bkk')->nullable();
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
        Schema::dropIfExists('thailand_bangkoks');
    }
}
