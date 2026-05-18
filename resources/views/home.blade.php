@extends('app')

@section('content')
<div class="max-w-6xl mx-auto px-6">

    <!-- Hero Section -->
    <div class="bg-white rounded-2xl shadow-lg p-10 mb-8 text-center">
        <div class="text-5xl mb-4">🏘️</div>
        <h1 class="text-4xl font-bold text-green-700 mb-3">
            Selamat Datang di Laporan Desa
        </h1>
        <p class="text-gray-600 text-lg mb-6 max-w-2xl mx-auto">
            Platform digital untuk warga melaporkan masalah infrastruktur, kebersihan,
            dan keamanan lingkungan desa secara mudah, cepat, dan transparan.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('laporans.index') }}"
               class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow font-semibold transition">
                📋 Lihat Dashboard Laporan
            </a>
            <a href="{{ route('laporans.create') }}"
               class="bg-white border border-green-600 text-green-700 hover:bg-green-50 px-6 py-3 rounded-xl shadow font-semibold transition">
                ➕ Buat Laporan Baru
            </a>
        </div>
    </div>

    <!-- Fitur Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">
            <div class="text-4xl mb-3">📝</div>
            <h3 class="font-bold text-green-700 text-lg mb-2">Buat Laporan</h3>
            <p class="text-gray-500 text-sm">Warga dapat melaporkan masalah lingkungan secara langsung melalui form digital.</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">
            <div class="text-4xl mb-3">🔍</div>
            <h3 class="font-bold text-green-700 text-lg mb-2">Pantau Status</h3>
            <p class="text-gray-500 text-sm">Lacak perkembangan laporan dari Belum Diproses hingga Selesai ditangani.</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">
            <div class="text-4xl mb-3">✅</div>
            <h3 class="font-bold text-green-700 text-lg mb-2">Transparan</h3>
            <p class="text-gray-500 text-sm">Semua laporan tercatat dan dapat diakses oleh warga dan petugas desa.</p>
        </div>
    </div>

    <!-- Jenis Masalah -->
    <div class="bg-white rounded-2xl shadow p-8">
        <h2 class="text-2xl font-bold text-green-700 mb-5">Jenis Masalah yang Bisa Dilaporkan</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
            @foreach(['🛣️ Jalan Rusak', '🗑️ Sampah Menumpuk', '💡 Lampu Jalan Mati', '💧 Saluran Air Tersumbat', '🔒 Keamanan Lingkungan', '🏗️ Fasilitas Umum Rusak'] as $item)
            <div class="bg-green-50 border border-green-200 rounded-lg px-4 py-3 text-sm font-medium text-green-800">
                {{ $item }}
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
