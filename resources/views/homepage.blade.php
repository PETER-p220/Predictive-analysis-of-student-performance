<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predictive Analysis - Academic Performance</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Header Section -->
<header class="bg-blue-600 text-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold">EduPredict</div>
        <nav class="space-x-4">
            <a href="{{ url('/') }}" class="hover:text-gray-300">Home</a>
            <a href="{{ url('dashboard-analysis') }}" class="hover:text-gray-300">Dashboard</a>
            <a href="{{ url('predictions') }}" class="hover:text-gray-300">Predictions</a>
            <a href="{{ url('reports')}}" class="hover:text-gray-300">Reports</a>
            <a href="{{ url('settings') }}" class="hover:text-gray-300">Settings</a>
        </nav>
        <div class="flex items-center space-x-4">
            <span class="font-medium">Peter Mushy</span>
            <img src="images\icons8-admin-48.png" alt="profile" class="rounded-full">
        </div>
    </div>
</header>
<br><br><br><br><br>

<!-- Welcome Section -->
<section class="bg-blue-50 py-12 text-center">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-4xl font-semibold text-blue-600">Welcome to Student Performance Predictions</h1>
        <p class="mt-4 text-lg text-gray-700">Leverage data to predict and enhance student academic performance.</p>
        <button class="mt-6 px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-500"><a href="{{ route('dashboard-analysis') }}">Get Started</a></button>
    </div>
</section>
<br><br><br><br><br><br>


<!-- Footer Section -->
<footer class="bg-blue-600 text-white py-10">
    <div class="max-w-7xl mx-auto text-center">
        <p>© 2025 StudentPredict. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
