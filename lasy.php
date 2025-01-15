<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leases Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .status-badge {
      padding: 5px 10px;
      font-size: 0.85rem;
      border-radius: 12px;
      color: white;
    }
    .status-active {
      background-color: #28a745; /* Green */
    }
    .status-warning {
      background-color: #ffc107; /* Yellow */
    }
    .status-expired {
      background-color: #dc3545; /* Red */
    }
    .toolbar button {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container my-4">
    <!-- Toolbar -->
    <div class="toolbar d-flex justify-content-between align-items-center mb-3">
      <div>
        <button class="btn btn-primary">Add Lease</button>
        <button class="btn btn-success">Receive Payment</button>
        <button class="btn btn-warning">Update Recurring Charges</button>
        <button class="btn btn-secondary">Enter Meter Reading</button>
        <button class="btn btn-dark">Enter Bulk Charges</button>
      </div>
      <div>
        <select class="form-select d-inline-block w-auto">
          <option>All Rentals</option>
          <option>Future</option>
          <option>Active</option>
          <option>Past</option>
        </select>
        <button class="btn btn-link">Add Filter Options</button>
        <button class="btn btn-link">Export</button>
      </div>
    </div>

    <!-- Table -->
    <table class="table table-bordered table-hover">
      <thead class="table-light">
        <tr>
          <th>Lease</th>
          <th>Status</th>
          <th>Type</th>
          <th>Days Remaining</th>
          <th>Rent</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>45 Elm St. - 00 | John Smith<br><small>87945678</small></td>
          <td><span class="status-badge status-active">Active</span></td>
          <td>At-will<br><small>1/1/2010</small></td>
          <td>--</td>
          <td>$800</td>
        </tr>
        <tr>
          <td>45 Elm St. - 02 | Bill Johnson<br><small>87945678</small></td>
          <td><span class="status-badge status-active">Active</span></td>
          <td>At-will<br><small>1/1/2010</small></td>
          <td>--</td>
          <td>$900</td>
        </tr>
        <tr>
          <td>81 Beacon St. - 201 | Jane Long<br><small>87945678</small></td>
          <td><span class="status-badge status-active">Active</span></td>
          <td>At-will<br><small>1/1/2010</small></td>
          <td><span class="status-badge status-warning">30 days</span></td>
          <td>$500</td>
        </tr>
        <tr>
          <td>32 Dorchester Ave. | Matt Geller<br><small>87945678</small></td>
          <td><span class="status-badge status-active">Active</span></td>
          <td>Fixed w/rollover<br><small>1/1/2010 - 10/31/2011</small></td>
          <td><span class="status-badge status-warning">90 days</span></td>
          <td>$3,000</td>
        </tr>
        <tr>
          <td>42 Summer St. - 225 | Amy Bennett<br><small>87945678</small></td>
          <td><span class="status-badge status-active">Active</span></td>
          <td>Fixed<br><small>9/1/2009 - 10/31/2011</small></td>
          <td><span class="status-badge status-warning">90 days</span></td>
          <td>$1,500</td>
        </tr>
        <tr>
          <td>42 Summer St. - 705 | Jay Paulsen<br><small>87945678</small></td>
          <td><span class="status-badge status-expired">Expired</span></td>
          <td>Fixed<br><small>9/1/2009 - 10/31/2011</small></td>
          <td>--</td>
          <td>$1,500</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
