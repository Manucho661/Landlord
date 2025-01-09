<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
     .footer {
            background-color: #343a40; /* Dark gray background */
            color: white; /* White text */
            padding: 20px 0;
        }
        .footer a {
            color: #f8f9fa; /* Light gray links */
            text-decoration: none;
        }
        .footer a:hover {
            color: #adb5bd; /* Slightly darker gray on hover */
        }
    .content{
        /* height: 90%; */
         /* margin-top: 10%;  */
         position: absolute;
         height: 90%;
         width: 80vw;
    }

    body {
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
    .full-width-container {
            padding: 15px; /* Add a small padding for better appearance */
        }
    
    .sidebar{
        height: 100%;
    }
    .container .row{
        height: 40%;
    }
    .content{
        /* margin-top: 10%; */
        position: absolute;
        height: 90%;
    }
    .content .propName{
        /* text-align: end; */
        /* width: 24%; */
    }
.content .propName p{
/* font-size: 25px; 
/* position: absolute; */
font-family: 'Playfair Display', serif; /* Elegant for creative projects */
    font-size: 25px;
    font-weight: bold;
    margin-top: 4px;
    font-weight: 400; /* Lighter weight for a faint look */
    letter-spacing: 1px; /* Slight spacing for an airy feel */
    color:grey;

}
.content .propName a{
    text-decoration: none;
    color:#FFC107;
}

.content hr{
    /* margin-top: 80px; */
    width: 80%;
}
ul{
    display: flex;
    list-style: none; /* Removes bullets */
    justify-content: space-between;

}
a{
    
    list-style: none; /* Removes bullets */
    text-decoration: none;
    color:#FFC107;

}


.propNav :hover{
    color: #00192D;
}
.propAddress{
/* margin-top: 10px; */
/* width: 80%; */
display:flex;
/* align-items: center; */
}
.details{
    display: flex;
}
.details img{
    border-radius: 10px;
}
button{
    background-color: #00192D;
    color:#FFC107;
    border:none;
    font-size: 12px;
    border-radius: 5px;
    width: 5vw;
    position: relative;
    bottom: 0;
}

.col-3 .EDIT{
/* position: relative; */
margin-top: 40px;

}

</style>

</head>
<body>
    <?php include 'topbar.php'?>

    <div id="sidebar"  class="sidebar">

        <h2 class="text-center py-3">Sidebar</h2>

        <a href="#dashboard">Dashboard</a>
        <a href="#profile">Profile</a>
        <a href="#settings">Settings</a>
        <a href="#help">Help</a>
        <a href="#logout">Logout</a>
    </div>



<div class="content" id="mainContent">
                <div class="propName">
                    <p>CROWN Z</p>
                </div>

    <div class="container-fluid">
        
        <!-- <div class="row" > <!-- first row -->
            <!-- <div class="col-lg-8">
                <div class="propName">
                    <p>CROWN Z</p>
                </div>
            </div>
        </div> --> 

       

        <div class="row propNav">
            
            <div class="col-md-2 fw-semibold"><a href="">Summary</a></div>
            <div class="col-md-2 fw-semibold"><a href="">Occupancy</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="">Units</a> </div>
            <div class="col-md-2 fw-semibold"> <a href=""> Rent</a>  </div>
            <div class="col-md-2 fw-semibold"> <a href="">Financials</a>  </div>
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

                <div class="col-6">
                    <div style="font-size: 1em;">
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

    <!-- Bootstrap




</body>
</html>