<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
         <!-- Link to Font Awesome for icons -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<!-- Sidebar -->
<div id="sidebar"  class="sidebar expanded d-flex flex-column">
        <a href="index2.php" onclick="toggleItems()">
        <i class="fas fa-tachometer-alt"></i> DASHBOARD </a><br>
        <a href="property.php"><i class="fas fa-building"></i> PROPERTY</a><br>
        <a href="screening.php"><i class="fas fa-clipboard-check"></i>TENANT SCREENING</a><br>
        <!-- Dropdown Menu -->
    <div class="dropdown">
        <a class="dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-file"></i>
        FILES
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item text-black" href="#">Lease Agreements</a></li>
        </ul>
    </div><br>
        <a href="leasy.php"><i class="fas fa-users"></i> LEASE MANAGEMENT</a><br>
        <a href="settings.php"> <i class="fas fa-cogs"></i> SETTINGS</a><br>
        <a href="help.php"><i class="fas fa-question-circle"></i>HELP </a><br><br><br><br><br><br><br><br><br>
        <a href="tenant.php"><i class="fas fa-sign-out-alt"></i> Logout</a><br>
</div> 
</body>
<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</html>




 
 
 
 
