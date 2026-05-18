<footer class="bg-green-800 text-white mt-12">
    <div class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">

        <div>
            <h2 class="text-lg font-bold mb-2">🏘️ Laporan Desa</h2>
            <p class="text-sm text-green-300">
                Platform pelaporan masalah sosial warga desa secara digital, transparan, dan mudah diakses.
            </p>
        </div>

        <div>
            <h2 class="text-lg font-bold mb-2">Menu</h2>
            <ul class="text-sm text-green-300 space-y-1">
                <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                <li><a href="{{ route('laporans.index') }}" class="hover:text-white transition">Dashboard Laporan</a></li>
                <li><a href="{{ route('laporans.create') }}" class="hover:text-white transition">Buat Laporan Baru</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-lg font-bold mb-2">Kontak</h2>
            <p class="text-sm text-green-300">Email: laporandesa@gmail.com</p>
            <p class="text-sm text-green-300">Telp: 0812-xxxx-xxxx</p>
        </div>

    </div>
    <div class="text-center text-green-400 text-sm py-4 border-t border-green-700">
        &copy; {{ date('Y') }} Laporan Desa. All rights reserved.
    </div>
</footer>
