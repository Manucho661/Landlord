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

    .statement{
        background-color: #FFC107;
        color: #00192D ;

        }

        .profile-card {
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* padding: 20px; */
      
      margin: 30px auto;
    }
    .profile-picture {
      border-radius: 10px;
      width: 100%;
      height: auto;
      object-fit: cover;
      border: 4px solid #007bff;
    }
    .profile-details h2 {
      /* margin-bottom: 10px; */
      
    }
    .profile-details p {
      /* /margin: 5px 0; */
      color: #6c757d;
    }
    .profile_details{
        display: flex;
        
    }
    .profile_picture{
        margin-right: 4%;
    }
    .profile_info .one{
        color: #666;
        font-size: 14px;
        display: block;
        text-align: justify;   

    }
    .other_profile_details{
        display: block;
        color: #666;
        font-size: 14px;
        display: block;
        text-align: justify;
        
        
    }

    </style>
</head>
<body>
    <?php include 'topbar.php'?>

    <?php include 'sidebar.php'?>



<div id="content" >           
    <?php include 'MenuIcon.php'?>

                


    <div class="container-fluid" style="box-shadow: 0 2em 8em rgba(0, 0, 0, 0.2);">


        <div class="row bg-light ">
            <!-- Profile Picture -->

            <div class="card" style="border:transparent"> 
                        

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="profile_details">
                                        <div class="profile_picture">
                                         <img class="mt-3" src="Doe.jpg" alt="Profile Picture"  width="100">
                                        </div>
                                        <div class="profile_info">
                                    
                                            <!-- <h2>Jane Doe</h2> -->
                                             <h3 style=" border-bottom: 1px solid #ddd;" >John Doe</h3>
                                             <div class="profile_details one">
                                                <p><strong>Occupation &nbsp;|</strong> Teacher</p>
                                                <p><strong>DATE OF BIRTH &nbsp;|</strong> 5-23-1995</p>
                                                <p><strong>IDENTIFICATION NUMBER &nbsp; |</strong> 012020202</p>
                                            </div>
                                
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Profile Details -->

                                <div class="col-md-4" style=" border-left: 1px solid #ddd;">
                                
                                            <div class="other_profile_details">
                                                <p><strong>Origin &nbsp;|</strong> KENYAN</p>
                                                <p><strong>End Date &nbsp; |</strong> 6-7-2020</p>
                                                <p><strong>Start Date &nbsp;|</strong> 5-23-1995</p>
                                                
                                            </div>


                                </div>
                                <div class="col-md-2" style=" display:flex; flex-direction: column; justify-content:end;">
                                
                                            <div>
                                                <button type="button" class="btn btn-danger">Remove John</button>
                                            </div>


                                </div>
                            </div>
                                

                        </div>

           
        </div>
       
        
        

        
        <div class="">

               

            <div class="row mt-3"> <!-- third row -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header " style="background-color: #00192D; color:#FFC107;">
                            <div class="card-title" style="display: flex;  justify-content: space-between;">
                                <div>RENT/LEASE PAYMENT HISTORY (Monthly)</div>
                                <div><button class="btn btn-sm btn-outline custom-btn statement">GET Full STATEMENT</button></div>
                             
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="tenants"  class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">DATE PAID</th>
                                            <th scope="col">AMOUNT PAID</th>
                                            <th scope="col">ARREAS</th>
                                            <th scope="col">ACTION</th>
                                            
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1/7/11</th>
                                            <td>KSH 10,000</td>
                                            <td>KSH 10,000</td>
                                            <td> <button class="btn btn-sm btn-outline custom-btn">DOWNLOAD RECEIPT</button>   </td>
                                            
                                    </tr>
                                    <tr>
                                    <th scope="row">2/7/11</th>
                                    <td>KSH 20,0000</td>
                                    <td>KSH 0</td>
                                    <td>  <button class="btn btn-sm btn-outline custom-btn">DOWNLOAD RECEIPT</button>  </td>
                                    

                                    </tr>
                                    <tr>
                                        <th scope="row">3/7/11</th>
                                    <td>KSH 10000</td>
                                    <td>KSH 0</td>
                                    <td> <button class="btn btn-sm btn-outline custom-btn">DOWNLOAD RECEIPT</button> </td>
                                    
                                    

                                        </tr>
                                </tbody>
                            </table>
    


                        </div>

                        <div class="card-footer">
                            
                        </div>

            </div>

            <div class="row mt-3 ">
                <div class="col-md-12">
                    <div class="card"> 
                        <div class="card-header " style="background-color: #00192D; color:#FFC107;">
                                <div class="card-title" >
                                    
                                    RENT/LEASE AGREEMENT FILES
                                    
                                    
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">FIRST PARTY (YOU)</th>
                                                <th scope="col">SECOND PARTY (TENANT)</th>
                                                <th scope="col">DEPOSIT</th>
                                                <th scope="col">ACTION</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">EBENEZER</th>
                                                <td>JOHN DOE</td>
                                                <td>KSH 100,000</td>
                                                <td>   <span><button class="btn btn-sm btn-outline custom-btn">VIEW AGREEMENT</button></span> <span><button class="btn btn-sm btn-outline custom-btn">DOWNLOAD</button></span></td>
                                                
                                        </tr>
                                        <tr>
                                        
                                    
                                    </tbody>
                                </table>

                        </div>

                </div>


            </div>





                        </div>

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