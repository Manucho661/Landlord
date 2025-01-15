<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lease Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .full-screen-container {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    header {
      background-color: #00192D;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 0 0 8px 8px;
    }

    header .header-title {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .content {
      flex-grow: 1;
      padding: 20px;
      overflow-y: auto;
      background-color: #f3f4f6;
    }

    .content h2 {
      color: #007bff;
    }

    table {
      background: white;
      border-radius: 8px;
      overflow: hidden;
    }

    .table-header {
      background-color: #00192D;
      color: #FFC107;
    }

    .list-group-item {
      border: none;
      background: white;
      margin-bottom: 10px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    footer {
      background: #007bff;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
    #yele{
      background:#00192D;
      width: 120px;
      height: 50px;
      justify-content: end;
      color: #FFC107;
    }
#yolo{
  background: #00192D;
  color: #FFC107;
}
  </style>
</head>
<body>

<?php include 'topbar.php'?>
<?php include 'sidebar.php'?>

<div id="content">
<?php include 'MenuIcon.php'?>
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lease Summary</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn" id="yolo">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Balance Tracking</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn" id="yolo">Go somewhere</a>
      </div>
    </div>
  </div>
</div>



    <!-- Main Content Section -->
    <div class="content">
      <!-- Lease Agreements Table -->
      <section class="mb-5">
        <h2 class="mb-3" style="color: grey;">Lease Agreements</h2>
        <div class="table-responsive">
        <button class="btn  mt-2"id="yele" data-bs-toggle="modal" data-bs-target="#leaseModal">AddNewLease</button> <br><br> 
          <table class="table table-hover">
            <thead class="table-header">
              <tr>
                <th>Property Name</th>
                <th>Lessee Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Rent</th>
                <th>Status</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Greenwood Apartments</td>
                <td>John Doe</td>
                <td>2023-01-01</td>
                <td>2024-01-01</td>
                <td>2024-01-01</td>
                <td><span class="badge" id="yolo">Active</span></td>
              </tr>
              <tr>
                <td>Lakeview Villa</td>
                <td>Jane Smith</td>
                <td>2022-05-15</td>
                <td>2023-05-15</td>
                <td>2024-01-01</td>
                <td><span class="badge bg-danger">Expired</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Renewal Alerts -->
      <section>
        <h2 class="mb-3" style="color: grey;">Renewal Alerts</h2>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Greenwood Apartments lease is expiring on 2024-01-01.
            <button class="btn btn-sm" id="yolo">Renew</button>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Lakeview Villa lease has expired on 2023-05-15.
            <button class="btn btn-danger btn-sm">Terminate</button>
          </li>
        </ul>
      </section>
    </div>

  <!-- Lease Modal -->
  <div class="modal fade" id="leaseModal" tabindex="-1" aria-labelledby="leaseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="leaseModalLabel">Add New Lease</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="propertyName" class="form-label">Property Name</label>
              <input type="text" class="form-control" id="propertyName" placeholder="Enter property name">
            </div>
            <div class="mb-3">
              <label for="lesseeName" class="form-label">Lessee Name</label>
              <input type="text" class="form-control" id="lesseeName" placeholder="Enter lessee name">
            </div>
            <div class="mb-3">
              <label for="startDate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="startDate">
            </div>
            <div class="mb-3">
              <label for="endDate" class="form-label">End Date</label>
              <input type="date" class="form-control" id="endDate">
            </div>
            <div class="mb-3">
              <label for="agreementFile" class="form-label">Upload Agreement</label>
              <input type="file" class="form-control" id="agreementFile">
            </div>
            <button type="submit" class="btn btn-primary w-100">Add Lease</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  
<script src="main.js"></script>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
