<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .container{
        height: 90%;
        
    }
    .container .row{
        height: 40%;
    }
    .content{
        margin-top: 10%;
        position: absolute;
        height: 90%;
    }
    .content .propName{
        /* text-align: end; */
        /* width: 24%; */
    }
.content .propName p{
/* font-size: 25px; */
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
.propNav{
         /* margin-top: 80px;  */
         width: 80%;

}
.propNav a{
    font-size: 12px;
   
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

    <div id="sidebar"  class="sidebar d-flex flex-column">

<h2 class="text-center py-3">Sidebar</h2>

<a href="#dashboard">Dashboard</a>
<a href="#profile">Profile</a>
<a href="#settings">Settings</a>
<a href="#help">Help</a>
<a href="#logout">Logout</a>
</div>



<div class="content" id="mainContent">
    <div class="container">

        <div class="row" > <!-- first row -->
            <div class="col-3">
                <div class="propName">
                    <p>CROWN Z</p>
                </div>
            </div>
        </div>

        <div class="row mt-5" >  <!-- second row -->
            <div class="propNav">
                <ul>
                    <li> <a class="fw-semibold" href="">Summary</a></li>
                    <li> <a class="fw-semibold" href="occup.php">Occupancy Status</a> </li>
                    <li> <a class="fw-semibold" href="">Units</a> </li>
                    <li> <a class="fw-semibold" href="rent.php">Rent Collection</a>  </li>
                    <li> <a class="fw-semibold" href="">Financials</a> </li>
                </ul>
            </div>
                    

        </div>

        <hr>

        <div class="row" style="height: 50%;"> <!-- third row -->
                <div class="col-4">

                    <div class="details">

                        <div>
                            <img src="./images/second.png" alt="" width="100%" height="100%"> 
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div style="font-size: 10px;">
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
            

            <!-- <div class="container my-5">
                <label for="fileInput" class="custom-file-label">
                <i class="bi bi-upload"></i> Change photo
                </label>
                <input type="file" id="fileInput" name="photo" accept="image/*">
                </div>
                </div>

                </div>
            
            </div> -->
        
        </div>

    </div>

</div>





</body>
</html>