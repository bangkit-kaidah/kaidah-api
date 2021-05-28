<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturedSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured_subjects')->insert([
            ['subject_id' => 1],
            ['subject_id' => 2],
            ['subject_id' => 3],
            ['subject_id' => 4],
            ['subject_id' => 5],
            ['subject_id' => 6],
            ['subject_id' => 7],
        ]);
    }
}
