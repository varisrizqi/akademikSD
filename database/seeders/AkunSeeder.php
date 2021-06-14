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
        DB::table('users')->insert([
            'name' => 'users',
            'email' => 'users@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('guru')->insert([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('siswa')->insert([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
