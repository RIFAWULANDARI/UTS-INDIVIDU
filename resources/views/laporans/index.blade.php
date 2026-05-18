<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laporan Desa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 min-h-screen p-6">

    <div class="container mx-auto">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-green-700">Dashboard Laporan Desa</h1>
            <a href="{{ route('laporans.create') }}" 
               class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">
               Tambah Laporan
            </a>
        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <h2 class="font-semibold text-gray-700 mb-2">Total Laporan</h2>
                <p class="text-2xl font-bold text-green-600">{{ $laporans->count() }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <h2 class="font-semibold text-gray-700 mb-2">Dalam Proses</h2>
                <p class="text-2xl font-bold text-yellow-500">{{ $laporans->where('status', 'dalam proses')->count() }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <h2 class="font-semibold text-gray-700 mb-2">Selesai</h2>
                <p class="text-2xl font-bold text-green-600">{{ $laporans->where('status', 'selesai')->count() }}</p>
            </div>
        </div>

        <!-- Table Laporan -->
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="w-full table-auto border border-gray-300">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="p-3 border">ID</th>
                        <th class="p-3 border">Nama</th>
                        <th class="p-3 border">Laporan</th>
                        <th class="p-3 border">Lokasi</th>
                        <th class="p-3 border">Deskripsi</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporans as $laporan)
                    <tr class="text-center hover:bg-gray-100">
                        <td class="p-3 border">{{ $laporan->id }}</td>
                        <td class="p-3 border">{{ $laporan->nama_pelapor }}</td>
                        <td class="p-3 border">{{ $laporan->jenis_masalah }}</td>
                        <td class="p-3 border">{{ $laporan->lokasi }}</td>
                        <td class="p-3 border">{{ $laporan->deskripsi }}</td>
                        <td class="p-3 border">
                            <span class="px-2 py-1 rounded-full 
                                @if($laporan->status=='dalam proses') bg-yellow-100 text-yellow-700 
                                @elseif($laporan->status=='Belum di proses') bg-gray-200 text-gray-700 
                                @else bg-green-100 text-green-700 @endif">
                                {{ $laporan->status }}
                            </span>
                        </td>
                        <td class="p-3 border space-x-2">
                            <a href="{{ route('laporans.edit', $laporan->id) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('laporans.destroy', $laporan->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center p-5 text-gray-500">Data laporan belum tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>