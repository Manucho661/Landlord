<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- <link rel="stylesheet" href="index.css">  -->
     <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="Property.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        a{
            text-decoration: none;
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
color:gray;

        }
        .summaryItemOne{
            font-family: 'Playfair Display', serif; /* Elegant for creative projects */
font-size: 25px;
font-weight: bold;

font-weight: 400; /* Lighter weight for a faint look */
letter-spacing: 1px; /* Slight spacing for an airy feel */
color: #00192D;

        }
        .custom-btn{
            background-color: #00192D;
    border-color: #00192D;
    color:  #FFC107; /* White background */
        }

        tr:hover {
      background-color: gray;
      cursor: pointer;
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
            <div class="col-3">
                <div class="page">
                    <b>TENANTS</b>     
                </div>
            </div>
            <div class="col-9 text-end">
                <div class="custom-button">

                <button class="rounded p-2" >Add New Tenant</button>
                </div>
 

            </div>

        </div>
        
        

        
        <div class="Tenant-section mt-5">

               

            <div class="row mt-3"> <!-- third row -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header " style="background-color: #00192D; color:#FFC107;">
                            <div class="card-title">
                                TENANTS &nbsp; 500 PERSONS
                            </div>

                        </div>

                        <div class="card-body">
                            <table id="tenants"  class="table table-striped table-bordered">
                                <thead>
                                    <tr  >
                                        <th scope="col">OCCUPIED</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PHONE</th>
                                            <th scope="col">TYPE</th>
                                            <th scope="col">Property</th>
                                            <th scope="col">UNIT</th>
                                            <th scope="col">R.HISTORY</th>
                                            <th scope="col">P.RECORDS</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="window.location.href='details.php'" >
                                        <th scope="row">1/7/11</th>
                                            <td>Kelvin Mbugua</td>
                                            <td>0757414722</td>
                                            <td> LEASE</td>
                                            <td> CROWN Z</td>
                                            <td>E456</td>
                                            <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
                                            <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
                                            <td> <button type="button" class="btn text-danger">REMOVE</button>
                                            </td>
                                    </tr>
                                    <tr onclick="window.location.href='details.php'">
                                    <th scope="row">2/7/11</th>
                                    <td>Jacob Wesonga</td>
                                    <td>0758322543</td>
                                    <td>REQULAR</td>
                                    <td>EBENEZER</td>
                                    <td>E537</td>
                                    <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
                                    <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
                                    <td> <button type="button" class="btn text-danger">REMOVE</button>

                                    </tr>
                                    <tr>
                                        <th scope="row">3/7/11</th>
                                    <td>Larry Madowo</td>
                                    <td>0758322543</td>
                                    <td>LEASE</td>
                                    <td>MANUCHO</td>
                                    <td>F10</td>
                                    <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
                                    <td><button class="btn btn-sm btn-outline custom-btn">View</button></td>
                                    <td> <button type="button" class="btn text-danger">REMOVE</button>

                                        </tr>
                                </tbody>
                            </table>
    


                        </div>

                        <div class="card-footer">
                            

                        <div class="row mb-3">
                            
                <div class="col-3 rounded">
                
                    <div class="card text-center h-100 " style="border:solid 1px  #FFC107; "  >
                        <div class="card-header">
                            <div class="card-title summaryItem ">EBENEZER
                          </div>
                        </div>
                        <div class="card-body">
                            
                                <p class="card-text fs-6">50 PERSONS </p>
                        </div>
                    </div> 


                </div>






                <div class="col-3 rounded"  >


                <div class="card text-center h-100 " style="border:solid 1px  #FFC107; "  >
                        <div class="card-header">
                            <div class="card-title summaryItem "> CROWN Z</div>

                        </div>
                        <div class="card-body">
                            
                                <p class="card-text fs-6">50 PERSONS </p>
                        </div>
                    </div> 
                
                </div>

                <div class="col-3 rounded" >
                <div class="card text-center h-100 " style="border:solid 1px  #FFC107; "  >
                        <div class="card-header">
                            <div class="card-title summaryItem "> WHITE HOUSE</div>

                        </div>
                        <div class="card-body">
                            
                                <p class="card-text fs-6">100 PERSONS </p>
                        </div>
                    </div> 
                </div>

                <div class="col-3 rounded"  >

                <div class="card text-center h-100 " style="border:solid 1px  #FFC107; "  >
                        <div class="card-header">
                            <div class="card-title summaryItem "> ORANGE</div>

                        </div>
                        <div class="card-body">
                            
                                <p class="card-text fs-6">80 PERSONS </p>
                        </div>
                    </div> 
                
                </div>

            </div>


                        </div>

                    </div>

                </div>
                
                

            </div>            
        </div>

        <div class="occupancy-summary mt-5">
            
        

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
    
    

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    
<script src="main.js"></script>

<script>
    $(document).ready(function () {
          $('#tenants').DataTable();
      });
</script>


</body>
</html>