<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Detail Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="Property.css">  -->
    <link rel="stylesheet" href="index.css">  
    <link rel="stylesheet" href="application.css">  
</head>
<body>
<?php include 'topbar.php'?> 
<?php include 'sidebar.php'?>

<div id="content">
<?php include 'MenuIcon.php'?>
</div>

<div class="card card-container">
  <div class="card-body">
    <h2>Application Detail Page</h2>

    <table>
        <tr><th colspan="2">Application Details - John Doe</th></tr>
        <tr><td colspan="2">Personal Info | Employment Info | Rental History</td></tr>

        <tr class="section"><td colspan="2"><spani>Credit Check:</span></td></tr>
        <tr><td>Credit Score:</td><td>750</td></tr>
        <tr><td>Detailed Credit Report:</td><td><a href="#">[View]</a></td></tr>

        <tr class="section"><td colspan="2"><spani>Background Check</span></td></tr>
        <tr><td>Criminal Record:</td><td>No/Yes</td></tr>

        <tr class="section"><td colspan="2"><spani>Rental History Verification</span></td></tr>
        <tr><td>Feedback from Previous Landlords:</td><td><a href="#">[View]</a></td></tr>

        <tr class="section"><td colspan="2"><spani>Employment Verification</span></td></tr>
        <tr><td>Employer Contacted:</td><td>Verified/Not Verified</td></tr>

        <tr class="section"><td colspan="2"><spani>Identity Verification</span></td></tr>
        <tr><td>ID Document:</td><td><a href="#">[View]</a></td></tr>

        <tr class="section"><td colspan="2"><spani>Scoring and Recommendations</span></td></tr>
        <tr><td>Score:</td><td>85/100</td></tr>
        <tr><td>Recommendation:</td><td>Approved/Not Approved</td></tr>

        <!-- <tr class="section"><td colspan="2">Actions</td></tr> -->
        <tr>
            <td colspan="2" class="actions">
                <button class="approve" onclick="takeAction('Approved')">Approve</button>
                <button class="reject" onclick="takeAction('Rejected')">Reject</button>
                <button class="info" onclick="takeAction('Request Info')">Request Info</button>
            </td>
        </tr>
    </table>

  </div>
</div>

<script>
    function takeAction(action) {
        alert("Application has been " + action + "!");
    }
</script>
<script src="main.js"></script>
</body>
</html>




