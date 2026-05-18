<header class="bg-green-700 text-white shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        <!-- Logo -->
        <div class="text-xl font-bold tracking-wide">
            🏘️ Laporan Desa
        </div>

        <!-- Menu -->
        <nav class="flex gap-6 text-sm font-medium">
            <a href="{{ route('home') }}" class="hover:text-green-200 transition">Home</a>
            <a href="{{ route('laporans.index') }}" class="hover:text-green-200 transition">Dashboard Laporan</a>
            <a href="{{ route('laporans.create') }}" class="hover:text-green-200 transition">Buat Laporan</a>
        </nav>

        <!-- Button -->
        <a href="{{ route('laporans.create') }}"
           class="bg-white text-green-700 font-semibold px-4 py-2 rounded-lg hover:bg-green-100 transition">
            + Tambah Laporan
        </a>

    </div>
</header>
