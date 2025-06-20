<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Order Placed</title>
  <style>
  	 body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      color: #333;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 20px auto;
      background-color: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      border-radius: 12px;
      overflow: hidden;
    }

    .left, .right {
      padding: 20px;
    }

    .left {
      flex: 2;
      min-width: 300px;
      border-right: 1px solid #e0e0e0;
    }

    .right {
      flex: 1;
      min-width: 280px;
    }

    .logo {
      font-weight: bold;
      font-size: 28px;
      color: #1e1e2f;
      margin-bottom: 20px;
    }

    .map iframe {
      width: 100%;
      height: 200px;
      border: none;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .confirmed {
      background-color: #e8f5e9;
      padding: 15px;
      border-left: 5px solid #2ecc71;
      margin-bottom: 20px;
      border-radius: 8px;
    }

    .gift-box {
      border: 1px dashed #bbb;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 8px;
      background-color: #fcfcfc;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
    }

    .gift-box-content {
      flex: 1;
    }

    .unlock-btn {
      background-color: #3498db;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      white-space: nowrap;
    }

    .unlock-btn:hover {
      background-color: #2980b9;
    }

    .order-details {
      background-color: #f9f9f9;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    .details-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 15px;
    }

    .details-column {
      flex: 1 1 220px;
    }

    .continue-btn {
      display: inline-block;
      background-color: #2ecc71;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 6px;
      margin-top: 30px;
      transition: background 0.3s ease;
    }

    .continue-btn:hover {
      background-color: #27ae60;
    }

    .product {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 20px;
      background-color: #f4f4f4;
      padding: 12px;
      border-radius: 10px;
    }

    .product img {
      width: 70px;
      height: 70px;
      object-fit: cover;
      border-radius: 6px;
    }

    .summary div {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      font-size: 15px;
    }

    .summary strong {
      font-size: 16px;
    }

    .footer {
      background-color: #1e1e2f;
      color: #eee;
      padding: 40px 20px 20px;
      text-align: center;
      font-size: 14px;
    }

    .footer-columns {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .footer-columns div {
      min-width: 150px;
      margin: 10px 0;
    }

    .footer a {
      text-decoration: none;
      color: #2ecc71;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .left {
        border-right: none;
        border-bottom: 1px solid #e0e0e0;
      }

      .gift-box {
        flex-direction: column;
        align-items: flex-start;
      }

      .continue-btn {
        width: 100%;
        text-align: center;
      }
    }


  </style>
</head>
<body>

  <?php include 'header.php'; ?>

<div class="container">
  <div class="left">
    <div class="logo">PULCHER</div>
    <p><strong>Order</strong> 9C4765<br>Thank you, Reshma</p>
    <br>

    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.598104567139!2d73.06812507373542!3d19.037423253185345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c363449be891%3A0x8b09a1c860f3fb43!2sRCIIF%20(Rayat%20Centenary%20Innovation%20and%20Incubation%20Foundation)!5e0!3m2!1sen!2sin!4v1745305157785!5m2!1sen!2sin" 
        allowfullscreen="" loading="lazy">
      </iframe>
    </div>

    <div class="confirmed">
      <p><strong>Your order is confirmed</strong><br>
      You'll receive an email when your order is ready</p>
    </div>

    <div class="gift-box">
      <div class="gift-box-content">
        <p><strong>Dear Reshma,</strong><br>
        Unlock access to promo discounts and more. Click below and enjoy your exclusive today!</p>
      </div>
      <a href="https://example.com/unlock" class="unlock-btn" target="_blank">Unlock</a>
    </div>

    <div class="order-details">
      <h4>Order details</h4>
      <div class="details-grid">
        <div class="details-column">
          <strong>Contact information</strong><br>Reshma Pradeep
        </div>
        <div class="details-column">
          <strong>Payment method</strong><br>UPI
        </div>
        <div class="details-column">
          <strong>Shipping address</strong><br>Shop: D-92, Gala No 11, Station Road, Thane, Maharashtra, 400601
        </div>
        <div class="details-column">
          <strong>Billing address</strong><br>Same as shipping
        </div>
        <br>
        <div class="details-column">
          <strong>Shipping method</strong><br>Standard
        </div>
      </div>

      <div style="margin-top: 30px;">
        <a href="index.php" class="continue-btn">Continue Shopping</a>
      </div>
    </div>
  </div>

  <div class="right">
    <div class="product">
      <img src="images/aqua.jpg" alt="Pulcher Aqua Car Perfume">
      <div>
        <p>Pulcher Aqua Car Perfume</p>
        <p><strong>₹472.00</strong></p>
      </div>
    </div>

    <div class="summary">
      <div><span>Subtotal</span><span>₹472.00</span></div>
      <div><span>Shipping</span><span>Enter shipping address</span></div>
      <div><strong>Total</strong><strong>INR ₹472.00</strong></div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>

</body>
</html>
