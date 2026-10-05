<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card-statistics {
            margin-bottom: 20px;
        }
        .chart-container {
            position: relative;
            height: 400px;
            margin-bottom: 250px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Analytics Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#overview">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#charts">Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tables">Tables</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Section -->
<header class="p-5 bg-light text-center">
    <h1>Welcome to Your Analytics Dashboard</h1>
    <p>Track, analyze, and visualize your data effectively.</p>
</header>

<!-- Overview Section -->
<section id="overview" class="container my-5">
    <h2 class="text-center mb-4">Overview</h2>
    <div class="row">
        <div class="col-md-4 card-statistics">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text display-4">2,345</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 card-statistics">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Total Revenue</h5>
                    <p class="card-text display-4">$15,600</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 card-statistics">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Total Sessions</h5>
                    <p class="card-text display-4">7,890</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Charts Section -->
<section id="charts" class="container my-5">
    <h2 class="text-center mb-4">User Growth Over Time</h2>
    <div class="chart-container">
        <canvas id="userGrowthChart"></canvas>
    </div>
</section>

<!-- Tables Section -->
<section id="tables" class="container my-5">
    <h2 class="text-center mb-4">Recent Activities</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Activity</th>
                <th scope="col">User</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2023-10-01</td>
                <td>User Signup</td>
                <td>John Doe</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>2023-10-02</td>
                <td>Purchase</td>
                <td>Jane Smith</td>
                <td>$20</td>
            </tr>
            <tr>
                <td>2023-10-03</td>
                <td>User Login</td>
                <td>Chris Lee</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td>2023-10-04</td>
                <td>User Signup</td>
                <td>Emma Wilson</td>
                <td>$10</td>
            </tr>
        </tbody>
    </table>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js Script -->
<script>
    const ctx = document.getElementById('userGrowthChart').getContext('2d');
    const userGrowthChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'User Growth',
                data: [0, 150, 300, 500, 800, 1300, 2000], // Updated Y values representing user counts over the months
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                },
            },
            scales: {
                y: {
                    title: {
                        display: true,
                        text: 'Number of Users',
                    },
                    beginAtZero: true,
                },
                x: {
                    title: {
                        display: true,
                        text: 'Months',
                    }
                }
            }
        }
    });
</script>

</body>
</html>
