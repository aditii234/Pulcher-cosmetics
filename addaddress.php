<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add New Address</title>
  <style>
 body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    h2 {
      margin-bottom: 20px;
    }

    .address-form {
      max-width: 900px;
      margin: auto;
    }

    .form-row {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }

    .form-group {
      flex: 1;
      min-width: 250px;
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 14px;
      margin-bottom: 5px;
      color: #222;
    }

    input, select, textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
      width: 100%;
    }

    .full-width {
      width: 100%;
    }

    .address-types {
      display: flex;
      gap: 10px;
      margin: 15px 0;
    }

    .address-type-btn {
      border: 1px solid #ccc;
      padding: 8px 20px;
      border-radius: 5px;
      cursor: pointer;
      background: #f5f5f5;
    }

    .address-type-btn.active {
      background: #222;
      color: white;
      border-color: #222;
    }

    .checkbox-row {
      display: flex;
      align-items: center;
      margin: 15px 0;
    }

    .checkbox-row input {
      margin-right: 10px;
    }

    .btn-group {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }

    .btn-group button {
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .btn-add {
      background: #000;
      color: white;
    }

    .btn-cancel {
      background: #fff;
      color: black;
      border: 1px solid #ccc;
    }

    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

<br>
 <div class="address-form">
    <h2>Add New Address</h2>

    <form id="newAddressForm">
      <div class="form-row">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" name="firstName" required>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" name="lastName" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Email ID</label>
          <input type="email" name="email" required>
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" name="phone" pattern="[0-9]{10}" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Pin Code</label>
          <input type="text" name="pincode" required>
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" name="city" required>
        </div>
        <div class="form-group">
          <label>State</label>
          <input type="text" name="state" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group full-width">
          <label>Address</label>
          <input type="text" name="address" required>
        </div>
      </div>

      <label>Select the type of Address</label>
      <div class="address-types">
        <div class="address-type-btn" onclick="selectType(this)">Home</div>
        <div class="address-type-btn" onclick="selectType(this)">Office</div>
        <div class="address-type-btn" onclick="selectType(this)">Other</div>
      </div>
      <input type="hidden" name="addressType" id="addressType" value="">


      <div class="btn-group">
        <button type="submit" class="btn-add">Add Address</button>
        <button type="button" class="btn-cancel" onclick="window.location.href='afterlogin.php'">Cancel</button>
      </div>
    </form>
  </div>
<br>
  <script>
    function selectType(btn) {
      document.querySelectorAll('.address-type-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('addressType').value = btn.innerText;
    }

    document.getElementById('newAddressForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert("Address submitted successfully!");
      // You can add your API call or form handling logic here
    });


  function selectType(btn) {
    document.querySelectorAll('.address-type-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('addressType').value = btn.innerText;
  }

  document.getElementById('newAddressForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Form data collection
    const formData = new FormData(this);

    // Simulate sending data to backend (you can use fetch or post to PHP endpoint)
    console.log("Saving Address:", Object.fromEntries(formData));

    // Simulate a successful save then redirect
    alert("Address submitted successfully!");

    // Replace '/profile.php' with the actual page you want to redirect to
    window.location.href = "address.php";
  });


  </script>


<?php include 'footer.php'; ?>

</body>
</html>
