<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .user-info {
      background: #fff;
      padding: 20px;
      border-bottom: 1px solid #ddd;
    }

    .user-info h2 {
      margin-bottom: 10px;
    }

    .user-info p {
      font-size: 14px;
      margin: 5px 0;
    }

    .edit-links {
      margin-top: 10px;
    }

    .edit-links a {
      margin-right: 20px;
      font-size: 14px;
      color: blue;
    }

    .actions {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      padding: 20px;
    }

    .action-button {
      flex: 1 1 150px;
      background: #f1ebe7;
      border: none;
      padding: 12px;
      border-radius: 10px;
      text-align: center;
      font-size: 14px;
      cursor: pointer;
    }

    .product-section {
      background: #fff;
      padding: 20px;
    }

    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product-card {
      flex: 1 1 calc(25% - 20px);
      background: #fff;
      border: 1px solid #eee;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .product-card img {
      width: 100%;
      border-radius: 8px;
    }

    .rating {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      margin-top: 10px;
    }

    .product-title {
      font-weight: bold;
      font-size: 14px;
      margin: 8px 0;
    }

    .product-description,
    .pack-info {
      font-size: 13px;
      color: #555;
    }

    .price {
      margin: 10px 0;
      font-size: 14px;
    }

    .current-price {
      font-weight: bold;
      margin-right: 5px;
    }

    .original-price {
      text-decoration: line-through;
      color: #888;
      margin-right: 5px;
    }

    .discount {
      color: red;
    }

    .add-to-cart {
      background: #000;
      color: #fff;
      border: none;
      padding: 8px 0;
      width: 100%;
      border-radius: 6px;
      cursor: pointer;
    }

    .support-section {
      text-align: center;
      margin: 40px 0 20px;
    }

    .contact-btn {
      background-color: black;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      margin-top: 10px;
    }

    .help-menu {
      background-color: #f1ebe7;
      padding: 20px;
      border-radius: 12px;
      max-width: 500px;
      margin: 0 auto 40px;
    }

    .help-item {
      display: flex;
      justify-content: space-between;
      padding: 12px 0;
      border-bottom: 1px solid #ddd;
      font-size: 14px;
    }

    .help-item:last-child {
      border-bottom: none;
    }

    .logout-btn {
      display: block;
      background: black;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      text-align: center;
      margin: 0 auto 50px;
      width: 140px;
      cursor: pointer;
    }

   /* Responsive Design */
@media (max-width: 1024px) {
  .product-card {
    flex: 1 1 calc(50% - 20px);
  }
}

@media (max-width: 600px) {
  .actions {
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 15px;
  }

  .action-button {
    width: calc(50% - 5px);
  }

  .product-card {
    flex: 1 1 100%;
  }

  .edit-links {
    margin-top: 15px;
  }

  .help-menu {
    margin: 20px 10px;
  }
}

  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="user-info">
  <h2>Welcome, User!</h2>
  <p>Email: user123@gmail.com</p>
  <p>Phone: +91 1234567894</p>
  <p>Gender: NOT_SPECIFIED</p>
  <p>DOB: aNaN/aNaN</p>
  <div class="edit-links">
    <a href="#">Edit ✎</a>
    <a href="#">Chat with us</a>
  </div>
</div>

<div class="actions">
  <a href="trackorder.php" class="action-button">🚚 Track Orders</a>
  <a href="yourorder.php" class="action-button">📦 Your Orders</a>
  <a href="address.php" class="action-button">📍 Address</a>
  <a href="refer.php" class="action-button">👥 Referrals</a>
  <a href="payment-modes.php" class="action-button">💳 Payment Modes</a>
</div>

<section class="product-section">
  <div class="product-grid">
    <!-- Repeatable product card -->
    <?php
      $products = [
        'Lavender' => 'images/lavender.jpg',
        'Musk' => 'images/musk.jpg',
        'Rose' => 'images/rose.jpg',
        'Aqua' => 'images/aqua.jpg'
      ];

      foreach ($products as $name => $image) {
    ?>
    <div class="product-card">
      <img src="<?= $image ?>" alt="Pulcher <?= $name ?> Car Perfume">
      <div class="rating">
        <span>⭐ 4.5</span>
        <span>(18,851)</span>
      </div>
      <div class="product-title">Pulcher <?= $name ?> Car Perfume</div>
      <div class="product-description">Hanging Perfume for Car in Glass Bottle with Wooden Diffuser Lid</div>
      <div class="pack-info">(10ml, Pack of 1)</div>
      <div class="price">
        <span class="current-price">₹ 472.00</span>
        <span class="original-price">₹ 525.00</span>
        <span class="discount">(10% off)</span>
      </div>
      <button class="add-to-cart">Add to cart</button>
    </div>
    <?php } ?>
  </div>  
</section>



<div class="support-section">
  <h3>Have Queries or Concerns?</h3>
  <br>
  <a href="contactus.php" class="contact-btn">Contact Us</a>
</div>

<div class="help-menu">
  <a href="refer.php" class="help-item"><span>👥 Referrals</span><span>➔</span></a>
  <a href="myaccount.php" class="help-item"><span>👤 My Account</span><span>➔</span></a>
  <a href="help.php" class="help-item"><span>❓ Help</span><span>➔</span></a>
  <a href="chat.php" class="help-item"><span>💬 Chat with us</span><span>➔</span></a>
</div>

<a href="logout.php" class="logout-btn">Log Out 🔒</a>

<?php include 'footer.php'; ?>

</body>
</html>
