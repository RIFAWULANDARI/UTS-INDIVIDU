@extends('app')

@section('content')
<div class="max-w-7xl mx-auto px-6">

    <!-- Page Title -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-green-700">📋 Dashboard Laporan Desa</h1>
            <p class="text-gray-500 text-sm mt-1">Kelola semua laporan masalah warga desa</p>
        </div>
        <a href="{{ route('laporans.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow font-semibold transition">
            ➕ Tambah Laporan
        </a>
    </div>

    <!-- Notifikasi -->
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-800 px-5 py-3 rounded-lg mb-5">
        ✅ {{ session('success') }}
    </div>
    @endif

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
        <div class="bg-white rounded-xl shadow p-6 text-center border-l-4 border-green-500">
            <p class="text-gray-500 text-sm mb-1">Total Laporan</p>
            <p class="text-3xl font-bold text-green-600">{{ $laporans->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center border-l-4 border-yellow-500">
            <p class="text-gray-500 text-sm mb-1">Dalam Proses</p>
            <p class="text-3xl font-bold text-yellow-500">{{ $laporans->where('status', 'dalam proses')->count() }}</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center border-l-4 border-blue-500">
            <p class="text-gray-500 text-sm mb-1">Selesai</p>
            <p class="text-3xl font-bold text-blue-500">{{ $laporans->where('status', 'selesai')->count() }}</p>
        </div>
    </div>

    <!-- Tabel Laporan -->
    <div class="bg-white rounded-2xl shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 bg-green-50">
            <h2 class="font-bold text-green-700 text-lg">Daftar Laporan</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="p-3 text-left text-sm">No</th>
                        <th class="p-3 text-left text-sm">Nama Pelapor</th>
                        <th class="p-3 text-left text-sm">Jenis Masalah</th>
                        <th class="p-3 text-left text-sm">Lokasi</th>
                        <th class="p-3 text-left text-sm">Deskripsi</th>
                        <th class="p-3 text-left text-sm">Status</th>
                        <th class="p-3 text-center text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($laporans as $index => $laporan)
                    <tr class="border-b border-gray-100 hover:bg-green-50 transition">
                        <td class="p-3 text-gray-600 text-sm">{{ $index + 1 }}</td>
                        <td class="p-3 font-medium text-gray-800">{{ $laporan->nama_pelapor }}</td>
                        <td class="p-3 text-gray-700 text-sm">{{ $laporan->jenis_masalah }}</td>
                        <td class="p-3 text-gray-600 text-sm">{{ $laporan->lokasi }}</td>
                        <td class="p-3 text-gray-600 text-sm max-w-xs truncate">{{ $laporan->deskripsi }}</td>
                        <td class="p-3">
                            @if($laporan->status == 'selesai')
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">✅ Selesai</span>
                            @elseif($laporan->status == 'dalam proses')
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">⏳ Dalam Proses</span>
                            @else
                                <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs font-medium">🕐 Belum Diproses</span>
                            @endif
                        </td>
                        <td class="p-3 text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('laporans.edit', $laporan->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm transition">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('laporans.destroy', $laporan->id) }}" method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-12 text-gray-400">
                            <div class="text-4xl mb-3">📭</div>
                            <p class="text-lg font-medium">Belum ada laporan</p>
                            <p class="text-sm mt-1">Klik tombol "Tambah Laporan" untuk membuat laporan pertama.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
