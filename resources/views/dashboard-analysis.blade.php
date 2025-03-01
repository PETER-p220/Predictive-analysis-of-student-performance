<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EduPredict</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

<!-- Main Content -->
<div class="ml-6 p-6">

    <!-- Header -->
    <header class="flex justify-between items-center mb-6">
        <div class="text-3xl font-semibold">Student Dashboard</div>
        <div class="flex items-center space-x-4">
            <span class="font-medium">Petram Future</span>
            <img src="{{ asset('images\icons8-admin-48.png') }}" alt="profile" class="rounded-full">
        </div>
    </header>

    <!-- Academic Performance Overview -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800">Current Average</h2>
            <p class="text-3xl font-bold text-blue-600 mt-2">68</p>
            <p class="mt-2 text-sm text-gray-500">On Track</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800">Predicted Final Exam Score</h2>
            <p class="text-3xl font-bold text-blue-600 mt-2">85%</p>
            <p class="mt-2 text-sm text-gray-500">Positive Trend</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800">Needs Attention</h2>
            <p class="text-3xl font-bold text-red-600 mt-2">Math: 60%</p>
            <p class="mt-2 text-sm text-gray-500">Focus on improving grade</p>
        </div>
    </section>

    <!-- Performance Trends and Predictions -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        <!-- Performance Trends Chart -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Performance Trends</h3>
            <canvas id="performanceChart" class="bg-gray-300 h-64 rounded-lg"></canvas>
        </div>

        <!-- Predicted Final Exam Score Chart -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Predicted Final Exam Score</h3>
            <canvas id="predictionChart" class="bg-gray-300 h-64 rounded-lg"></canvas>
        </div>
    </section>

    <!-- Upcoming Assignments Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Upcoming Assignments / Exams</h3>
        <ul class="space-y-4">
            <li class="flex justify-between items-center">
                <div>
                    <h4 class="text-lg font-medium">Math Midterm</h4>
                    <p class="text-sm text-gray-500">Due: March 10, 2025</p>
                </div>
                <div class="text-blue-600">Upcoming</div>
            </li>
            <li class="flex justify-between items-center">
                <div>
                    <h4 class="text-lg font-medium">English Essay</h4>
                    <p class="text-sm text-gray-500">Due: March 15, 2025</p>
                </div>
                <div class="text-blue-600">Upcoming</div>
            </li>
            <li class="flex justify-between items-center">
                <div>
                    <h4 class="text-lg font-medium">Science Quiz</h4>
                    <p class="text-sm text-gray-500">Due: March 18, 2025</p>
                </div>
                <div class="text-blue-600">Upcoming</div>
            </li>
        </ul>
    </section>

    <!-- Actionable Insights / Recommendations -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Actionable Insights</h3>
        <ul class="space-y-4">
            <li class="flex justify-between items-center">
                <div>
                    <h4 class="text-lg font-medium">Math: Improve Score</h4>
                    <p class="text-sm text-gray-500">Focus more on practice tests and revision.</p>
                </div>
                <div class="text-red-600">Needs Attention</div>
            </li>
            <li class="flex justify-between items-center">
                <div>
                    <h4 class="text-lg font-medium">English: Keep Up the Good Work</h4>
                    <p class="text-sm text-gray-500">You are on track, keep it up!</p>
                </div>
                <div class="text-green-600">On Track</div>
            </li>
        </ul>
    </section>

</div>

<!-- Chart.js Script to Render Charts -->
<script>
    // Performance Trends Chart (Bar Chart)
    const performanceCtx = document.getElementById('performanceChart').getContext('2d');
    const performanceChart = new Chart(performanceCtx, {
        type: 'bar',
        data: {
            labels: ['Math', 'English', 'Science', 'History', 'Geography'],
            datasets: [{
                label: 'Performance Score',
                data: [75, 50, 60, 80, 85], // Example scores
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Predicted Final Exam Score Chart (Line Chart)
    const predictionCtx = document.getElementById('predictionChart').getContext('2d');
    const predictionChart = new Chart(predictionCtx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Predicted Score',
                data: [80, 82, 85, 87, 90], // Example predicted scores
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
