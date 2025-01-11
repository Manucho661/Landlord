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
        .row .col-3{
            /* background-color:white; */
            margin-right:1%;
            
        }
        body{
            
            background-color: rgba(128, 128, 128, 0.1);
        }
        .summaryItem{
            font-family: 'Playfair Display', serif; /* Elegant for creative projects */
font-size: 25px;
font-weight: bold;

font-weight: 400; /* Lighter weight for a faint look */
letter-spacing: 1px; /* Slight spacing for an airy feel */
color:grey;

        }
    </style>
</head>
<body>
    <?php include 'topbar.php'?>

    <?php include 'sidebar.php'?>



<div id="content" >           
    <?php include 'MenuIcon.php'?>

                


    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-3 bg-white rounded">
                <div class="summaryItem">PROPERTY</div>
                <div>CROWN z</div>

            </div>

            <div class="col-3 bg-white rounded">
                <div class="summaryItem" >Address/location</div>
                <div> John Doe
                                123 Maple Street
                                Springfield, IL 62704
                                USA         
                </div>

            </div>

            <div class="col-3 bg-white rounded">
                <div class="summaryItem">Manager</div>
                <div>Kevin Mbugua</div>

            </div>

            <div class="col-2 bg-white">
                <div class="summaryItem">Units</div>
                <div>123</div>

            </div>

        </div>
        
        <div class="row propNav ">
            
            <div class="col-md-2 fw-semibold"><a href="property.php">Summary</a></div>
            <div class="col-md-2 fw-semibold"><a href="occup.php">Occupancy</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="">Units</a> </div>
            <div class="col-md-2 fw-semibold"> <a href="rent.php"> Rent</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="financial.php">Financials</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="communications/announcements.php">Communications</a>  </div>
            <hr>

        </div>

        
        <div class="Tenant-section mt-5">

                <div class="row mt-2" >
                    <div class="custom-button" style="display: flex; justify-content:end;" >
                       <button class="rounded p-2">ADD A TENANT</button>
                    </div>
                </div>

            <div class="row mt-3"> <!-- third row -->
                
                <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">OCCUPIED</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">PHONE</th>
                                        <th scope="col">GENDER</th>
                                        <th scope="col">UNIT</th>
                                        <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1/7/11</th>
                                        <td>Kelvin Mbugua</td>
                                        <td>0757414722/0753414721</td>
                                        <td> MALE</td>
                                        <td>E456</td>
                                        <td> <button type="button" class="btn text-danger">REMOVE</button>
                                        </td>
                                </tr>
                                <tr>
                                <th scope="row">2/7/11</th>
                                <td>Jacob Wesonga</td>
                                <td>0758322543/01573798977</td>
                                <td>MALE</td>
                                <td>E537</td>
                                <td> <button type="button" class="btn text-danger">REMOVE</button>

                                </tr>
                                <tr>
                                        <th scope="row">3/7/11</th>
                                <td>Larry Madowo</td>
                                <td>0758322543/01573798977</td>
                                <td>FEMALE</td>
                                <td>F10</td>
                                <td> <button type="button" class="btn text-danger">REMOVE</button>

                                    </tr>
                                </tbody>
                </table>
    

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