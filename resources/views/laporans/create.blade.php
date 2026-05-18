@extends('app')

@section('content')
<div class="max-w-2xl mx-auto px-6">

    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-4">
        <a href="{{ route('home') }}" class="hover:text-green-600">Home</a>
        <span class="mx-2">›</span>
        <a href="{{ route('laporans.index') }}" class="hover:text-green-600">Dashboard Laporan</a>
        <span class="mx-2">›</span>
        <span class="text-green-700 font-medium">Tambah Laporan</span>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header Card -->
        <div class="bg-green-600 px-8 py-6">
            <h1 class="text-2xl font-bold text-white">📝 Tambah Laporan Baru</h1>
            <p class="text-green-200 text-sm mt-1">Isi form berikut untuk melaporkan masalah di lingkungan desa Anda</p>
        </div>

        <!-- Form -->
        <div class="px-8 py-6">

            @if($errors->any())
            <div class="bg-red-50 border border-red-300 text-red-700 px-5 py-4 rounded-lg mb-6">
                <p class="font-semibold mb-2">⚠️ Terdapat kesalahan:</p>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('laporans.store') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Nama Pelapor -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Nama Pelapor <span class="text-red-500">*</span>
                    </label>
                    <input type="text"
                           name="nama_pelapor"
                           value="{{ old('nama_pelapor') }}"
                           placeholder="Masukkan nama lengkap Anda"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent @error('nama_pelapor') border-red-400 @enderror">
                </div>

                <!-- Jenis Masalah -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Jenis Masalah <span class="text-red-500">*</span>
                    </label>
                    <select name="jenis_masalah"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent @error('jenis_masalah') border-red-400 @enderror">
                        <option value="">-- Pilih Jenis Masalah --</option>
                        <option value="Jalan Rusak" {{ old('jenis_masalah') == 'Jalan Rusak' ? 'selected' : '' }}>🛣️ Jalan Rusak</option>
                        <option value="Sampah Menumpuk" {{ old('jenis_masalah') == 'Sampah Menumpuk' ? 'selected' : '' }}>🗑️ Sampah Menumpuk</option>
                        <option value="Lampu Jalan Mati" {{ old('jenis_masalah') == 'Lampu Jalan Mati' ? 'selected' : '' }}>💡 Lampu Jalan Mati</option>
                        <option value="Saluran Air Tersumbat" {{ old('jenis_masalah') == 'Saluran Air Tersumbat' ? 'selected' : '' }}>💧 Saluran Air Tersumbat</option>
                        <option value="Keamanan Lingkungan" {{ old('jenis_masalah') == 'Keamanan Lingkungan' ? 'selected' : '' }}>🔒 Keamanan Lingkungan</option>
                        <option value="Fasilitas Umum Rusak" {{ old('jenis_masalah') == 'Fasilitas Umum Rusak' ? 'selected' : '' }}>🏗️ Fasilitas Umum Rusak</option>
                        <option value="Lainnya" {{ old('jenis_masalah') == 'Lainnya' ? 'selected' : '' }}>📌 Lainnya</option>
                    </select>
                </div>

                <!-- Lokasi -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Lokasi <span class="text-red-500">*</span>
                    </label>
                    <input type="text"
                           name="lokasi"
                           value="{{ old('lokasi') }}"
                           placeholder="Contoh: RT 03 RW 05, Jl. Merdeka No.12"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent @error('lokasi') border-red-400 @enderror">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Deskripsi Masalah
                    </label>
                    <textarea name="deskripsi"
                              rows="4"
                              placeholder="Jelaskan masalah secara detail agar dapat segera ditangani..."
                              class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent resize-none">{{ old('deskripsi') }}</textarea>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Status <span class="text-red-500">*</span>
                    </label>
                    <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent">
                        <option value="Belum di proses" {{ old('status') == 'Belum di proses' ? 'selected' : '' }}>🕐 Belum Diproses</option>
                        <option value="dalam proses" {{ old('status') == 'dalam proses' ? 'selected' : '' }}>⏳ Dalam Proses</option>
                        <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>✅ Selesai</option>
                    </select>
                </div>

                <!-- Tombol -->
                <div class="flex gap-3 pt-2">
                    <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2.5 rounded-lg shadow transition">
                        💾 Simpan Laporan
                    </button>
                    <a href="{{ route('laporans.index') }}"
                       class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-2.5 rounded-lg transition">
                        ✖ Batal
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
