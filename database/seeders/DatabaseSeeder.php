<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Laporan::insert([
            [
                'nama_pelapor' => 'Budi Santoso',
                'jenis_masalah' => 'Jalan Rusak',
                'lokasi' => 'RT 02 RW 03, Jl. Sudirman',
                'deskripsi' => 'Terdapat lubang besar di tengah jalan yang membahayakan pengendara motor.',
                'status' => 'dalam proses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pelapor' => 'Siti Rahayu',
                'jenis_masalah' => 'Sampah Menumpuk',
                'lokasi' => 'RT 05 RW 01, Pasar Desa',
                'deskripsi' => 'Tumpukan sampah sudah seminggu tidak diangkut, menimbulkan bau tidak sedap.',
                'status' => 'Belum di proses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pelapor' => 'Ahmad Fauzi',
                'jenis_masalah' => 'Lampu Jalan Mati',
                'lokasi' => 'Jl. Melati No. 5, RT 01',
                'deskripsi' => 'Lampu jalan sudah mati selama 2 minggu, jalan menjadi gelap dan rawan kejahatan.',
                'status' => 'selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
