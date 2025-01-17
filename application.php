<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Detail Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css"> 
    <link rel="stylesheet" href="index.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        .actions button {
            margin: 5px;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            margin-right: 6rem;
            margin-left: 2.5rem;
        }

        .approve { background-color: green; color: white;border-radius:10px; }
        .reject { background-color: red; color: white; border-radius:10px;}
        .info { background-color: orange; color: white; border-radius:10px; }

        .actions button:hover {
            opacity: 0.8;
        }

        .card-container {
            margin: 20px auto;
            margin-left:18rem;
            margin-right: 1rem;
            max-width: 800px;
        }
        span {
    background-color: #FFC107;
    padding: 5px;
    border-radius:10px;
}
    </style>
</head>
<body>
<?php include 'topbar.php'?> 
<?php include 'sidebar.php'?> 
<div class="card card-container">
  <div class="card-body">
    <h2>Application Detail Page</h2>

    <table>
        <tr><th colspan="2">Application Details - John Doe</th></tr>
        <tr><td colspan="2">Personal Info | Employment Info | Rental History</td></tr>

        <tr class="section"><td colspan="2"><span>Credit Check:</span></td></tr>
        <tr><td>Credit Score:</td><td>750</td></tr>
        <tr><td>Detailed Credit Report:</td><td><a href="#">[View]</a></td></tr>

        <tr class="section"><td colspan="2"><span>Background Check</span></td></tr>
        <tr><td>Criminal Record:</td><td>No/Yes</td></tr>

        <tr class="section"><td colspan="2"><span>Rental History Verification</span></td></tr>
        <tr><td>Feedback from Previous Landlords:</td><td><a href="#">[View]</a></td></tr>

        <tr class="section"><td colspan="2"><span>Employment Verification</span></td></tr>
        <tr><td>Employer Contacted:</td><td>Verified/Not Verified</td></tr>

        <tr class="section"><td colspan="2"><span>Identity Verification</span></td></tr>
        <tr><td>ID Document:</td><td><a href="#">[View]</a></td></tr>

        <tr class="section"><td colspan="2"><span>Scoring and Recommendations</span></td></tr>
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
</body>
</html>
