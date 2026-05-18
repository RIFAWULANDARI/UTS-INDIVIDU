<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan Desa</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 min-h-screen p-10">

    <div class="max-w-7xl mx-auto bg-white p-8 rounded-2xl shadow-lg">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-green-700">
                DATA LAPORAN DESA
            </h1>

            <a href="/laporans/create"
               class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">
                Tambah Laporan
            </a>
        </div>

        <!-- TABLE -->
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">

            <!-- TABLE HEADER -->
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

            <!-- TABLE BODY -->
            <tbody>
                @forelse ($laporans as $laporan)
                <tr class="text-center hover:bg-gray-100">
                    <td class="p-3 border">{{ $laporan->id }}</td>
                    <td class="p-3 border">{{ $laporan->nama_pelapor }}</td>
                    <td class="p-3 border">{{ $laporan->jenis_masalah }}</td>
                    <td class="p-3 border">{{ $laporan->lokasi }}</td>
                    <td class="p-3 border">{{ $laporan->deskripsi }}</td>
                    <td class="p-3 border">
                        <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm">
                            {{ $laporan->status }}
                        </span>
                    </td>
                    <td class="p-3 border space-x-2">
                        <a href="/laporans/{{ $laporan->id }}/edit"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                            Edit
                        </a>
                        <form action="/laporans/{{ $laporan->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center p-5 text-gray-500">
                        Data laporan belum tersedia.
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</body>
</html>