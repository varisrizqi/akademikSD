<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'nuptk' => '12345678',
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'serang',
            'tanggal_lahir' => now(),
            'status_pegawai' => 'admin',
            'agama' => 'islam',
            'alamat_jalan' => 'serang',
            'rt' => 'serang',
            'rw' => 'serang',
            'dusun' => 'serang',
            'kecamatan' => 'serang',
            'kode_pos' => 42356,
            'tugas_tambahan' => 'admin',
            'sk_cpns' => 'admin',
            'sk_pengangkatan' => 'admin',
            'tmt_pengangkatan' => now(),
            'lembaga_pengangkatan' => 'dinas',
            'sumber_gaji' => 'dinas',
            'nama_ibu_kandung' => 'ibu',
            'status_perkawinan' => 'tidak',
            'kewarganegraan' => 'id',
            'nik' => 12345678,
            'no_kk' => 12345678,
            'password' => Hash::make('password'),
        ]);
        // DB::table('guru')->insert([
        //     'nama' => 'guru',
        //     'email' => 'guru@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
        // DB::table('siswa')->insert([
        //     'nama' => 'siswa',
        //     'email' => 'siswa@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
