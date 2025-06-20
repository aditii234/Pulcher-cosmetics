<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Account</title>
  <style>


    .form-container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 30px;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .form-group {
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
    }

    input, select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }

    .full-row {
      flex: 1 1 100%;
    }

    .submit-button {
      margin-top: 25px;
      width: 100%;
      padding: 12px;
      background-color:  #f1ebe7;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .submit-button:hover {
      background-color: #bbb;
    }

    @media (max-width: 600px) {
      .form-group {
        flex: 1 1 100%;
      }
    }






 body {
      font-family: Arial, sans-serif;
      margin: 0;
      text-align: center;
    }
    .support-section {
      margin-bottom: 30px;
    }

    .support-section h3 {
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .support-section button {
      padding: 10px 20px;
      background: #f1ebe7;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .support-section button:hover {
      background: #bbb;
    }

    .divider {
      height: 1px;
      background: #eee;
      margin: 30px 0;
    }

    .payment-methods {
      margin-bottom: 20px;
    }

    .payment-methods h4 {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .icons-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin-bottom: 25px;
    }

    .icons-container img {
      height: 60px;
      padding: 8px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .guarantee-text {
      font-weight: bold;
      font-size: 17px;
      margin-bottom: 10px;
    }

    .secure-icon {
      width: 40px;
    }

    @media (max-width: 600px) {
      .icons-container img {
        height: 30px;
      }
    }

  </style>
</head>
<body>

  <?php include 'header.php'; ?>
<br>
<br>
<div class="form-container">
  <form id="profileForm">
    <div class="form-row">
      <div class="form-group">
        <label for="firstName">First Name *</label>
        <input type="text" id="firstName" name="firstName" required />
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" />
      </div>
    </div>
<br>
    <div class="form-row">
      <div class="form-group">
        <label for="dob">DOB</label>
        <input type="text" id="dob" name="dob" placeholder="DD-MM-YY" />
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option>Not specified</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>
    </div>
<br>
    <div class="form-row">
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="phone">Mobile Number *</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required />
      </div>
    </div>

    <button type="submit" class="submit-button">SAVE</button>
  </form>
</div>


<br>
<br>





<div class="support-section">
  <h3>Have Queries or Concerns?</h3>
  <a href="contactus.php">
    <button>CONTACT US</button>
  </a>
</div>


  <div class="divider"></div>

  <div class="payment-methods">
    <h4>Pay Using</h4>
    <div class="icons-container">
      <img src="images/upi.jpg" alt="UPI" width="80">
<img src="images/PhonePe.png" alt="PhonePe" width="80">
<img src="images/paytm.png" alt="paytm" width="80">
<img src="images/Freecharge.png" alt="Freecharge" width="50">
<img src="images/mastercard.png" alt="mastercard" width="80">
<img src="images/visa.png" alt="Visa" width="80">
<img src="images/amex.png" alt="Amex" width="80">
<img src="images/rupay.png" alt="RuPay" width="80">
<img src="images/netbanking.png" alt="Net Banking" width="80">
    </div>

    <div class="guarantee-text">
      100% Payment Protection & Easy Return Policy
    </div>
   <img src="images/securepayment.png" alt="secure payment" width="80"></div>
  </div>






<script>
  const profileForm = document.getElementById('profileForm');
  profileForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const fname = document.getElementById('firstName').value.trim();
    if (!fname) {
      alert("First Name is required.");
      return;
    }
    alert("Profile saved successfully!");
    // You can add actual save logic or API call here.
  });
</script>

<?php include 'footer.php'; ?>

</body>
</html>
