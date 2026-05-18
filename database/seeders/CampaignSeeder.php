<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('campaigns')->insert([
            [
                'title' => 'Donasi Pendidikan',
                'description' => 'Membantu anak sekolah',
                'target_donation' => 10000000,
                'deadline' => '2026-12-31',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Donasi Banjir',
                'description' => 'Bantuan korban banjir',
                'target_donation' => 20000000,
                'deadline' => '2026-11-01',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}