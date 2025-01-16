<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-header {
            margin-bottom: 30px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            font-size: 1.1rem;
        }
        .card-header {
            font-weight: bold;
        }
        .property-card {
            padding: 15px;
            border-radius: 8px;
            background-color: #f4f4f4;
        }
        .status {
            font-weight: bold;
        }
        .status-occupied {
            color: green;
        }
        .status-vacant {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header text-center">
            <h1>Property Management Dashboard</h1>
        </div>
        
        <div class="row">
            <!-- Property 1 -->
            <div class="col-md-4">
                <div class="card property-card">
                    <div class="card-header">Property 1</div>
                    <div class="card-body">
                        <p><strong>Occupancy Status:</strong> <span class="status status-occupied">Occupied</span></p>
                        <p><strong>Rent Collection Status:</strong> $1,500 / $1,500</p>
                        <p><strong>Maintenance Requests:</strong> 2 open requests</p>
                    </div>
                </div>
            </div>
            <!-- Property 2 -->
            <div class="col-md-4">
                <div class="card property-card">
                    <div class="card-header">Property 2</div>
                    <div class="card-body">
                        <p><strong>Occupancy Status:</strong> <span class="status status-vacant">Vacant</span></p>
                        <p><strong>Rent Collection Status:</strong> $0 / $1,000</p>
                        <p><strong>Maintenance Requests:</strong> 1 open request</p>
                    </div>
                </div>
            </div>
            <!-- Property 3 -->
            <div class="col-md-4">
                <div class="card property-card">
                    <div class="card-header">Property 3</div>
                    <div class="card-body">
                        <p><strong>Occupancy Status:</strong> <span class="status status-occupied">Occupied</span></p>
                        <p><strong>Rent Collection Status:</strong> $1,000 / $1,000</p>
                        <p><strong>Maintenance Requests:</strong> No open requests</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <!-- Chart Section -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Occupancy Status Overview</div>
                    <div class="card-body">
                        <div id="occupancy-chart">[Insert Chart Here]</div>
                        <!-- Example Chart (Placeholder) -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Rent Collection Overview</div>
                    <div class="card-body">
                        <div id="rent-collection-chart">[Insert Chart Here]</div>
                        <!-- Example Chart (Placeholder) -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
