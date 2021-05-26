<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            [
                'judul_dokumen' => 'Peraturan perundang-undangan tentang undangan',
                'status_id' => 1,
                'nomor_peraturan' => '69/KMK/2021',
                'document_type_id' => 1,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2021-05-19',
                'tanggal_pengundangan' => '2021-05-19',
                'source_id' => 1,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Keuangan, Perpajakan',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 1,
                'file_url' => 'https://bphn.jdihn.go.id/common/dokumen/2021pp066.pdf',
                'file_size' => 410830,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ],
            [
                'judul_dokumen' => 'Peraturan Tentang Hak Asasi Sapi',
                'status_id' => 1,
                'nomor_peraturan' => '420/KHS/2021',
                'document_type_id' => 2,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2021-04-13',
                'tanggal_pengundangan' => '2021-04-13',
                'source_id' => 2,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Kesehatan, Obat-obatan',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 2,
                'file_url' => '',
                'file_size' => 0,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ],
            [
                'judul_dokumen' => 'Peraturan tentang pengadaan laptop kampus sunib',
                'status_id' => 2,
                'nomor_peraturan' => '05/BNS/2021',
                'document_type_id' => 3,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2020-09-23',
                'tanggal_pengundangan' => '2020-09-23',
                'source_id' => 3,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Informasi dan Teknologi',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 3,
                'file_url' => 'https://bphn.jdihn.go.id/common/dokumen/2021pp066.pdf',
                'file_size' => 410830,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ],
            [
                'judul_dokumen' => 'Peraturan tentang perubahan iklim mancanegara',
                'status_id' => 1,
                'nomor_peraturan' => '05/BNS/2021',
                'document_type_id' => 4,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2020-09-23',
                'tanggal_pengundangan' => '2020-09-23',
                'source_id' => 3,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Informasi dan Teknologi',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 5,
                'file_url' => 'https://bphn.jdihn.go.id/common/dokumen/2021pp066.pdf',
                'file_size' => 410830,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ],
            [
                'judul_dokumen' => 'Peraturan tentang pengadaan dana BOS',
                'status_id' => 1,
                'nomor_peraturan' => '05/BNS/2021',
                'document_type_id' => 5,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2020-09-23',
                'tanggal_pengundangan' => '2020-09-23',
                'source_id' => 4,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Informasi dan Teknologi',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 3,
                'file_url' => 'https://bphn.jdihn.go.id/common/dokumen/2021pp066.pdf',
                'file_size' => 410830,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ],
            [
                'judul_dokumen' => 'Peraturan tentang jam malam lockdown',
                'status_id' => 1,
                'nomor_peraturan' => '05/BNS/2021',
                'document_type_id' => 1,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2020-09-23',
                'tanggal_pengundangan' => '2020-09-23',
                'source_id' => 5,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Informasi dan Teknologi',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 3,
                'file_url' => 'https://bphn.jdihn.go.id/common/dokumen/2021pp066.pdf',
                'file_size' => 410830,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ],
            [
                'judul_dokumen' => 'Peraturan tentang jumlah max kost-kostan',
                'status_id' => 2,
                'nomor_peraturan' => '05/BNS/2021',
                'document_type_id' => 2,
                'tempat_penetapan' => 'Jakarta',
                'tanggal_penetapan' => '2020-09-23',
                'tanggal_pengundangan' => '2020-09-23',
                'source_id' => 3,
                'urusan_pemerintah' => 'tidak ada',
                'bidang_hukum' => 'Informasi dan Teknologi',
                'bahasa' => 'Indonesia',
                'pemrakarsa' => null,
                'penandatangan' => '-',
                'hasil_uji_mk' => '-',
                'pengarang' => null,
                'subject_id' => 3,
                'file_url' => 'https://bphn.jdihn.go.id/common/dokumen/2021pp066.pdf',
                'file_size' => 410830,
                'link' => 'https://bphn.jdihn.go.id/dokumen/view?id=85519'
            ], 
        ]);
    }
}
