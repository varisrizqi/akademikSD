<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->primary(['pelajaran_id', 'siswa_id']);
            $table->unsignedBigInteger('pelajaran_id');
            $table->unsignedBigInteger('siswa_id');
            $table->float('nilai1');
            $table->float('nilai2');
            $table->float('nilai3');
            $table->float('nilai4');
            $table->float('nilai5');
            $table->float('nilai6');
            $table->float('nilai_uts_1');
            $table->float('nilai_uts_2');
            $table->float('nilai_ukk_1');
            $table->float('nilai_ukk_2');
            $table->text('deskripsi_pengetahuan');
            $table->text('deskripsi_keterampilan');
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
        Schema::dropIfExists('nilai');
    }
}
