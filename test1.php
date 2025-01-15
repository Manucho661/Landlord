<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Icons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="financial.css"  rel="stylesheet"> 
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
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #;
    }

    .income-details {
      display: none;
    }
    .custom-dropdown-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: ;
      color: BLACK;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s ease;
    }

    .custom-dropdown-header:hover {
      background-color: ;
    }

    .custom-dropdown-header .toggle-icon {
      font-weight: bold;
      font-size: 18px;
    }

    .custom-dropdown-content {
      display: none;
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 5px;
      overflow: hidden;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .custom-dropdown-content.active {
      display: block;
    }

    .custom-dropdown-content a {
      display: block;
      padding: 10px 15px;
      color: #333;
      text-decoration: none;
      border-bottom: 1px solid #ddd;
      transition: background-color 0.3s ease;
    }

    .custom-dropdown-content a:last-child {
      border-bottom: none;
    }

    .custom-dropdown-content a:hover {
      background-color: #f0f0f0;
    }

    .nested-dropdown-content {
      display: none;
      margin-top: 5px;
      background-color: #e9ecef;
      border-radius: 5px;
    }

    .nested-dropdown-content.active {
      display: block;
    }

    .nested-dropdown-content a {
      padding: 10px 20px;
      background-color: #f8f9fa;
      color: #333;
      text-decoration: none;
    }

    .nested-dropdown-content a:hover {
      background-color: #f0f0f0;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f9;
    }
  </style>
</head>
<body>
    <?php include 'topbar.php'?>

    <?php include 'sidebar.php'?>

    

<div id="content">           
    <?php include 'MenuIcon.php'?>

    
<div class="content">
    <div class="container py-5">
        <p>PROPERTY</p>
    <!-- Filter Section -->
    <div class="row mb-4">

    <div class="col-md-6">
        <select id="category" class="form-select">
          <option value="all">All </option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="books">Books</option>
        </select>
      </div>

      <p>UNIT</p>
      <div class="col-md-6">
        <select id="category" class="form-select">
          <option value="all">All </option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="books">Books</option>
        </select>
      </div>

      <p>PERIOD</p>
      <div class="col-md-6">
        <select id="category" class="form-select">
          <option value="all">All </option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="books">Books</option>
        </select>
      </div>

      <div class="col-md-2">
        <input type="text" id="search" class="form-control" placeholder="Search items">
      </div> <br>

      <label>
    <input type="checkbox" class="round-checkbox" id="myCheckbox">
    <span class="round-checkbox-label"></span>
    CASH
      </label>
      <table>
    <tr>
      <th>PROPERTY</th>
      <th>November 2024</th>
      <th>November 2024</th>
      <th>December 2024</th>
      <th>January 1 to Date</th>
      <th>Total as of 1/10/2025</th>
    </tr>
   
    <tr>
      <td>
      <div class="custom-dropdown-container">
      <div class="custom-dropdown-header" id="dropdownHeader">
      <div class="custom-dropdown-content" id="dropdownContent">
      <div class="nested-dropdown-content" id="nestedDropdown1">
       <span>XYZ</span>
       <span class="toggle-icon" id="toggleIcon">
        +
       <tr>
      <td>INCOMING</td>
      <td>Other Income</td>
      <td>$0.00</td>
      <td>$50.00</td>
      <td>$128.00</td>
      <td>$128.00</td>
    </tr>
       </span>
    </tr>
   

     

    <script>
    const dropdownHeader = document.getElementById('dropdownHeader');
    const dropdownContent = document.getElementById('dropdownContent');
    const toggleIcon = document.getElementById('toggleIcon');

    const parentItems = document.querySelectorAll('.parent-item');
    const nestedDropdowns = document.querySelectorAll('.nested-dropdown-content');

    dropdownHeader.addEventListener('click', () => {
      dropdownContent.classList.toggle('active');

      if (dropdownContent.classList.contains('active')) {
        toggleIcon.textContent = '-';
      } else {
        toggleIcon.textContent = '+';
      }
    });

    parentItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        const nestedDropdown = nestedDropdowns[index];
        nestedDropdown.classList.toggle('active');
      });
    });
  </script>



</body>