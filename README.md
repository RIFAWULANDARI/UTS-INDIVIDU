# 🏘️ Laporan Desa - Aplikasi Mini Sosial

Aplikasi web berbasis Laravel dengan tema sosial: **Sistem Pelaporan Masalah Desa**.
Warga dapat melaporkan masalah lingkungan desa secara digital, transparan, dan mudah diakses.

## Fitur

- ✅ **CREATE** – Tambah laporan masalah baru (jalan rusak, sampah, dll)
- ✅ **READ** – Dashboard laporan dengan statistik real-time
- ✅ **UPDATE** – Edit laporan yang sudah ada
- ✅ **DELETE** – Hapus laporan

## Teknologi

- Laravel 11
- Tailwind CSS
- MySQL / SQLite
- Vite

## Cara Menjalankan

```bash
# Clone repo
git clone https://github.com/username/UTS-INDIVIDU.git
cd UTS-INDIVIDU

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
php artisan migrate
php artisan db:seed

# Jalankan aplikasi
npm run dev
php artisan serve
```

Buka di browser: `http://localhost:8000`

## Jenis Masalah yang Bisa Dilaporkan

- 🛣️ Jalan Rusak
- 🗑️ Sampah Menumpuk
- 💡 Lampu Jalan Mati
- 💧 Saluran Air Tersumbat
- 🔒 Keamanan Lingkungan
- 🏗️ Fasilitas Umum Rusak

## UTS Individu – Pemrograman Web 2026

Dibuat untuk memenuhi tugas UTS mata kuliah Pemrograman Web.
