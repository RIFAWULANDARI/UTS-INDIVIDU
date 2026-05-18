<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Laporan</title>
</head>

<body>

    <h1>TAMBAH LAPORAN</h1>

    <form action="/laporans" method="POST">

        @csrf

        <input type="text"
               name="nama_pelapor"
               placeholder="Nama Pelapor">

        <br><br>

        <input type="text"
               name="jenis_masalah"
               placeholder="Jenis Masalah">

        <br><br>

        <input type="text"
               name="lokasi"
               placeholder="Lokasi">

        <br><br>

        <textarea name="deskripsi"
                  placeholder="Deskripsi"></textarea>

        <br><br>

        <input type="text"
               name="status"
               placeholder="Status">

        <br><br>

        <button type="submit">
            Simpan
        </button>

    </form>

</body>
</html>