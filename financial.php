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
    body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .custom-dropdown-container {
      width: 300px;
    }

    .custom-dropdown-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #007bff;
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s ease;
    }

    .custom-dropdown-header:hover {
      background-color: #0056b3;
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

 <!-- Sidebar -->
 <div id="sidebar"  class="sidebar d-flex flex-column">

<h2 class="text-center py-3">JENGOPAY</h2>

<a href=""><i class="fa-solid fa-gauge">Dashboard</i><br><br>
</a>
<a href=""><i class="fas fa-home">Leasing</i></a><br>
<a href=""><i class="fas fa-wrench">Maintenance</i></a><br>
<a href=""><i class="fas fa-comment">Communication</i></a>
<a href="#settings"><i class="fas fa-cogs"></i> <!-- Settings Icon -->Settings</a>
<a href="#help">Help</a>

</div>


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
      </div> 

    <label>
    <input type="checkbox" class="round-checkbox" id="myCheckbox">
    <span class="round-checkbox-label"></span>
    CASH
    </label>
    <table>
        <thead>
            <tr>
                <th>Property or Company Account (Cash Basis)</th>
                <th>November 2024</th>
                <th>December 2024</th>
                <th>January 1 to Date</th>
                <th>Total as of 1/9/2025</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>

    <div class="custom-dropdown-container">
    <div class="custom-dropdown-header" id="dropdownHeader">
      <span>INCOME& EXPENSE</span>
      <span class="toggle-icon" id="toggleIcon">+</span>
    </div>
    <div class="custom-dropdown-content" id="dropdownContent">
      <a href="#" class="parent-item">INCOME</a>
      <div class="nested-dropdown-content" id="nestedDropdown1">
        <a href="#">OTHER INCOME</a>
        <a href="#">INCOME</a>
      </div>
      <a href="#" class="parent-item">EXPENSE</a>
      <div class="nested-dropdown-content" id="nestedDropdown2">
        <a href="#">Nested Item 1</a>
        <a href="#">Nested Item 2</a>
      </div>
      <a href="#" class="parent-item">Item 3</a>
      <div class="nested-dropdown-content" id="nestedDropdown3">
        <a href="#">Nested Item 1</a>
        <a href="#">Nested Item 2</a>
      </div>
    </div>
  </div>
            </td>
                <td>$0.00</td>
                <td>$0.00</td>
                <td>$12,092.55</td>
                <td>$12,092.55</td>
            </tr>
            <tr>
                <td>
    <div class="custom-dropdown-container">
    <div class="custom-dropdown-header" id="dropdownHeader">
      <span>INCOME& EXPENSE</span>
      <span class="toggle-icon" id="toggleIcon">+</span>
    </div>
    <div class="custom-dropdown-content" id="dropdownContent">
      <a href="#" class="parent-item">INCOME</a>
      <div class="nested-dropdown-content" id="nestedDropdown1">
        <a href="#">OTHER INCOME</a>
        <a href="#">INCOME</a>
      </div>
      <a href="#" class="parent-item">EXPENSE</a>
      <div class="nested-dropdown-content" id="nestedDropdown2">
        <a href="#">Nested Item 1</a>
        <a href="#">Nested Item 2</a>
      </div>
      <a href="#" class="parent-item">Item 3</a>
      <div class="nested-dropdown-content" id="nestedDropdown3">
        <a href="#">Nested Item 1</a>
        <a href="#">Nested Item 2</a>
      </div>
    </div>
  </div>
</td>
                <td>$2,200.00</td>
                <td>$2,200.00</td>
                <td>$1,495.95</td>
                <td>$2,250.00</td>
                <!-- <td>$5,945.95</td> -->
            </tr>
            <tr>
                <td><a href="https://example.com/150-main-ave" target="_blank">150 Main Ave (fourplex)</a></td>
                <td>$4,100.00</td>
                <td>$4,300.00</td>
                <td>$4,150.00</td>
                <td>$12,550.00</td>
            </tr>
            <tr>
                <td><a href="https://example.com/160-east-end-ave" target="_blank">160 East End Avenue (condo/townhouse)</a></td>
                <td>($192.44)</td>
                <td>$1,200.00</td>
                <td>$1,250.00</td>
                <td>$2,257.56</td>
            </tr>
            <tr>
                <td><a href="https://example.com/3-industrial-road" target="_blank">3 Industrial Road</a></td>
                <td>$875.00</td>
                <td>$101.80</td>
                <td>$925.00</td>
                <td>$1,901.80</td>
            </tr>
            <tr>
                <td><a href="https://example.com/74-grove-street" target="_blank">74 Grove Street (Single family home)</a></td>
                <td>$789.06</td>
                <td>$1,650.00</td>
                <td>$1,700.00</td>
                <td>$4,139.06</td>
            </tr>
            <tr>
                <td><a href="https://example.com/garden-row" target="_blank">Garden Row (multi-building complex)</a></td>
                <td>$7,925.00</td>
                <td>$7,950.00</td>
                <td>$7,950.00</td>
                <td>$23,825.00</td>
            </tr>
            <tr>
                <td><a href="https://example.com/lincoln-homeowners" target="_blank">Lincoln Homeowners Association</a></td>
                <td>$0.00</td>
                <td>$0.00</td>
                <td>$5,250.00</td>
                <td>$5,250.00</td>
            </tr>
            <tr>
                <td><a href="https://example.com/seaport-association" target="_blank">Seaport Association</a></td>
                <td>$2,624.53</td>
                <td>$2,750.00</td>
                <td>$2,800.00</td>
                <td>$8,174.53</td>
            </tr>
        </tbody>
    </table>

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
</html>
