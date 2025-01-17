<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lease Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <link rel="stylesheet" href="main.css"> 
     <link rel="stylesheet" href="index.css"> 
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
      /* padding: 30rem; */
      overflow-y: auto;
      background-color: #f3f4f6;
      margin-left: 18rem;  /* Visible margin on the left side */
      margin-right: 2rem; /* Visible margin on the right side */
     
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
  
#yolo{
  background: #00192D;
  color: #FFC107;
}
#example {
      padding: 20px;
      border-radius: 15px;              /* Rounds the corners */
      background-color: #f0f0f0;       /* Light background color */
      border: 2.5px solid rgb(225, 202, 47);        /* Initial border color (blue) */
      transition: all 0.3s ease;        /* Smooth transition for color change */
    }
#example:hover {
  border-color: #FFC107;        
}

  </style>
</head>
<body>

 <?php include 'topbar.php'?> 

 <?php include 'sidebar.php'?> 

<br>

<div class="content">

  <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">NO OF LEASE</h5>
        <p class="card-text">50</p>
        <!-- <a href="#" class="btn" id="yolo">Go somewhere</a> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">TOTAL RENT</h5>
        <p class="card-text">KSH 40,000</p>
        <!-- <a href="#" class="btn" id="yolo">Go somewhere</a> -->
      </div>
    </div>
  </div>
</div>

<hr>
 <!-- Beginning Property row -->

 <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header" style="background-color:#00192D; color: white;" >
                  <button class="btn  mt-0" id="example" data-bs-toggle="modal" data-bs-target="#leaseModal" style="">
                  <i class="fas fa-plus"></i> 
                    Add Lease</button>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="btn btn-tool dropdown-toggle"
                          data-bs-toggle="dropdown"
                        >
                          <i class="bi bi-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" role="menu">
                          <a href="#" class="dropdown-item">Action</a>
                          <a href="#" class="dropdown-item">Another action</a>
                          <a href="#" class="dropdown-item"> Something else here </a>
                          <a class="dropdown-divider"></a>
                          <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!--begin::Row-->
                    <table id="myTableOne" class="display" style="">
                      <thead>
                        <tr>
                          <th>Property Name</th>
                          <th>Lesse Name</th>
                          <th>Start Date</th>
                          <th>End  Date</th>
                          <th>Rent</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Manucho Apartments</td>
                          <td>Matthew</td>
                          <td>Kisumu</td>
                          <td>10-10-2024</td>
                          <td>60,000</td>
                          <td><span class="badge" id="yolo">Active</span></td>
                        </tr>
                        <tr>
                          <td>Ethical Apartments</td>
                          <td>Mark</td>
                          <td>Rongai</td>
                          <td>11-10-2024</td>
                          <td>65,000</td>
                          <td><span class="badge" id="yolo">!inactive</span></td>
                        </tr>
                        <!-- Add more rows as needed -->
                      </tbody>
            
                  </table>
                    <!--end::Row-->
                  </div>
</div>
<hr>
   
      <!-- Renewal Alerts -->

      <div class="card">
  <div class="card-body">
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

<script>
      // Initialize DataTable
      $(document).ready(function () {
          $('#myTable').DataTable();
      });
      $(document).ready(function () {
          $('#myTableOne').DataTable();
      });
      $(document).ready(function () {
          $('#myTableThree').DataTable();
      });
      $(document).ready(function () {
          $('#myTableFour').DataTable();
      });
   </script>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
