<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert([
            [
                'name' => 'JDIH Unit Eselon 1 Kemenkumham Badan Pembinaan Hukum Nasional',
                'url' => 'https://bphn.jdihn.go.id/'
            ],
            [
                'name' => 'JDIH Kementerian Agama RI',
                'url' => 'https://jdih.kemenag.go.id/'
            ],
            [
                'name' => 'JDIH Kementerian Kesehatan RI',
                'url' => 'https://jdih.kemkes.go.id/'
            ],
            [
                'name' => 'JDIH Sekretariat Lembaga Negara Badan Pemeriksa Keuangan (BPK)',
                'url' => 'http://jdih.bpk.go.id/'
            ],
            [
                'name' => 'JDIH Sekretariat Lembaga Negara Dewan Perwakilan Daerah (DPD)',
                'url' => 'http://jdih.dpd.go.id/'
            ],
            [
                'name' => 'JDIH Sekretariat Lembaga Negara Dewan Perwakilan Rakyat (DPR)',
                'url' => 'http://dpr.go.id/jdih'
            ],
            [
                'name' => 'JDIH Sekretariat Lembaga Negara Komisi Pemberantasan Korupsi (KPK)',
                'url' => 'http://jdih.kpk.go.id/'
            ],

        ]);
    }
}
