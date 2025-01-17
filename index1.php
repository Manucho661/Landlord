<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>main.js</script>
    </head>

<body>



  <?php include 'topbar.php'?>

     <!-- Sidebar -->
  
     <?php include 'sidebar.php'?>


      <div id="content">
       
           <?php include 'MenuIcon.php'?>
            
            <h2 style="color:gray">Your Properties</h2>
        
      <div class="container-fluid text-start prop">
          <div class="row row-cols-2 bg-blue row-cols-lg-5 g-2 g-lg-3">
            <div class="col-lg-4">
              <a href="property.php">
              <img src="./images/first.png" alt="" width="100%" height="60% "></a>
              <b><p>
                JIBAMBE TOWERS <br>
                
              </p></b>
              <p> Lorem, ipsumumqbus ducimus modi. Sit, temporibus maiores a quibusdam qui quas impedit perspiciatis debitis!
              </p>
            </div>
            <div class="col-lg-4">
              
              <img src="./images/second.png" alt="" width="100%" height="60%" >
              <b><p>
                ENEZA<br>
              </b>
              <p>
                Lorem, ipsumumqbus ducimus modi. Sit, temporibus maiores a quibusdam qui quas impedit perspiciatis debitis!
              </p>
            </div>
            <div class="col-lg-4">
            
              <img src="./images/third.png" alt="" width="100%" height="60%">
              <p>
                ENEBY<br>
                Lorem, ipsumumqbus ducimus modi. Sit, temporibus maiores a quibusdam qui quas impedit perspiciatis debitis!
              </p>
            </div>
          </div>
          </div><br><br>

          <div class="container-fluid text-start">
            <div class="row row-cols-2 bg-blue row-cols-lg-5 g-2 g-lg-3">
              <div class="col-lg-4">
                <div class="p-3"></div>
                <img src="./images/first.png" alt="" width="100%" height="60%">
                <b><p cl>CROWN Z TOWERS</p></b>
                <p>Lorem ipsum dolor sit amet ci dolortatibus. Nam quibusdam similique adipisci quidem dicta cupiditate perspiciatis necessitatibus illum pariatur corrupti.</p>
              </div>
              <div class="col-lg-4">
                <div class="p-3"></div>
                <img src="./images/second.png" alt="" width="100%" height="60%" >
                <b><p>CRAYDEN</p></b>
                <p>Lorem ipsum dolor sit amet lorem que minus nisi tempora sint expedita ipsam, adipisci tempore, ipsum itaque cumque fuga incidunt vel. Corporis, similique?</p>
              </div>
              <div class="col-lg-4">
                <div class="p-3"></div>
                <img src="./images/third.png" alt="" width="100%" height="60%">
                <b><p>REDDY</p></b>
                <p>Lorem, ipsum dolor sit iumtates animi dolores molestias animi dolorem asperiores, ipsum tempore quisquam labore ut?</p>
              </div>
              


            </div>
          </div>

        </div>
        
      </div>
      

    
  </div>

    <script src="main.js"></script>
    <!-- Bootstrap JS (optional, for interactivity if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>