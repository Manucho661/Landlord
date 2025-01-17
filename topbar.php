<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <!-- Link to Font Awesome for icons -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <style>
    <style>
    /* General styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      height: 2000px; /* Added height to make scrolling effect visible */
    }

    /* Sticky Header */
    .header {
      position: sticky;
      top: 0; /* Make the header stick to the top */
      z-index: 1000; /* Ensure the header stays on top of other content */
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #3498db; /* Blue background */
      padding: 10px 20px;
      color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow for better visibility */
    }

    /* Profile image */
    .profile-img {
      width: 50px;
      height: 50px;
      border-radius: 50%; /* Makes the image round */
      object-fit: cover; /* Ensures the image covers the area without distortion */
      margin-right: 10px;
    }

    /* Profile info */
    .profile-info {
      display: flex;
      align-items: center;
    }

    .profile-info h2 {
      margin: 0;
      font-size: 18px;
    }

    .profile-info p {
      margin: 0;
      font-size: 14px;
      color: #ecf0f1;
    }

    /* Example logo or site title */
    .site-title {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
  </head>
<body>
<header class="header">
    <!-- Site title or logo -->
    <div class="site-title">My Website</div>

    <!-- Profile information -->
    <div class="profile-info">
      <img src="https://via.placeholder.com/50" alt="Profile Image" class="profile-img">
      <div>
        
      </div>
    </div>
  </header>
  
</body>
</html>
