<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css"> 
    <link rel="stylesheet" href="index.css"> 
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color:  #00192D;
            display:center;
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #00192D;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .filters {
            margin: 25px 0;
        }
        .filters button {
            margin-right:px;
            padding: 5px 10px;
            border: 1px solid  #00192D;
            background: white;
            cursor: pointer;
        }
        span {
    background-color: #FFC107;
    padding: 5px;
    border-radius:10px;
}
    </style>
</head>
<body>
<?php include 'topbar.php'?> 
<?php include 'sidebar.php'?> 
<br>
<!-- <p style>Tenant Screening Dashboard</p> -->
<div class="card" style="margin-left: 18rem; margin-right: 2rem;">
  <div class="card-body">
  <h2 class="text-center">Tenant Screening</h2>
    
    <div class="filters">
        <b>Filters:</b>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">All</button>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">Pending</button>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">Approved</button>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">Rejected</button>
    </div>
  

    <h2 > <span>APPLICANT LIST</span></h2>
    <table>
        <tr>
            <th><span>Name</span></th>
            <th><span>Date Applied</span></th>
            <th><span>Status</span></th>
            <th><span>Action</span></th>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>10-01-2025</td>
            <td><span class="badge bg-success">Approved</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>6-06-2025</td>
            <td><span class="badge bg-danger">!Pending</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>6-06-2025</td>
            <td><span class="badge bg-danger">!Pending</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>10-01-2025</td>
            <td><span class="badge bg-success">Approved</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>6-06-2025</td>
            <td><span class="badge bg-danger">!Pending</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>10-01-2025</td>
            <td><span class="badge bg-success">Approved</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>10-01-2025</td>
            <td><span class="badge bg-success">Approved</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>6-06-2025</td>
            <td><span class="badge bg-danger">!Pending</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>6-06-2025</td>
            <td><span class="badge bg-danger">!Pending</span></td>
            <td><a href="application.php">[View]</a></td>
        </tr>

    </table>
  </div>
</div>
</body>
</html>