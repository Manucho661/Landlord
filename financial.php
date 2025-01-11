<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Icons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="financial.css"  rel="stylesheet"> 
 <!-- <link rel="stylesheet" href="index.css">  -->
   <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include 'topbar.php'?>

<?php include 'sidebar.php'?>


<div id="content">
<?php include 'MenuIcon.php'?>


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
                <td><a href="https://example.com/150-main-ave" target="_blank">150 Main Ave (fourplex)</a></td>
                <td>$0.00</td>
                <td>$0.00</td>
                <td>$12,092.55</td>
                <td>$12,092.55</td>
            </tr>
            <tr>
                <td><a href="https://example.com/150-main-ave" target="_blank">150 Main Ave (fourplex)</a></td>
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

<script src="main.js"></script>
</body>
</html>
