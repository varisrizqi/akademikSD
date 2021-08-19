<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_siswa', function (Blueprint $table) {
            $table->primary(['kelas_id', 'siswa_id']);
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('siswa_id');
            $table->text('sikap_spiritual');
            $table->text('sikap_sosial');
            $table->foreign('kelas_id')->references('id')->on('kelas');
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
        Schema::dropIfExists('kelas_siswa');
    }
}
