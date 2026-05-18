<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Campaign</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-gray-800">
            Tambah Campaign
        </h1>

        <a href="/campaign"
           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
            Kembali
        </a>

    </div>

    <form action="/campaign" method="POST">

        @csrf

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Title
            </label>

            <input type="text"
                   name="title"
                   class="w-full border p-3 rounded">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Description
            </label>

            <textarea name="description"
                      class="w-full border p-3 rounded"></textarea>

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Target Donation
            </label>

            <input type="number"
                   name="target_donation"
                   class="w-full border p-3 rounded">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Deadline
            </label>

            <input type="date"
                   name="deadline"
                   class="w-full border p-3 rounded">

        </div>

        <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded">
            Simpan
        </button>

    </form>

</div>

</body>
</html>