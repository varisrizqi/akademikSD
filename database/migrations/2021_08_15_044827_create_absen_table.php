<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->primary(['pelajaran_id', 'siswa_id']);
            $table->unsignedBigInteger('pelajaran_id');
            $table->unsignedBigInteger('siswa_id');
            $table->text('bulan1');
            $table->text('bulan2');
            $table->text('bulan3');
            $table->text('bulan4');
            $table->text('bulan5');
            $table->text('bulan6');
            $table->foreign('pelajaran_id')->references('id')->on('pelajaran');
            $table->foreign('siswa_id')->references('id')->on('siswa');
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
        Schema::dropIfExists('absen');
    }
}
