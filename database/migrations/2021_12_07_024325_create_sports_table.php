<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_club');
            $table->foreign('id_club')->references('id')->on('clubs')->onDelete('restrict');
            $table->unsignedBigInteger('id_pertandingan');
            $table->foreign('id_pertandingan')->references('id')->on('fantasy_teams')->onDelete('restrict');
            $table->string('tayangan_ulang');
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
        Schema::dropIfExists('sports');
    }
}
