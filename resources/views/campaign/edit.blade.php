<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laporan</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-yellow-100 min-h-screen p-10">

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg">

        <!-- JUDUL -->
        <h1 class="text-3xl font-bold text-yellow-700 mb-6">
            EDIT LAPORAN
        </h1>

        <!-- FORM -->
        <form action="/laporans/{{ $laporan->id }}" method="POST">

            @csrf
            @method('PUT')

            <!-- NAMA -->
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama Pelapor
                </label>

                <input type="text"
                       name="nama_pelapor"
                       value="{{ $laporan->nama_pelapor }}"
                       class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500">

            </div>

            <!-- JENIS MASALAH -->
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Jenis Masalah
                </label>

                <input type="text"
                       name="jenis_masalah"
                       value="{{ $laporan->jenis_masalah }}"
                       class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500">

            </div>

            <!-- LOKASI -->
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Lokasi
                </label>

                <input type="text"
                       name="lokasi"
                       value="{{ $laporan->lokasi }}"
                       class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500">

            </div>

            <!-- DESKRIPSI -->
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          rows="5"
                          class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $laporan->deskripsi }}</textarea>

            </div>

            <!-- STATUS -->
            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500">

                    <option value="Belum di proses"
                        {{ $laporan->status == 'Belum di proses' ? 'selected' : '' }}>
                        Belum di proses
                    </option>

                    <option value="dalam proses"
                        {{ $laporan->status == 'dalam proses' ? 'selected' : '' }}>
                        Dalam proses
                    </option>

                    <option value="selesai"
                        {{ $laporan->status == 'selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>

                </select>

            </div>

            <!-- BUTTON -->
            <div class="flex gap-3">

                <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow">

                    Update

                </button>

                <a href="/laporans"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg shadow">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</body>
</html>