<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Andi Saputra',
            'nis' => 101,
            'tgl_lahir' => '2003-12-22'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Budi Cahya',
            'nis' => 102,
            'tgl_lahir' => '2004-01-30'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Pahrurozi',
            'nis' => 103,
            'tgl_lahir' => '2000-07-01'
        ]);
    }
}
