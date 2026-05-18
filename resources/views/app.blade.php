<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Desa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    @include('partials.header')

    <main class="flex-1 py-10">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
