<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date Input Styled with Bootstrap</title>
  <!-- Link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for the date input */
    .form-select, .form-control {
      width: 250px; /* Adjust width */
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      background-color: #f8f9fa;
    }

    .form-select:focus, .form-control:focus {
      border-color: #007bff;
      background-color: #e6f0ff;
      box-shadow: none;
    }

    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form>
          <div class="mb-3">
            <label for="date" class="form-label">Select a Date:</label>
            <input type="date" id="date" class="form-control">
          </div>
          <div class="mb-3">
            <label for="amount" class="form-label">Amount:</label>
            <input type="text" id="amount" class="form-control">
          </div>
          <div class="mb-3">
            <label for="payment" class="form-label">Payment Method:</label>
            <!-- Select Dropdown -->
            <select id="options" class="form-select">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="payment" class="form-label">Received  From :</label>
            <!-- Select Dropdown -->
            <select id="options" class="form-select">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
              </select>
          </div>

          <div class="container mt-5">
            <h2>Attach a File</h2>
            <div class="file-input-wrapper">
                <label class="btn btn-primary">
                    Choose File
                    <input type="file" style="display:none;" />
                </label>
            </div>
        </div>
           <!-- Checkbox 2 -->
           <div class="form-check">
            <input class="form-check-input" type="checkbox" value="option2" id="option2">
            <label class="form-check-label" for="option2">
              Print Receipt
            </label>
          </div>
<button class="btn btn-primary">SAVE PAYMENT</button><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional for Bootstrap components like modals) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
