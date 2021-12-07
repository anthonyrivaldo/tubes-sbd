<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvPopulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_populers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_channel');
            $table->foreign('id_channel')->references('id')->on('channels')->onDelete('restrict');
            $table->unsignedBigInteger('id_live');
            $table->foreign('id_live')->references('id')->on('lives')->onDelete('restrict');
            $table->unsignedBigInteger('id_genre');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('restrict');
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
        Schema::dropIfExists('tv_populers');
    }
}
