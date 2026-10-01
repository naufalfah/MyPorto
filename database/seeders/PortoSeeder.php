<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_portofolio')->insert([
            [
                'nama'       => 'Laravel Pemula',
                'sub'        => 'Pelajaran laravel mandiri',
                'deskripsi'  => 'Ini adalah laravel simpel dengan pelajaran',
                'link'       => 'https://youtube.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama'       => 'Website Toko Online',
                'sub'        => 'Latihan CRUD produk',
                'deskripsi'  => 'Aplikasi toko sederhana dengan fitur tambah, ubah, hapus produk, dan halaman katalog.',
                'link'       => 'https://github.com/username/toko-online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama'       => 'Aplikasi Catatan Tugas',
                'sub'        => 'Manajemen tugas harian',
                'deskripsi'  => 'Mencatat tugas, menandai selesai, dan melihat daftar tugas yang belum dikerjakan.',
                'link'       => 'https://github.com/username/catatan-tugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama'       => 'Landing Page Sekolah',
                'sub'        => 'Belajar Tailwind CSS',
                'deskripsi'  => 'Halaman profil sekolah dengan navbar, hero, galeri, dan footer yang responsif.',
                'link'       => 'https://github.com/username/landing-sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama'       => 'Sistem Absensi Siswa',
                'sub'        => 'Latihan persiapan LKS',
                'deskripsi'  => 'Input absensi harian, rekap per kelas, dan validasi form dengan Laravel.',
                'link'       => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama'       => 'Blog Pribadi',
                'sub'        => 'Belajar Blade dan relasi tabel',
                'deskripsi'  => 'Blog sederhana dengan daftar artikel, halaman detail, dan kategori.',
                'link'       => 'https://github.com/username/blog-pribadi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
