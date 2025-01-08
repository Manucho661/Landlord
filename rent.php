<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Icons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
