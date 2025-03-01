<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predictions</title>
    @vite('resources/css/app.css')
</head>
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<body>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold">Predictions</h1>

        @if($predictions)
            <table class="table-auto border-collapse border border-gray-300 w-full">
                <thead>
                    <tr>
                        <th class="border p-2">Student ID</th>
                        <th class="border p-2">Predicted Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($predictions as $prediction)
                        <tr>
                            <td class="border p-2">{{ $prediction['student_id'] }}</td>
                            <td class="border p-2">{{ $prediction['predicted_grade'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No predictions available yet.</p>
        @endif
    </div>
</body>
</html>
