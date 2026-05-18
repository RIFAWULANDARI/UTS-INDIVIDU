<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laporan Desa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- HEADER / NAVBAR -->
    <header class="bg-green-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
            <div class="text-xl font-bold">Laporan Desa</div>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-gray-200">Home</a>
                <a href="{{ route('laporans.index') }}" class="hover:text-gray-200">Laporan</a>
                <a href="#" class="hover:text-gray-200">Profil</a>
                <a href="#" class="hover:text-gray-200">Hasil Laporan</a>
            </nav>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="py-10">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-white text-gray-600 py-4 mt-10 shadow-inner text-center">
        &copy; {{ date('Y') }} Laporan Desa. All rights reserved.
    </footer>

</body>
</html>