<div>
    <input type="file" id="csvFile" accept=".csv" />
    <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Get the canvas context
    const ctx = document.getElementById("myChart").getContext("2d");
    let myChart;

    // Function to initialize or update the chart
    function createOrUpdateChart(labels, data) {
        if (myChart) {
            myChart.destroy(); // Destroy existing chart if it exists
        }
        myChart = new Chart(ctx, {
            type: 'bar', // You can change to 'doughnut' or 'pie' if desired
            data: {
                labels: labels,
                datasets: [{
                    label: 'Predicted Results',
                    data: data,
                    borderWidth: 1,
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
    }

    // Handle file input change
    document.getElementById("csvFile").addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const text = e.target.result;
                const data = parseCSV(text);
                createOrUpdateChart(data.labels, data.values);
            };
            reader.readAsText(file);
        }
    });

    // Function to parse CSV data
    function parseCSV(csvText) {
        const lines = csvText.trim().split("\n");
        const labels = [];
        const values = [];

        // Skip the header row (Subject,Predicted Results)
        for (let i = 1; i < lines.length; i++) {
            const [label, value] = lines[i].split(",");
            labels.push(label.trim());
            values.push(parseFloat(value.trim())); // Convert string to number
        }

        return { labels, values };
    }

    // Optional: Initialize with default data
    const defaultLabels = ['physics', 'chemistry', 'biology', 'mathematics', 'geography', 'civics', 'english', 'kiswahili', 'history'];
    const defaultData = [50, 60, 35, 49, 90, 85, 68, 65, 70];
    createOrUpdateChart(defaultLabels, defaultData);
</script>
