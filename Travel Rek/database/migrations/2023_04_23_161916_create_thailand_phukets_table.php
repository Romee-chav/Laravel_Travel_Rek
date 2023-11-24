<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThailandPhuketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thailand_phukets', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('');
            $table->string('wakeup_aonang')->nullable();
            $table->string('ashlee_plaza_patong_hotel_&_spa_Phuket')->nullable();
            $table->foreignId('meals')->nullable();
            $table->foreignId('dinner')->nullable();
            $table->string('kbv')->nullable();
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
        Schema::dropIfExists('thailand_phukets');
    }
}
