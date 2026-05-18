<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class HomeController extends Controller
{
    public function index()
    {
        $totalLaporan = Laporan::count();
        $dalamProses  = Laporan::where('status', 'dalam proses')->count();
        $selesai      = Laporan::where('status', 'selesai')->count();

        return view('home', compact('totalLaporan', 'dalamProses', 'selesai'));
    }
}
