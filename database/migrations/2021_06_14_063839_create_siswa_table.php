<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nipd')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->integer('nisn')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('nik')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kacamatan')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('jenis_tinggal')->nullable();
            $table->string('alat_transportasi')->nullable();
            $table->integer('telepon')->nullable();
            $table->integer('hp')->nullable();
            $table->string('skhun')->nullable();
            $table->string('penerima_kps')->nullable();
            $table->string('no_kps')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->date('tahun_lahir_ayah')->nullable();
            $table->string('jenjang_pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->integer('nik_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->date('tahun_lahir_ibu')->nullable();
            $table->string('jenjang_pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->integer('nik_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->date('tahun_lahir_wali')->nullable();
            $table->string('jenjang_pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->integer('nik_wali')->nullable();
            $table->string('rombel_saat_ini')->nullable();
            $table->string('no_peserta_ujian_nasional')->nullable();
            $table->string('no_seri_ijazah')->nullable();
            $table->string('penerima_kip')->nullable();
            $table->string('nomor_kip')->nullable();
            $table->string('nama_di_kip')->nullable();
            $table->string('nomor_kks')->nullable();
            $table->string('no_registrasi_akta_lahir')->nullable();
            $table->string('bank')->nullable();
            $table->string('nomoe_rekening_bank')->nullable();
            $table->string('rekening_bank_atas_nama')->nullable();
            $table->string('layak_pip')->nullable();
            $table->string('alasan_layak_pip')->nullable();
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->string('anak_ke_berapa')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('lingar_kepala')->nullable();
            $table->string('jumlah_saudara_kandung')->nullable();
            $table->string('jarak_rumah_ke_sekolah')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
