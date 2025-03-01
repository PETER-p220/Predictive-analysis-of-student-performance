<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results Upload</title>
    @vite('resources/css/app.css')
</head>
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<body>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold">Upload Student Results</h1>

        @if(session('message'))
            <div class="bg-green-500 text-white p-3 rounded">
                {{ session('message') }}
            </div>
        @endif

        <form action="/upload-results" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="results_file" class="p-2 border rounded mb-4" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
        </form>
    </div>
</body>
</html>
