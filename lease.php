<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lease Management</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="text-left">Lease Management</h1>

    <!-- Lease Details Section -->
    <div class="card mt-4">
      <div class="card-header bg-primary text-white">
        Lease Details
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="propertyName" class="form-label">Property Name</label>
              <input type="text" class="form-control" id="propertyName" placeholder="Enter property name">
            </div>
            <div class="col-md-6">
              <label for="leaseStartDate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="leaseStartDate">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="leaseEndDate" class="form-label">End Date</label>
              <input type="date" class="form-control" id="leaseEndDate">
            </div>
            <div class="col-md-6">
              <label for="monthlyRent" class="form-label">Monthly Rent</label>
              <input type="number" class="form-control" id="monthlyRent" placeholder="Enter rent amount">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Save Lease</button>
        </form>
      </div>
    </div>

    <!-- Tenants Section -->
    <div class="card mt-4">
      <div class="card-header bg-success text-white">
        Tenants
      </div>
      <div class="card-body">
        <button class="btn btn-success mb-3">Add Tenant</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Tenant Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>123-456-7890</td>
              <td>johndoe@example.com</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Remove</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Payments Section -->
    <div class="card mt-4">
      <div class="card-header bg-info text-white">
        Payments
      </div>
      <div class="card-body">
        <button class="btn btn-info mb-3">Record Payment</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Tenant</th>
              <th>Amount</th>
              <th>Payment Method</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2025-01-10</td>
              <td>John Doe</td>
              <td>$1200</td>
              <td>Credit Card</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
