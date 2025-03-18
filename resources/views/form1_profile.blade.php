@vite('resources/css/app.css','resources/js/app.js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="bg-gradient-to-r from-blue-500 via-teal-500 to-green-500 p-8 rounded-lg shadow-lg">
    <div class="text-white text-center mb-8">
        <h1 class="text-3xl font-semibold">Student Profile</h1>
        <p class="text-xl">Here are your actual and predicted results along with trends.</p>
    </div>

    <!-- Actual Results Section -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-white mb-4">Actual Results</h2>

        <!-- Actual Results Trend Graph -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <canvas id="actualResultsChart"></canvas>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto border-collapse text-gray-900">
                <thead class="bg-indigo-600 text-white text-lg">
                    <tr>
                        <th class="px-4 py-3 text-left">Physics</th>
                        <th class="px-4 py-3 text-left">Mathematics</th>
                        <th class="px-4 py-3 text-left">Chemistry</th>
                        <th class="px-4 py-3 text-left">Biology</th>
                        <th class="px-4 py-3 text-left">Geography</th>
                        <th class="px-4 py-3 text-left">Kiswahili</th>
                        <th class="px-4 py-3 text-left">English</th>
                        <th class="px-4 py-3 text-left">Civics</th>
                        <th class="px-4 py-3 text-left">History</th>
                        <th class="px-4 py-3 text-left">Average</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3 text-center">75</td>
                        <td class="px-4 py-3 text-center">80</td>
                        <td class="px-4 py-3 text-center">78</td>
                        <td class="px-4 py-3 text-center">85</td>
                        <td class="px-4 py-3 text-center">90</td>
                        <td class="px-4 py-3 text-center">70</td>
                        <td class="px-4 py-3 text-center">88</td>
                        <td class="px-4 py-3 text-center">76</td>
                        <td class="px-4 py-3 text-center">82</td>
                        <td class="px-4 py-3 text-center font-semibold text-indigo-600">80.33</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Predicted Results Section -->
    <div>
        <h2 class="text-2xl font-bold text-white mb-4">Predicted Results</h2>

        <!-- Predicted Results Trend Graph -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <canvas id="predictedResultsChart"></canvas>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto border-collapse text-gray-900">
                <thead class="bg-red-600 text-white text-lg">
                    <tr>
                        <th class="px-4 py-3 text-left">Physics</th>
                        <th class="px-4 py-3 text-left">Mathematics</th>
                        <th class="px-4 py-3 text-left">Chemistry</th>
                        <th class="px-4 py-3 text-left">Biology</th>
                        <th class="px-4 py-3 text-left">Geography</th>
                        <th class="px-4 py-3 text-left">Kiswahili</th>
                        <th class="px-4 py-3 text-left">English</th>
                        <th class="px-4 py-3 text-left">Civics</th>
                        <th class="px-4 py-3 text-left">History</th>
                        <th class="px-4 py-3 text-left">Predicted Average</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3 text-center">78</td>
                        <td class="px-4 py-3 text-center">85</td>
                        <td class="px-4 py-3 text-center">80</td>
                        <td class="px-4 py-3 text-center">90</td>
                        <td class="px-4 py-3 text-center">92</td>
                        <td class="px-4 py-3 text-center">75</td>
                        <td class="px-4 py-3 text-center">85</td>
                        <td class="px-4 py-3 text-center">78</td>
                        <td class="px-4 py-3 text-center">84</td>
                        <td class="px-4 py-3 text-center font-semibold text-red-600">84.33</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// Data for Actual Results Chart
var actualResultsCtx = document.getElementById('actualResultsChart').getContext('2d');
var actualResultsChart = new Chart(actualResultsCtx, {
    type: 'line',
    data: {
        labels: ['Term 1', 'Term 2', 'Term 3', 'Term 4'], // Example terms
        datasets: [{
            label: 'Physics',
            data: [75, 78, 80, 85], // Example data for actual physics
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: false,
        }, {
            label: 'Mathematics',
            data: [80, 82, 85, 88], // Example data for actual mathematics
            borderColor: 'rgba(54, 162, 235, 1)',
            fill: false,
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Term'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Score'
                },
                beginAtZero: true
            }
        }
    }
});

// Data for Predicted Results Chart
var predictedResultsCtx = document.getElementById('predictedResultsChart').getContext('2d');
var predictedResultsChart = new Chart(predictedResultsCtx, {
    type: 'line',
    data: {
        labels: ['Term 1', 'Term 2', 'Term 3', 'Term 4'],
        datasets: [{
            label: 'Physics',
            data: [78, 80, 82, 90], // Example data for predicted physics
            borderColor: 'rgba(153, 102, 255, 1)',
            fill: false,
        }, {
            label: 'Mathematics',
            data: [85, 88, 90, 92], // Example data for predicted mathematics
            borderColor: 'rgba(255, 159, 64, 1)',
            fill: false,
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Term'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Score'
                },
                beginAtZero: true
            }
        }
    }
});
</script>
