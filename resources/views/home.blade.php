@extends('partials.app')

@section('content')
<div class="min-h-screen bg-green-100 p-10">

    <div class="max-w-6xl mx-auto bg-white p-10 rounded-2xl shadow-lg">

        <h1 class="text-4xl font-bold text-green-700 mb-4">
            Selamat Datang di Laporan Desa
        </h1>

        <p class="text-gray-700 mb-6">
            Lihat dan kelola laporan desa Anda dengan mudah.
        </p>

        <div class="flex gap-3">
            <a href="{{ route('laporans.index') }}" 
               class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-lg shadow">
               Lihat Dashboard Laporan
            </a>

            <a href="/profil" 
               class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-3 rounded-lg shadow">
               Profil
            </a>
        </div>

    </div>

</div>
@endsection