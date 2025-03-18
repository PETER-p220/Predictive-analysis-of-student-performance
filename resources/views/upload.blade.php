<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results Upload</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>
<link href="{{ mix('css/app.css') }}" rel="stylesheet">


<body>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold">Upload Student Results</h1>

        @if(session('message'))
            <div class="bg-green-500 text-white p-3 rounded">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('upload') }}" method="POST" accept=".csv,.xlsx" enctype="multipart/form-data">
            @csrf
            CHOOSE CLASS: <select name="form" id="">
                <option value="1">Form 1</option>
                <option value="2">Form 2</option>
                <option value="3">Form 3</option>
                <option value="4">Form 4</option>
            </select><br><br>
            <input type="file" name="results_file" class="p-2 border rounded mb-4" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
        </form>
    </div>

</body>
</html>
