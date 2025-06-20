<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Orders</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      margin: 0;
    }
    .breadcrumb {
      font-size: 12px;
      color: #777;
      margin-bottom: 10px;
      padding: 20px;
    }
    .orders-container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin: 0 20px 20px 20px;
    }
    .order-header {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      font-size: 14px;
      margin-bottom: 10px;
      color: #333;
      gap: 10px;
    }
    .order-body {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 15px;
    }
    .order-body img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 8px;
      background: #eee;
    }
    .order-info {
      flex-grow: 1;
    }
    .status-badge {
      display: inline-block;
      background: #e0e0e0;
      padding: 2px 8px;
      font-size: 12px;
      border-radius: 8px;
      margin-left: 10px;
    }
    .delivery-date {
      color: green;
      margin-top: 5px;
      font-size: 14px;
    }
    .rating-section {
      margin-top: 20px;
      padding-top: 10px;
      border-top: 1px solid #ddd;
      text-align: center;
    }
    .stars {
      margin-top: 10px;
    }
    .stars i {
      color: #ccc;
      font-size: 20px;
      margin: 0 2px;
      cursor: pointer;
    }
    .stars i.active {
      color: gold;
    }
    .load-more {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background: #f1ebe7;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
    }
    .contact-section {
      text-align: center;
      margin-top: 30px;
    }
    .contact-section h4 {
      margin-bottom: 10px;
    }
    .contact-btn {
      padding: 10px 20px;
      background: #f1ebe7;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .payment-icons {
      margin-top: 30px;
      text-align: center;
    }
    .payment-icons img {
      margin: 5px;
      height: 30px;
      vertical-align: middle;
    }
    .payment-note {
      font-weight: bold;
      margin-top: 15px;
    }

    /* Filter Box Styling */
    .filter-container {
      background: #fff;
      padding: 20px;
      margin: 20px 0;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .filter-section {
      margin-bottom: 20px;
    }
    .filter-section h4 {
      margin-bottom: 10px;
    }
    .filter-buttons {
      display: flex;
      justify-content: space-between;
    }
    .reset-btn, .apply-btn {
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .reset-btn {
      background: #eee;
    }
    .apply-btn {
      background: grey;
      color: white;
    }
    .filter-toggle-btn {
      padding: 5px 10px;
      background-color: #eee;
      border: none;
      border-radius: 5px;
      font-size: 12px;
      margin-left: 10px;
      cursor: pointer;
    }
    .filter-toggle-btn:hover {
      background-color: #ddd;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .order-header, .order-body {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="breadcrumb">
  Home > My Account > Your Orders
</div>

<div class="orders-container">
  <div class="order-header">
    <div>Order placed on <strong>Mar 6, 2025</strong></div>
    <div>Total Price: <strong>₹472.00</strong></div>
    <div>Ship To: <strong>Reshma</strong></div>
    <div>
      Order ID: 123456789 | <a href="orderdetails.php">Order Details</a>
      <button type="button" class="filter-toggle-btn" onclick="toggleFilter()">Filter</button>
    </div>
  </div>

  <!-- Filter Box -->
  <div id="filterBox" class="filter-container" style="display: none;">
    <h2>Filter</h2>
    <hr>
    <div class="filter-section">
      <h4>FILTER BY ORDER STATUS</h4>
      <label><input type="radio" name="status" checked> All</label><br>
      <label><input type="radio" name="status"> Shipped</label><br>
      <label><input type="radio" name="status"> Delivered</label><br>
      <label><input type="radio" name="status"> Cancelled</label>
    </div>
    <div class="filter-section">
      <h4>FILTER BY ORDER DATE</h4>
      <label><input type="radio" name="date" checked> Anytime</label><br>
      <label><input type="radio" name="date"> Last 30 days</label><br>
      <label><input type="radio" name="date"> Last 6 Months</label><br>
      <label><input type="radio" name="date"> Last Year</label>
    </div>
    <div class="filter-buttons">
      <button class="reset-btn">Reset</button>
      <button class="apply-btn">Apply</button>
    </div>
  </div>

  <div class="order-body">
    <img src="images/aqua.jpg" alt="Product Image">
    <div class="order-info">
      <div><strong>1 Item</strong> <span class="status-badge">Processing</span></div>
      <div class="delivery-date">Delivery Expected by Mar 13, 2025</div>
    </div>
  </div>

  <div class="rating-section">
    <div>Share Shopping Experience</div>
    <div class="stars">
      <i class="star">&#9733;</i>
      <i class="star">&#9733;</i>
      <i class="star">&#9733;</i>
      <i class="star">&#9733;</i>
      <i class="star">&#9733;</i>
    </div>
  </div>
</div>

<button class="load-more">Load More</button>

<div class="contact-section">
  <h4>Have Queries or Concerns?</h4>
  <a href="contactus.php" class="contact-btn-link">
    <button class="contact-btn">Contact Us</button>
  </a>
</div>

<div class="payment-icons">
  <h4>Pay Using</h4>
  <img src="images/upi.jpg" alt="UPI" width="80">
  <img src="images/PhonePe.png" alt="PhonePe" width="80">
  <img src="images/paytm.png" alt="Paytm" width="80">
  <img src="images/Freecharge.png" alt="Freecharge" width="50">
  <img src="images/mastercard.png" alt="Mastercard" width="80">
  <img src="images/visa.png" alt="Visa" width="80">
  <img src="images/amex.png" alt="Amex" width="80">
  <img src="images/rupay.png" alt="RuPay" width="80">
  <img src="images/netbanking.png" alt="Net Banking" width="80">

  <div class="payment-note">
    100% Payment Protection & Easy Return Policy
  </div>
</div>
<br>
<script>
  // Star rating functionality
  const stars = document.querySelectorAll('.star');
  stars.forEach((star, index) => {
    star.addEventListener('click', () => {
      stars.forEach((s, i) => {
        s.classList.toggle('active', i <= index);
      });
    });
  });

  // Filter box toggle
  function toggleFilter() {
    const filterBox = document.getElementById('filterBox');
    if (filterBox.style.display === "none" || filterBox.style.display === "") {
      filterBox.style.display = "block";
    } else {
      filterBox.style.display = "none";
    }
  }

  // Reset filter
  document.querySelector('.reset-btn').addEventListener('click', () => {
    document.querySelectorAll('input[name="status"]').forEach((radio, index) => {
      radio.checked = index === 0;
    });
    document.querySelectorAll('input[name="date"]').forEach((radio, index) => {
      radio.checked = index === 0;
    });
  });

  // Apply filter
  document.querySelector('.apply-btn').addEventListener('click', () => {
    const selectedStatus = document.querySelector('input[name="status"]:checked').parentElement.textContent.trim();
    const selectedDate = document.querySelector('input[name="date"]:checked').parentElement.textContent.trim();
    alert(`Filter Applied:\nStatus: ${selectedStatus}\nDate: ${selectedDate}`);
    toggleFilter();
  });
</script>

<?php include 'footer.php'; ?>

</body>
</html>
