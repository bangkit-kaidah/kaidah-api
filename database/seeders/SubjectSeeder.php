<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            ['name' => 'Akuntansi'],
            ['name' => 'Perpajakan'],
            ['name' => 'Wirausaha'],
            ['name' => 'Infrastruktur'],
            ['name' => 'Pegawai'],
            ['name' => 'Laba'],
            ['name' => 'Covid-19'],
            ['name' => 'Kewarganegaraan'],
            ['name' => 'Pembangunan'],
            ['name' => 'Investasi'],
            ['name' => 'Lain-lain'],
        ]);
    }
}
