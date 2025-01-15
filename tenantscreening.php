<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenant Screening</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="text-center">Tenant Screening Form</h1>
    <p class="text-center text-muted">Please fill out the form below for tenant screening.</p>

    <form>
      <!-- Personal Details Section -->
      <div class="card mt-4">
        <div class="card-header bg-primary text-white">
          Personal Details
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
            </div>
            <div class="col-md-6">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dob">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
          </div>
        </div>
      </div>

      <!-- Rental History Section -->
      <div class="card mt-4">
        <div class="card-header bg-success text-white">
          Rental History
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label for="previousAddress" class="form-label">Previous Address</label>
            <input type="text" class="form-control" id="previousAddress" placeholder="Enter previous address">
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="landlordName" class="form-label">Landlord Name</label>
              <input type="text" class="form-control" id="landlordName" placeholder="Enter landlord's name">
            </div>
            <div class="col-md-6">
              <label for="landlordContact" class="form-label">Landlord Contact</label>
              <input type="text" class="form-control" id="landlordContact" placeholder="Enter landlord's contact">
            </div>
          </div>
        </div>
      </div>

      <!-- Employment Details Section -->
      <div class="card mt-4">
        <div class="card-header bg-info text-white">
          Employment Details
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="employerName" class="form-label">Employer Name</label>
              <input type="text" class="form-control" id="employerName" placeholder="Enter employer's name">
            </div>
            <div class="col-md-6">
              <label for="position" class="form-label">Position</label>
              <input type="text" class="form-control" id="position" placeholder="Enter position">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="income" class="form-label">Monthly Income</label>
              <input type="number" class="form-control" id="income" placeholder="Enter monthly income">
            </div>
            <div class="col-md-6">
              <label for="employerContact" class="form-label">Employer Contact</label>
              <input type="text" class="form-control" id="employerContact" placeholder="Enter employer's contact">
            </div>
          </div>
        </div>
      </div>

      <!-- References Section -->
      <div class="card mt-4">
        <div class="card-header bg-warning text-white">
          References
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="referenceName1" class="form-label">Reference Name (1)</label>
              <input type="text" class="form-control" id="referenceName1" placeholder="Enter reference name">
            </div>
            <div class="col-md-6">
              <label for="referenceContact1" class="form-label">Reference Contact (1)</label>
              <input type="text" class="form-control" id="referenceContact1" placeholder="Enter reference contact">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="referenceName2" class="form-label">Reference Name (2)</label>
              <input type="text" class="form-control" id="referenceName2" placeholder="Enter reference name">
            </div>
            <div class="col-md-6">
              <label for="referenceContact2" class="form-label">Reference Contact (2)</label>
              <input type="text" class="form-control" id="referenceContact2" placeholder="Enter reference contact">
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-4">Submit Application</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
