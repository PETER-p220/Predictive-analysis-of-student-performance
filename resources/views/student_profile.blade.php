<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.7/dist/tailwind.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css','resources/js/app.js')

</head>
<body class="bg-gray-700">
    <div class="container mx-auto py-8 px-4">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Student Profile</h1>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
    <table class="w-full text-left">
        <tbody>
            <tr class="border-b border-gray-200">
                <th class="text-xl font-semibold text-gray-800 py-2">Candidate No:</th>
                <td class="text-gray-700 py-2">{{ $student[0] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Sex:</th>
                <td class="text-gray-700 py-2">{{ $student[1] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Physics:</th>
                <td class="text-gray-700 py-2">{{ $student[2] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Chemistry:</th>
                <td class="text-gray-700 py-2">{{ $student[3] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Mathematics:</th>
                <td class="text-gray-700 py-2">{{ $student[4] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Geography:</th>
                <td class="text-gray-700 py-2">{{ $student[5] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Civics:</th>
                <td class="text-gray-700 py-2">{{ $student[6] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Swahili:</th>
                <td class="text-gray-700 py-2">{{ $student[7] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">English:</th>
                <td class="text-gray-700 py-2">{{ $student[8] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">History:</th>
                <td class="text-gray-700 py-2">{{ $student[9] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b border-gray-200">
                <th class="font-semibold text-gray-700 py-2">Biology:</th>
                <td class="text-gray-700 py-2">{{ $student[10] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="font-semibold text-gray-700 py-2">Average Score:</th>
                <td class="text-gray-700 py-2">{{ $student[11] ?? 'N/A' }}</td>
            </tr>
        </tbody>
    </table>
</div>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Student Progress</h3>
            <canvas id="progressChart" class="w-full h-64"></canvas>
        </div>

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" id="recommendation">
            <h4 class="font-bold">Recommendations</h4>
            <p id="failureSubjects">No failing subjects identified.</p>
        </div>

        <div class="text-center">
            <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to Home</a>
        </div>
    </div>

    <script>
        const scores = [
            {{ $student[2] ?? 0 }},
            {{ $student[3] ?? 0 }},
            {{ $student[4] ?? 0 }},
            {{ $student[5] ?? 0 }},
            {{ $student[6] ?? 0 }},
            {{ $student[7] ?? 0 }},
            {{ $student[8] ?? 0 }},
            {{ $student[9] ?? 0 }},
            {{ $student[10] ?? 0 }}
        ];
        const subjects = ['Physics', 'Chemistry', 'Mathematics', 'Geography', 'Civics', 'Swahili', 'English', 'History', 'Biology'];

        // Identify failing subjects (assuming passing score is 40)
        const failingSubjects = subjects.filter((subject, index) => scores[index] < 40);
        const recommendationElement = document.getElementById('failureSubjects');

        if (failingSubjects.length > 0) {
            recommendationElement.textContent = `You need to focus on the following subjects: ${failingSubjects.join(', ')}.`;
        } else {
            recommendationElement.textContent = "Congratulations! You have passed in all subjects.";
        }

        const ctx = document.getElementById('progressChart').getContext('2d');
        const progressChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: subjects,
                datasets: [{
                    label: 'Scores',
                    data: scores,
                    backgroundColor: scores.map(score => score < 40 ? 'rgba(255, 99, 132, 0.2)' : 'rgba(75, 192, 192, 0.2)'),
                    borderColor: scores.map(score => score < 40 ? 'rgba(255, 99, 132, 1)' : 'rgba(75, 192, 192, 1)'),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Score'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Subjects'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
