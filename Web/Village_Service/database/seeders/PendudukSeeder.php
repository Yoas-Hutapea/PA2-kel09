<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penduduk::create([
            'nik' => '1212021711020003',
            'nama' => 'Warga 1'
        ]);

        Penduduk::create([
            'nik' => '1212021711020004',
            'nama' => 'Warga 2'
        ]);
    }
}
