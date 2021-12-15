<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_genre');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('restrict');
            $table->unsignedBigInteger('batas_usia');
            $table->foreign('batas_usia')->references('id')->on('batas_usias')->onDelete('restrict');
            $table->unsignedBigInteger('id_sutradara');
            $table->foreign('id_sutradara')->references('id')->on('sutradaras')->onDelete('restrict');
            $table->unsignedBigInteger('id_pemain');
            $table->foreign('id_pemain')->references('id')->on('pemains')->onDelete('restrict');
            $table->text('url')->nullable();
            $table->text('url2')->nullable();
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
        Schema::dropIfExists('films');
    }
}
