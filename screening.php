<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="main.css"> 
    <link rel="stylesheet" href="index.css"> 
    <!-- <link rel="stylesheet" href="Property.css">  -->
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
            overflow-x: auto;
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
            /* margin-right:px; */
            padding: 5px 10px;
            border: 1px solid  #00192D;
            background: white;
            cursor: pointer;
        }
        spani {
    background-color: #FFC107;
    padding: 5px;
    border-radius:10px;
}
        }
    </style>
</head>
<body>
<?php include 'topbar.php'?> 
<?php include 'sidebar.php'?> 
          

<br>
<div id="content">
<?php include 'MenuIcon.php'?>

</div>
<!-- <p style>Tenant Screening Dashboard</p> -->
<div class="card" style="margin-left: 20rem; margin-right: 2rem;">
  <div class="card-body">
  <h2 class="text-center">Tenant Screening</h2>
    
    <div class="filters">
        <b>Filters:</b>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">All</button>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">Pending</button>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">Approved</button>
        <button class="btn btn-warning" style="border-radius:10px; width: 150px;">Rejected</button>
    </div>
  

    <h2 > <spani>APPLICANT LIST</spani></h2>
    <table>
        <tr>
            <th><spani>Name</spani></th>
            <th><spani>Date Applied</spani></th>
            <th><spani>Status</spani></th>
            <th><spani>Action</spani></th>
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
</div>


<script src="main.js"></script>
</body>
</html>