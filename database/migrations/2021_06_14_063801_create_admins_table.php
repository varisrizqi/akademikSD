<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nuptk')->unique();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('nip')->unique()->nullable();
            $table->string('status_pegawai')->nullable();
            $table->string('jenis_ptk')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kecamatan')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->integer('telepon')->nullable();
            $table->integer('hp')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan')->nullable();
            $table->string('pangkat_golongan')->nullable();
            $table->string('sumber_gaji')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri')->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->string('sudah_lisensi_kepala_sekolah')->nullable();
            $table->string('pernah_diklat_kepengawasan')->nullable();
            $table->integer('npwp')->nullable();
            $table->string('kewarganegraan')->nullable();
            $table->string('bank')->nullable();
            $table->integer('nomor_rekening_bank')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->integer('nik')->nullable();
            $table->integer('no_kk')->nullable();
            $table->string('kerpeg')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->integer('uks')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
