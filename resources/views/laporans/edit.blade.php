<h1>Edit Laporan</h1>

<form action="/laporans/{{ $laporan->id }}" method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="nama_pelapor"
           value="{{ $laporan->nama_pelapor }}">

    <br><br>

    <input type="text"
           name="jenis_masalah"
           value="{{ $laporan->jenis_masalah }}">

    <br><br>

    <input type="text"
           name="lokasi"
           value="{{ $laporan->lokasi }}">

    <br><br>

    <textarea name="deskripsi">{{ $laporan->deskripsi }}</textarea>

    <br><br>

    <input type="text"
           name="status"
           value="{{ $laporan->status }}">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>