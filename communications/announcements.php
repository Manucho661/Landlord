<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../main.css">
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <link rel="stylesheet" href="announcements.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php include '../topbar.php'?>
<?php include '../sidebar.php'?>



<div id="content">
    <!-- <?php include '../MenuIcon.php'?> -->
    <div class="container">
        
        <div class="row">
            <div class="propName">
                <h4>  Properties/Crown Z/Communications</h4>
            </div>
        </div>

        <div class="row rounded  secondRow mt-5 p-3 align-items-center">
            <div class="col-md-2 fw-semibold"><a href="property.php" class="text-decoration-none">Announcements</a></div>
            <div class="col-md-2 fw-semibold"><a href="occup.php" class="text-decoration-none">Emails</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="" class="text-decoration-none">Received Messages</a> </div>
            <div class="col-md-2 fw-semibold"> <a href="rent.php" class="text-decoration-none"> Mailings</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="financial.php" class="text-decoration-none" >Financials</a>  </div>
            
        </div>

        <div class="row mt-5" >
           <div class="custom-button" style="display: flex; justify-content:end;" >
           <button class="rounded p-2">Create Announcement</button>
           </div> 
            <!-- <div col="col"><button>CREATE ANNOUNCEMENT</button></div> --> 
        </div>

        <div class="row mt-2">

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SENT</th>
      <th scope="col">TITLE</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">DESTINATIONS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

        </div>

    </div>
<div>




<script src="main.js"></script>


</body>
</html>