<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maintenance Requests & Tracking</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'topbar.php'?>
<?php include 'sidebar.php'?>

<div id="content" >
<?php include 'MenuIcon.php'?>

    <!-- Maintenance Requests Table -->
    <div class="card mt-4">
      <div class="card-header bg-success text-white">
        Maintenance Requests
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Tenant Name</th>
              <th>Request Details</th>
              <th>Priority</th>
              <th>Status</th>
              <th>Assigned To</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>Leaking faucet in kitchen</td>
              <td><span class="badge bg-warning text-dark">Medium</span></td>
              <td><span class="badge bg-secondary">Pending</span></td>
              <td>Not Assigned</td>
              <td>
                <button class="btn btn-sm btn-info">Assign</button>
                <button class="btn btn-sm btn-danger">Close</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>Broken air conditioner</td>
              <td><span class="badge bg-danger">High</span></td>
              <td><span class="badge bg-primary">In Progress</span></td>
              <td>ABC Plumbing</td>
              <td>
                <button class="btn btn-sm btn-info">Reassign</button>
                <button class="btn btn-sm btn-success">Mark Complete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Service Providers Section -->
    <div class="card mt-4">
      <div class="card-header bg-info text-white">
        Service Providers
      </div>
      <div class="card-body">
        <button class="btn btn-info mb-3">Add Service Provider</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Provider Name</th>
              <th>Contact</th>
              <th>Specialty</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>ABC Plumbing</td>
              <td>123-456-7890</td>
              <td>Plumbing</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>XYZ HVAC</td>
              <td>987-654-3210</td>
              <td>HVAC Systems</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="main.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
