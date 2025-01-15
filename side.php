<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="ind.css"> -->
</head>
<body>
    <!-- Sidebar -->
  <div id="sidebar"  class="sidebar d-flex flex-column">

<h2 class="text-center py-3">Sidebar</h2>
<a href="#dashboard" onclick="toggleItems()">
<i class="fas fa-plus-circle"></i> <!-- Add Icon -->
  Dashboard
</a>
<!-- Hidden items -->
<div id="items" class="hidden-items">
    <ul>
    <a href=""><li>Property</li></a>
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


</body>
</html>