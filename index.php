<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
<body>
    
  <?php include 'topbar.php'?>

     <!-- Sidebar -->
  <div id="sidebar"  class="sidebar d-flex flex-column">

    <h2 class="text-center py-3">Sidebar</h2>
    <a href="index.php" onclick="toggleItems()">
    <i class="fas fa-plus-circle"></i> <!-- Add Icon -->
      Dashboard
   </a>
    <!-- Hidden items -->
  <div id="items" class="hidden-items">
        <ul>
            <a href=""><li>Property</li></a>
            <a href=""><li>Tenants</li></a>
            <a href=""><li>Rent Collection</li></a>
           <a><li>Item 1</li></a>
</ul>
  </div>
    <a href="#profile">Profile</a>
    <a href="#settings">
    <i class="fas fa-cogs"></i> <!-- Settings Icon -->
      Settings
    </a>
    <a href="#help">Help</a>
   
  </div>


      <div class="content" id="mainContent">

        <button id="toggleBtn" class="toggle-btn">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>

        <h2>Your Properties</h2>
        
        <div class="container-fluid text-start">
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

<script>

const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleBtn');
    const mainContent = document.getElementById('mainContent');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');  // Toggle the collapsed class

    // Adjust content's margin-left based on sidebar state
    if (sidebar.classList.contains('collapsed')) {
        mainContent.classList.remove('sidebar-expanded');
        mainContent.classList.add('sidebar-collapsed');
      } else {
        mainContent.classList.remove('sidebar-collapsed');
        mainContent.classList.add('sidebar-expanded');
      }


    });
</script>

<script>
        function toggleItems() {
            const items = document.getElementById('items');
            const button = document.getElementById('showButton');

            // Toggle visibility of items
            if (items.style.display === 'none' || items.style.display === '') {
                items.style.display = 'block';
                button.textContent = 'Hide Items'; // Change button text
            } else {
                items.style.display = 'none';
                button.textContent = 'Show Items'; // Revert button text
            }
        }
    </script>
<!-- Bootstrap JS (optional, for interactivity if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>