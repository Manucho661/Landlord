<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Icons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="main.css"  rel="stylesheet">
  <style>
    .header {
      background-color: #f8f9fa; /* Light gray background */
      padding: 10px 20px;
    }
    .profile-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }
  </style>
</head>
<body>
<?php include 'topbar.php'?>

<?php include 'sidebar.php'?>


<div id="content" >           
    <?php include 'MenuIcon.php'?>



<!-- <button class="btn btn-primary top-right">ADD LEASE</button> -->

 <!-- <a href="payment.php"><button class="btn btn-primary jt-right">DUMMY </button> </a> -->

 <div class="container py-5">
    <h1 class="mb-4">Filter Items</h1>

    <!-- Filter Section -->
    <div class="row mb-4">
      <div class="col-md-6">
        <input type="text" id="search" class="form-control" placeholder="Search items">
      </div>
      <div class="col-md-4">
        <select id="category" class="form-select">
          <option value="all">All Categories</option>
          <option value="all">Tenants</option>
          <option value="electronics">Arrears</option>
          <option value="clothing">Units</option>
          <option value="books">Amount</option>
        </select>
      </div>
    </div>

    <!-- Items Section -->
    <div class="row" id="items-container">
      <!-- Item Template -->
      <div class="col-md-4 item electronics">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tenants</h5>
            <p class="card-text">Category: Electronics</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 item clothing">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Amount</h5>
            <p class="card-text">Category: Clothing</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 item books">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Units</h5>
            <p class="card-text">Category: Books</p>
          </div>
        </div>
      </div>
     <b><p>RENT COLLECTION</p></b> 
        
  <table class="table">
    <thead>
      <tr>  
        <th scope="col">Numbers</th>
        <th scope="col">Name</th>
       
        <th scope="col">Phone</th>
        <th scope="col">Arrears</th>
        <th scope="col">Unit</th>
        <th scope="col">Amount_Paid</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
       

      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>@mdo</td>
      
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
       
      </tr>
      <tr>
        <th scope="row">4</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
       
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>@mdo</td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
       
      </tr>
      
      <tr>
        <th scope="row">4</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
      
      </tr>
    </tbody>
  </table>

  </div>
      </div>
    </div>
  </div>

  
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const searchInput = document.getElementById("search");
      const categorySelect = document.getElementById("category");
      const items = document.querySelectorAll(".item");

      function filterItems() {
        const searchQuery = searchInput.value.toLowerCase();
        const selectedCategory = categorySelect.value;

        items.forEach(item => {
          const title = item.querySelector(".card-title").textContent.toLowerCase();
          const category = item.classList.contains(selectedCategory) || selectedCategory === "all";

          if (title.includes(searchQuery) && category) {
            item.classList.add("show");
          } else {
            item.classList.remove("show");
          }
        });
      }

      searchInput.addEventListener("input", filterItems);
      categorySelect.addEventListener("change", filterItems);

      filterItems(); // Initial display
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Enable Bootstrap tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
  </script>

<script src="main.js"></script>

</body>
</html>
