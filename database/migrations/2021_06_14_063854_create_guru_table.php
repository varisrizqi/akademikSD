<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nuptk')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('nip')->nullable();
            $table->string('jenis_ptk')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->integer('telepon')->nullable();
            $table->integer('hp')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->string('status_kepegawaian')->nullable();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan')->nullable();
            $table->string('sumber_gaji')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->boolean('status_perkawinan')->nullable();
            $table->string('nama_suami_atau_istri')->nullable();
            $table->string('nip_suami_atau_istri')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->boolean('sudah_lisensi_kepala_sekolah')->nullable();
            $table->boolean('pernah_diklat_kepengawasan')->nullable();
            $table->boolean('keahlian_braillle')->nullable();
            $table->integer('npwp')->nullable();
            $table->string('nama_wajib_pajak')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('bank')->nullable();
            $table->string('nomor_rekening_bank')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->integer('nik')->nullable();
            $table->integer('no_kk')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('karis_karsu')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('nuks')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('guru');
    }
}
