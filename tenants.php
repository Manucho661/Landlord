<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Icons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Link to Font Awesome for icons -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <link href="index.css"  rel="stylesheet"> 
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
    .small-button {
      right: 2000px;
        padding: 5px 10px; /* Reduce padding */
        font-size: 12px;   /* Smaller text */
        width: auto;       /* Adjust width if necessary */
        height: auto;      /* Adjust height if necessary */
    }

  </style>
        

</head>

<body>
 <?php include 'topbar.php'?>
 
 <div id="sidebar"  class="sidebar d-flex flex-column">




<div class="content">



 <div class="container py-5">
    

    <!-- Filter Section -->
    <div class="filter-container">
        <label for="filter-input">Filter:</label>
        <input type="text" id="filter-input" placeholder="Search...">
      </div>
      
    <div class="row mb-4">
        <div class="col-md-5">
            <select id="category" class="form-select">
              <option value="all">All Properties</option>
              <option value="electronics">Electronics</option>
              <option value="clothing">Clothing</option>
              <option value="books">Books</option>
            </select>
          </div>

      <div class="col-md-5">
        <select id="category" class="form-select">
          <option value="all">All Properties</option>
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

    <button id="add-button" class="">
    <i class="fas fa-add">ADD LEASE</i> 
    </button>

    <a href="compose.html">
    <button id="compose-button" class="">
        <i class="fas fa-add">COMPOSE EMAIL</i> 
        </button> 
    </a>

      <b><p>TENANTS</p></b>
      </div>



      <button id="export-button" class="export-button">
        <i class="fas fa-file-export"> Export</i>
      </button>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">First Name</th>
        <th scope="col">Last  Name</th>
        <th scope="col">Unit Numbers</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Resident Status</th>
        
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
        <td>@mdo</td>
       
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>Otto</td>
        <td>@mdo</td>
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
  <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Enable Bootstrap tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
  </script>

  <script>
    document.getElementById('export-button').addEventListener('click', () => {
        // Define your data
        const data = [
          ['Name', 'Age', 'City'],  // Headers
          ['John Doe', 25, 'New York'],
          ['Jane Smith', 30, 'San Francisco'],
          ['Sam Brown', 22, 'Chicago']
        ];
      
        // Convert the data to a worksheet
        const worksheet = XLSX.utils.aoa_to_sheet(data);
      
        // Create a new workbook and append the worksheet
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
      
        // Write the workbook to a file and trigger download
        XLSX.writeFile(workbook, 'export.xlsx');
      });
      
  </script>



  <!-- Fetch Data from the Server -->
 <script>
    let fetchedData = []; // To store the data fetched from the server
    let filteredData = []; // To store filtered data

// Fetch data from the server
  async function fetchData() {
  try {
    const response = await fetch('https://your-api-endpoint.com/data');
    fetchedData = await response.json();
    filteredData = [...fetchedData]; // Initialize filtered data
    renderData(filteredData); // Display the data initially
  } catch (error) {
    console.error('Error fetching data:', error);
  }
}
fetchData();

  </script>

    <!-- Render Data in the UI -->
<script>
    function renderData(data) {
      const tableBody = document.getElementById('data-table-body');
      tableBody.innerHTML = ''; // Clear previous content
    
      data.forEach(item => {
        const row = `
          <tr>
            <td>${item.name}</td>
            <td>${item.age}</td>
            <td>${item.city}</td>
          </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
      });
    }
</script>

<!-- 4. Filter the Data -->
 <script>
    document.getElementById('filter-input').addEventListener('input', (event) => {
        const searchTerm = event.target.value.toLowerCase();
      
        filteredData = fetchedData.filter(item => 
          item.name.toLowerCase().includes(searchTerm) ||
          item.city.toLowerCase().includes(searchTerm) // Adjust fields to filter
        );
      
        renderData(filteredData); // Re-render the filtered data
      });
 </script>

 
  


</body>
</html>
