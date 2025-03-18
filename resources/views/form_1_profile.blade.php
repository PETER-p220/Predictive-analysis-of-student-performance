<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Predictions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table {
            margin-top: 20px;
        }
    </style>
        @vite('resources/css/app.css','resources/js/app.js')

</head>
<body>
    <div class="container">
        <h1 class="mt-4">Student Predicted Scores</h1>

        <!-- Predictions Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Candidate No</th>
                    <th>Sex</th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Mathematics</th>
                    <th>Geography</th>
                    <th>Civics</th>
                    <th>Swahili</th>
                    <th>English</th>
                    <th>History</th>
                    <th>Biology</th>
                    <th>Average</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($predictions as $student)
                    <tr>
                        <td>{{ $student[0] ?? '' }}</td> <!-- Candidate No -->
                        <td>{{ $student[1] ?? '' }}</td> <!-- Sex -->
                        <td>{{ $student[2] ?? '' }}</td> <!-- Physics -->
                        <td>{{ $student[3] ?? '' }}</td> <!-- Chemistry -->
                        <td>{{ $student[4] ?? '' }}</td> <!-- Mathematics -->
                        <td>{{ $student[5] ?? '' }}</td> <!-- Geography -->
                        <td>{{ $student[6] ?? '' }}</td> <!-- Civics -->
                        <td>{{ $student[7] ?? '' }}</td> <!-- Swahili -->
                        <td>{{ $student[8] ?? '' }}</td> <!-- English -->
                        <td>{{ $student[9] ?? '' }}</td> <!-- History -->
                        <td>{{ $student[10] ?? '' }}</td> <!-- Biology -->
                        <td>{{ $student[11] ?? '' }}</td> <!-- Average -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" class="text-center">No predictions available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
