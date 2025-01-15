<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landlord Dashboard</title>
  <link rel="stylesheet" href="tenantScreening.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
      color: #007bff;
    }
    .card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .quick-actions button {
      margin-right: 10px;
    }
    .status-badge {
      font-size: 0.9rem;
    }
    .custom-btn {
    background-color: #00192D;
    border-color: #00192D;
    color:  #FFC107; /* White background */
 
}

  </style>
</head>
<body>

<?php include 'topbar.php'?>
<?php include 'sidebar.php'?>

<div id="content">
<?php include 'MenuIcon.php'?>

<div class="container mt-4">
  <!-- Quick Stats -->
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card text-center" style="border:solid 1px  #FFC107;" >
        <div class="card-body">
          <h5 class="card-title">CROWN Z</h5>
          <p class="card-text fs-4">12</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center" style="border:solid 1px  #FFC107; "  >
        <div class="card-body">
          <h5 class="card-title">WHITE HOUSE</h5>
          <p class="card-text fs-4">4</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center" style="border:solid 1px  #FFC107;">
        <div class="card-body">
          <h5 class="card-title">ORANGE HOUSE</h5>
          <p class="card-text fs-4">7</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center" style="border:solid 1px  #FFC107;">
        <div class="card-body">
          <h5 class="card-title">SILVER SPOON</h5>
          <p class="card-text fs-4">3</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Quick Actions -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 style="color:grey">Manage Applications</h4>
    <div class="quick-actions">
      <button class="btn">Add Application</button>
    </div>
  </div>

  <!-- Properties Table -->
  <div class="card">
    <div class="card-header bg-white">
      <h5 class="mb-0">Your Applications</h5>
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead class="table-light">
          <tr>
            <th>Applicant Name</th>
            <th>Location</th>
            <th>Credit Score</th>
            <th>Criminal Record</th>
            <th>Rental history</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Joel Wekesa</td>
            <td>San Francisco, CA</td>
            <td>$2,500</td>
            <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
            <td>
              <button class="btn btn-sm btn-outline custom-btn">View</button>
            </td>
            <td>
              <button class="btn btn-sm btn-outline custom-btn">Approve</button>
              <button class="btn btn-sm btn-outline-danger">Decline</button>
            </td>
          </tr>
          <tr>
            <td>Ingreat Otieno</td>
            <td>Austin, TX</td>
            <td>$1,800</td>
            <td><button class="btn btn-sm btn-outline custom-btn">View</button>
            </td>
            <td>
              <button class="btn btn-sm btn-outline custom-btn">View</button>
            </td>
            <td>
              <button class="btn btn-sm btn-outline custom-btn">Approve</button>
              <button class="btn btn-sm btn-outline-danger">Decline</button>
            </td>
          </tr>
          <tr>
            <td>Kelvin Wekesa</td>
            <td>Miami, FL</td>
            <td>$1,200</td>
            <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
            <td>
              <button class="btn btn-sm btn-outline custom-btn">View</button>
            </td>
            <td>
              <button class="btn btn-sm btn-outline custom-btn">Approve</button>
              <button class="btn btn-sm btn-outline-danger">Decline</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>


<script src="main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
