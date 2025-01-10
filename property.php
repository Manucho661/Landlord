<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- <link rel="stylesheet" href="index.css">  -->
     <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="Property.css">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include 'topbar.php'?>

    <?php include 'sidebar.php'?>



<div id="content">           
    <?php include 'MenuIcon.php'?>


    
                <div class="propName">
                    <p>Properties/CROWN Z</p>
                </div>

    <div class="container-fluid">
        

        <div class="row propNav ">
            
            <div class="col-md-2 fw-semibold"><a href="property.php">Summary</a></div>
            <div class="col-md-2 fw-semibold"><a href="occup.php">Occupancy</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="">Units</a> </div>
            <div class="col-md-2 fw-semibold"> <a href="rent.php"> Rent</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="financial.php">Financials</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="communications/announcements.php">Communications</a>  </div>
            <hr>

        </div>


        <div class="row" style="height: 50%;"> <!-- third row -->
                <div class="col-lg-6">

                    <div class="details" style="width:100%;">

                        <div>
                            <img src="./images/second.png" alt="" width="100%" height="100%"> 
                        </div>
                    </div>
                </div>

                <div class="col-6 text-justify">
                    <div style="font-size: 1em; ">
                        <div class="address">
                            <p class="fw-semibold">Address/Location</p>
                            <p>
                                John Doe
                                123 Maple Street
                                Springfield, IL 62704
                                USA
                            </p>
                        </div>

                        <div class="Manager">
                            <p class="fw-semibold">Manager</p>
                            <p>KELVIN MBUGUA</p>
                        </div>

                        <div class="Manager">
                            <p class="fw-semibold">Units</p>
                            <p>123 Rooms</p>
                        </div>

                        <div class="EDIT" >
                            <button>EDIT</button>
                            
                        </div>
                    </div>

                </div>            
            

            
        
        </div>

        <div class="row mt-5">
            <!-- About Section -->
            <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>We are committed to providing the best service and experience for our users. Contact us for more information.</p>
                </div>
                <!-- Links Section -->
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>
                        Email: <a href="mailto:info@example.com">info@example.com</a><br>
                        Phone: +123 456 7890<br>
                        Address: 123 Main St, City, Country
                    </p>
                </div>
        </div>

    </div>

</div>
    
<script src="main.js"></script>




</body>
</html>