<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert([
            ['name' => 'Peraturan Pemerintah'],
            ['name' => 'Peraturan Presiden'],
            ['name' => 'Keputusan Presiden'],
            ['name' => 'Peraturan Menteri'],
            ['name' => 'Ketetapan MPR'],
        ]);
    }
}
