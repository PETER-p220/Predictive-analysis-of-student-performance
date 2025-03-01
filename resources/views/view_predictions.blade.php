<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Predictions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Student Predictions</h1>

        <!-- Sticky Table -->
        <div class="overflow-x-auto shadow-md rounded-lg border border-gray-200 bg-white">
            <!-- Table Container that is sticky -->
            <div class="table-container sticky top-0 bg-white z-10">
                <table class="min-w-full table-auto text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="py-1 px-2 text-left">Student Name</th>
                            <th class="py-1 px-2 text-left">Physics</th>
                            <th class="py-1 px-2 text-left">Chemistry</th>
                            <th class="py-1 px-2 text-left">Geography</th>
                            <th class="py-1 px-2 text-left">Biology</th>
                            <th class="py-1 px-2 text-left">Mathematics</th>
                            <th class="py-1 px-2 text-left">English</th>
                            <th class="py-1 px-2 text-left">Swahili</th>
                            <th class="py-1 px-2 text-left">Civics</th>
                            <th class="py-1 px-2 text-left">History</th>
                            <th class="py-1 px-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table Rows (Example student data) -->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-1 px-2">John Doe</td>
                            <td class="py-1 px-2">Pass</td>
                            <td class="py-1 px-2">Pass</td>
                            <td class="py-1 px-2">Pass</td>
                            <td class="py-1 px-2">Fail</td>
                            <td class="py-1 px-2">Pass</td>
                            <td class="py-1 px-2">Pass</td>
                            <td class="py-1 px-2">Pass</td>
                            <td class="py-1 px-2">Fail</td>
                            <td class="py-1 px-2">Pass</td>

                            <td class="py-1 px-2">
                                <div class="flex space-x-3">
                                    <button class="bg-green-500 text-white hover:bg-green-700 transition-colors duration-300 py-1 px-3 rounded-md shadow-md" onclick="viewDetails(1)">
                                        View
                                    </button>
                                    <button class="bg-yellow-500 text-white hover:bg-yellow-700 transition-colors duration-300 py-1 px-3 rounded-md shadow-md" onclick="editPrediction(1)">
                                        Edit
                                    </button>
                                    <button class="bg-red-500 text-white hover:bg-red-700 transition-colors duration-300 py-1 px-3 rounded-md shadow-md" onclick="deletePrediction(1)">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Add more rows dynamically as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function viewDetails(id) {
            alert('Viewing details for student with ID: ' + id);
        }

        function editPrediction(id) {
            alert('Editing prediction for student with ID: ' + id);
        }

        function deletePrediction(id) {
            const confirmation = confirm('Are you sure you want to delete this student\'s prediction?');
            if (confirmation) {
                alert('Student prediction with ID ' + id + ' has been deleted.');
            }
        }
    </script>

</body>
</html>
