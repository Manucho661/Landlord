<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Icons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- <link href="index.css"  rel="stylesheet">  -->
   <link rel="stylesheet" href="main.css">
 
</head>
<body>
 <?php include 'topbar.php'?>
 
<?php include 'sidebar.php'?>


<div class="content">
<?php include 'MenuIcon.php'?>


 <div class="container py-5">
    

    <!-- Filter Section -->
    <div class="row mb-4">
      <div class="col-md-6">
        <input type="text" id="search" class="form-control" placeholder="Search items">
      </div>
      <div class="col-md-3">
        <select id="category" class="form-select">
          <option value="all">All Categories</option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="books">Books</option>
        </select>
      </div>

    <!-- Items Section -->
    <div class="row" id="items-container">
      <!-- Item Template -->
      <div class="col-md-3 item electronics">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">OCCUPANCY</h5>
            <p class="card-text">25</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 item clothing">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">TENANTS</h5>
            <p class="card-text">50</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 item books">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">VACANCY</h5>
            <p class="card-text">40</p>
          </div>
        </div>
      </div>
     
  
  <button class="btn btn-primary top-right small-button">ADD OCCUPANT</button>
      <div><br>
  <b><p>OCCUPANCY STATUS</p></b>
      </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Tenant Number</th>
        <th scope="col">Tenant</th>
        <th scope="col">Unit Numbers</th>
        <th scope="col">Occupied</th>
        <th scope="col">Vacant</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Status</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
        </div>
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
