<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // TAMPILKAN DATA
    public function index()
    {
        $laporans = Laporan::all();
        return view('laporans.index', compact('laporans'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('laporans.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'jenis_masalah' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Belum di proses,dalam proses,selesai',
        ]);

        // Simpan ke database
        Laporan::create($request->all());

        return redirect()->route('laporans.index')
                         ->with('success', 'Laporan berhasil ditambahkan.');
    }

    // FORM EDIT
    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('laporans.edit', compact('laporan'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'jenis_masalah' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Belum di proses,dalam proses,selesai',
        ]);

        $laporan = Laporan::findOrFail($id);
        $laporan->update($request->all());

        return redirect()->route('laporans.index')
                         ->with('success', 'Laporan berhasil diperbarui.');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        return redirect()->route('laporans.index')
                         ->with('success', 'Laporan berhasil dihapus.');
    }
}