<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - EduPredict</title>
</head>
@vite(['resources/css/app.css','resources/js/app.js'])

<body class="bg-gray-100">

<!-- Main Content -->
<div class="ml-6 p-8">

    <!-- Header -->
    <header class="flex justify-between items-center mb-8">
        <div class="text-3xl font-semibold">Reports</div>
        <div class="flex items-center space-x-4">
            <span class="font-medium">Petram Future</span>
            <img src="images\icons8-admin-48.png" alt="profile" class="rounded-full">
        </div>
    </header>

    <!-- Report Download Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Download Performance Reports</h2>
        <p class="text-lg text-gray-700 mb-6">Download detailed academic performance reports or generate new ones based on recent data.</p>

        <!-- Download Report Buttons -->
        <div class="space-x-4">
            <a href="#" class="px-6 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-500">Download Average Prediction Report</a>
            <a href="#" class="px-6 py-2 bg-yellow-600 text-white font-semibold rounded-md hover:bg-yellow-500">Download Final Exam Prediction</a>
        </div>
    </section>

    <!-- Detailed Performance Report Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Detailed Performance Report</h2>

        <!-- Table for Performance Data -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white table-auto shadow-md rounded-lg">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="px-4 py-2 text-left">Subject</th>
                        <th class="px-4 py-2 text-left">Grade</th>
                        <th class="px-4 py-2 text-left">Date</th>
                        <th class="px-4 py-2 text-left">Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-4 py-2">Math</td>
                        <td class="px-4 py-2">B+</td>
                        <td class="px-4 py-2">Jan 15, 2025</td>
                        <td class="px-4 py-2 text-gray-500">Needs improvement in algebra</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-2">English</td>
                        <td class="px-4 py-2">A</td>
                        <td class="px-4 py-2">Jan 18, 2025</td>
                        <td class="px-4 py-2 text-gray-500">Excellent essay on literature</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-2">Science</td>
                        <td class="px-4 py-2">B</td>
                        <td class="px-4 py-2">Jan 20, 2025</td>
                        <td class="px-4 py-2 text-gray-500">Needs to improve lab performance</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Previously Generated Reports Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Previously Generated Reports</h2>

        <div class="space-y-4">
            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-sm">
                <div>
                    <h4 class="font-medium text-lg">January 2025 GPA Report</h4>
                    <p class="text-sm text-gray-500">Generated on: Jan 25, 2025</p>
                </div>
                <div>
                    <a href="#" class="text-blue-600 hover:text-blue-500">View Report</a>
                </div>
            </div>
            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-sm">
                <div>
                    <h4 class="font-medium text-lg">Math Performance Report</h4>
                    <p class="text-sm text-gray-500">Generated on: Jan 20, 2025</p>
                </div>
                <div>
                    <a href="#" class="text-blue-600 hover:text-blue-500">View Report</a>
                </div>
            </div>
            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-sm">
                <div>
                    <h4 class="font-medium text-lg">Final Exam Prediction Report</h4>
                    <p class="text-sm text-gray-500">Generated on: Jan 30, 2025</p>
                </div>
                <div>
                    <a href="#" class="text-blue-600 hover:text-blue-500">View Report</a>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
