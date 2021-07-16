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
            $table->string('name');
            $table->integer('nuptk')->unique();
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('nip')->unique()->nullable();
            $table->string('status_pegawai');
            $table->string('agama');
            $table->text('alamat_jalan');
            $table->string('rt');
            $table->string('rw');
            $table->string('dusun');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->integer('telepon')->nullable();
            $table->integer('hp')->nullable();
            $table->string('tugas_tambahan');
            $table->string('sk_cpns');
            $table->string('sk_pengangkatan');
            $table->date('tmt_pengangkatan');
            $table->string('lembaga_pengangkatan');
            $table->string('pangkat_golongan')->nullable();
            $table->string('sumber_gaji');
            $table->string('nama_ibu_kandung');
            $table->string('status_perkawinan');
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri')->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->string('sudah_lisensi_kepala_sekolah')->nullable();
            $table->string('pernah_diklat_kepengawasan')->nullable();
            $table->integer('npwp')->nullable();
            $table->string('kewarganegraan');
            $table->string('bank')->nullable();
            $table->integer('nomor_rekening_bank')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->integer('nik');
            $table->integer('no_kk');
            $table->string('kerpeg')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->integer('uks')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
