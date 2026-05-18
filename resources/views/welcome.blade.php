@extends('app')

@section('content')
<div class="max-w-4xl mx-auto px-6 text-center py-20">
    <h1 class="text-4xl font-bold text-green-700 mb-4">🏘️ Laporan Desa</h1>
    <p class="text-gray-600 mb-6">Platform pelaporan masalah sosial warga desa.</p>
    <a href="{{ route('home') }}" class="bg-green-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-700 transition">
        Masuk ke Aplikasi
    </a>
</div>
@endsection
