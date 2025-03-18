<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Performance Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto p-6">

    <!-- Header -->
    <header class="text-center mb-12">
      <h1 class="text-5xl font-bold text-gray-800">Predictive Analysis of Student Performance</h1>
      <p class="text-xl text-gray-600 mt-4">Analyze and predict student academic performance across subjects using real-time data.</p>
    </header>

    <!-- Performance Trends Section -->
    <section class="mb-12">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">Subject Performance Trends</h2>
      <div class="bg-white shadow-xl rounded-lg p-6">
        <canvas id="performanceTrendChart"></canvas>
      </div>
    </section>

    <!-- Real-Time Predictions Section -->
    <section class="mb-12">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">Real-Time Predictions</h2>
      <div class="bg-white shadow-xl rounded-lg p-6">
        <table class="w-full text-left">
          <thead>
            <tr>
              <th class="border-b py-3 px-4 text-lg text-gray-600">Subject</th>
              <th class="border-b py-3 px-4 text-lg text-gray-600">Predicted Score</th>
              <th class="border-b py-3 px-4 text-lg text-gray-600">At Risk</th>
            </tr>
          </thead>
          <tbody id="predictionTableBody">
            <!-- Rows for Subjects -->
            <tr>
              <td class="border-b py-2 px-4">Physics</td>
              <td class="border-b py-2 px-4" id="predictedPhysics">Loading...</td>
              <td class="border-b py-2 px-4" id="atRiskPhysics">Loading...</td>
            </tr>
            <tr>
              <td class="border-b py-2 px-4">Mathematics</td>
              <td class="border-b py-2 px-4" id="predictedMath">Loading...</td>
              <td class="border-b py-2 px-4" id="atRiskMath">Loading...</td>
            </tr>
            <tr>
              <td class="border-b py-2 px-4">Chemistry</td>
              <td class="border-b py-2 px-4" id="predictedChemistry">Loading...</td>
              <td class="border-b py-2 px-4" id="atRiskChemistry">Loading...</td>
            </tr>
            <tr>
              <td class="border-b py-2 px-4">Biology</td>
              <td class="border-b py-2 px-4" id="predictedBiology">Loading...</td>
              <td class="border-b py-2 px-4" id="atRiskBiology">Loading...</td>
            </tr>
            <!-- Additional subjects can be added similarly -->
          </tbody>
        </table>
      </div>
    </section>

    <!-- At-Risk Subjects Chart -->
    <section class="mb-12">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">At-Risk Subjects</h2>
      <div class="bg-white shadow-xl rounded-lg p-6">
        <canvas id="atRiskChart"></canvas>
      </div>
    </section>

  </div>

  <script>
    // Dummy Prediction Data for Testing (You would get this from your API)
    const subjectPredictions = {
      physics: 45,
      mathematics: 55,
      chemistry: 48,
      biology: 60
    };

    // Function to fetch real-time predictions from the Flask backend (replace with real API call)
    async function getPrediction(features) {
      // Simulate a prediction based on features (for now we use hardcoded data)
      return subjectPredictions;
    }

    // Function to update the table and charts with predictions
    async function updatePredictions() {
      const features = [0.8, 0.6, 0.7, 0.75, 0.9]; // Example input features

      // Simulate fetching predictions from backend
      const predictions = await getPrediction(features);

      // Update predicted scores in the table
      document.getElementById('predictedPhysics').textContent = predictions.physics.toFixed(2);
      document.getElementById('predictedMath').textContent = predictions.mathematics.toFixed(2);
      document.getElementById('predictedChemistry').textContent = predictions.chemistry.toFixed(2);
      document.getElementById('predictedBiology').textContent = predictions.biology.toFixed(2);

      // Identify if the student is at risk based on predicted score (e.g., below 50%)
      document.getElementById('atRiskPhysics').textContent = predictions.physics < 50 ? 'Yes' : 'No';
      document.getElementById('atRiskMath').textContent = predictions.mathematics < 50 ? 'Yes' : 'No';
      document.getElementById('atRiskChemistry').textContent = predictions.chemistry < 50 ? 'Yes' : 'No';
      document.getElementById('atRiskBiology').textContent = predictions.biology < 50 ? 'Yes' : 'No';

      // Update charts
      updateCharts(predictions);
    }

    // Function to update the charts
    function updateCharts(predictions) {
      const subjectNames = ['Physics', 'Mathematics', 'Chemistry', 'Biology'];
      const subjectScores = [
        predictions.physics,
        predictions.mathematics,
        predictions.chemistry,
        predictions.biology
      ];

      // Line chart for subject performance trends (Dummy example)
      const performanceTrendChart = new Chart(document.getElementById('performanceTrendChart'), {
        type: 'line',
        data: {
          labels: ['2026', '2027', '2028'],
          datasets: [
            {
              label: 'Physics',
              data: [50, 55, predictions.physics],
              borderColor: 'rgb(255, 99, 132)',
              fill: false
            },
            {
              label: 'Mathematics',
              data: [60, 65, predictions.mathematics],
              borderColor: 'rgb(54, 162, 235)',
              fill: false
            },
            {
              label: 'Chemistry',
              data: [55, 60, predictions.chemistry],
              borderColor: 'rgb(75, 192, 192)',
              fill: false
            },
            {
              label: 'Biology',
              data: [70, 72, predictions.biology],
              borderColor: 'rgb(153, 102, 255)',
              fill: false
            }
          ]
        }
      });

      // Bar chart for at-risk subjects
      const atRiskChart = new Chart(document.getElementById('atRiskChart'), {
        type: 'bar',
        data: {
          labels: subjectNames,
          datasets: [{
            label: 'Predicted Scores',
            data: subjectScores,
            backgroundColor: subjectScores.map(score => score < 50 ? 'rgb(255, 99, 132)' : 'rgb(75, 192, 192)'),
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              max: 100
            }
          }
        }
      });
    }

    // Call updatePredictions to populate the real-time data when the page loads
    window.onload = updatePredictions;

  </script>

</body>
</html>
