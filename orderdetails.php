<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Order Details</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #fff;
      color: #333;
    }

    a {
      text-decoration: none;
    }

    .breadcrumb {
      font-size: 13px;
      color: #999;
      margin-bottom: 15px;
    }

    .main-title {
      font-weight: bold;
      font-size: 16px;
      margin-bottom: 15px;
    }

    .order-meta {
      font-size: 13px;
      margin-bottom: 15px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .order-meta span {
      color: #000;
    }

    .delivery-text {
      font-size: 13px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .order-status-checklist {
      display: flex;
      justify-content: space-between;
      margin: 30px 0;
      position: relative;
    }

    .status-item {
      position: relative;
      flex: 1;
      text-align: center;
      font-size: 13px;
    }

    .status-item .checkmark {
      display: inline-block;
      width: 22px;
      height: 22px;
      border-radius: 50%;
      line-height: 22px;
      font-weight: bold;
      font-size: 14px;
    }

    .status-item.completed .checkmark {
      background-color: #3B8D52;
      color: white;
    }

    .status-item.pending .checkmark {
      background-color: #eee;
      color: #999;
    }

    .status-item strong {
      display: block;
      margin-top: 6px;
    }

    .status-item small {
      font-size: 11px;
      color: #777;
    }

    .status-item:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 11px;
      right: -50%;
      width: 100%;
      height: 2px;
      background: #ccc;
      z-index: -1;
    }

    .status-item.completed:not(:last-child)::after {
      background: black;
    }

    .order-content {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    }

    .left-panel {
      flex: 1.5;
      min-width: 280px;
    }

    .right-panel {
      flex: 1;
      min-width: 280px;
    }

    .product {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
    }

    .product img {
      width: 90px;
      height: 90px;
      object-fit: cover;
      border: 1px solid #ccc;
    }

    .product-details {
      font-size: 13px;
    }

    .product-details .name {
      margin-bottom: 6px;
    }

    .product-details .price {
      font-size: 14px;
      color: #000;
    }

    .product-details .price del {
      color: #999;
      margin-left: 5px;
    }

    .product-details .discount {
      color: red;
      margin-left: 6px;
    }

    .qty {
      margin-top: 10px;
    }

    .feedback {
      margin-top: 25px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background: #f1f1f1;
      font-size: 13px;
    }

    .feedback .header {
      padding: 10px 15px;
      border-bottom: 1px solid #ccc;
      color: #666;
    }

    .feedback .content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 15px;
      flex-wrap: wrap;
      gap: 10px;
    }

    .stars {
      display: flex;
      gap: 5px;
      font-size: clamp(16px, 2vw, 24px);
      color: #ccc;
      cursor: pointer;
      user-select: none;
    }

    .stars span {
      transition: color 0.2s;
    }

    .stars span.selected {
      color: #f4c430;
    }

    .feedback button {
      background: #000;
      color: #fff;
      border: none;
      padding: 6px 12px;
      font-size: 12px;
      cursor: pointer;
      border-radius: 3px;
    }

    .rating-output {
      padding: 10px 15px;
      font-size: 13px;
      color: #333;
    }

    .shipping-address {
      margin-top: 25px;
      font-size: 13px;
      line-height: 1.5;
    }

    .price-summary {
      font-size: 13px;
      border: 1px solid #eee;
      padding: 15px;
    }

    .price-summary .row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .price-summary .total {
      border-top: 1px solid #ccc;
      padding-top: 10px;
      margin-top: 10px;
      font-weight: bold;
      font-size: 14px;
    }

    .summary-note {
      background: #F1F1F1;
      font-size: 12px;
      padding: 6px;
      margin-top: 10px;
      color: #333;
      text-align: center;
      border: 1px solid #ddd;
    }

    .contact-box {
      text-align: center;
      margin-top: 20px;
    }

    .contact-box p {
      font-size: 13px;
      margin-bottom: 10px;
    }

    .contact-box button {
      padding: 7px 15px;
      background: #fff;
      border: 1px solid #000;
      font-size: 13px;
      cursor: pointer;
    }

    .promo {
      border: 1px solid #ccc;
      padding: 15px;
      margin-top: 20px;
      font-size: 13px;
      display: flex;
      gap: 10px;
      align-items: flex-start;
    }

    .promo .icon {
      font-size: 24px;
    }

    .promo button {
      margin-top: 10px;
      padding: 6px 12px;
      background: #F1F1F1;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .order-content {
        flex-direction: column;
      }

      .order-status-checklist {
        flex-direction: column;
        align-items: flex-start;
      }

      .status-item {
        text-align: left;
      }

      .status-item::after {
        display: none;
      }

      .feedback .content {
        flex-direction: column;
        align-items: flex-start;
      }

      .feedback button {
        padding: 6px 10px;
        font-size: 11px;
      }
    }

    @media (max-width: 480px) {
      .stars {
        font-size: 18px;
      }

      .feedback button {
        padding: 5px 10px;
        font-size: 10px;
      }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div style="padding: 20px;">

  <div class="breadcrumb">Home > My Account > Your Orders > Order Details</div>
  <div class="main-title">Order Details</div>

  <div class="order-meta">
    <div>Order Placed On: <span>Mar 7, 2025</span></div>
    <div>Order ID: <span>M91055430810</span></div>
  </div>

  <div class="delivery-text">Delivery Expected by Mar 13, 2025</div>

  <div class="order-status-checklist">
    <div class="status-item completed">
      <div class="checkmark">✔</div>
      <strong>Confirmed</strong>
      <small>Mar 7</small>
    </div>
    <div class="status-item completed">
      <div class="checkmark">✔</div>
      <strong>Shipped</strong>
      <small>Mar 9</small>
    </div>
    <div class="status-item pending">
      <div class="checkmark">○</div>
      <strong>Out For Delivery</strong>
      <small>—</small>
    </div>
    <div class="status-item pending">
      <div class="checkmark">○</div>
      <strong>Delivered</strong>
      <small>—</small>
    </div>
  </div>

  <div class="order-content">
    <div class="left-panel">
      <div class="product">
        <img src="images/aqua.jpg" alt="Pulcher Perfume">
        <div class="product-details">
          <div class="name">Pulcher Aqua Car Perfume - 10ml</div>
          <div class="price">₹472 <del>₹525</del> <span class="discount">(10% off)</span></div>
          <div class="qty">Qty: 1</div>
        </div>
      </div>

      <div class="feedback">
        <div class="header">How was your shopping experience?</div>
        <div class="content">
          <div class="stars" id="starRating">
            <span data-value="1">★</span>
            <span data-value="2">★</span>
            <span data-value="3">★</span>
            <span data-value="4">★</span>
            <span data-value="5">★</span>
          </div>
          <button onclick="submitRating()">Share Shopping Experience</button>
        </div>
        <div class="rating-output" id="ratingOutput"></div>
      </div>

      <div class="shipping-address">
        <strong>Shipped to</strong><br>
        Reshma Raut<br>
        Room no 45, Sector 6, Vashi<br>
        Mob: 9854712587
      </div>
    </div>

    <div class="right-panel">
      <div class="price-summary">
        <div class="row"><span>Item Total</span><span>₹525</span></div>
        <div class="row"><span>Item(s) Discounts</span><span>-53</span></div>
        <div class="row"><span>Shipping Charges</span><span>Free</span></div>
        <div class="row"><span>Payment Method</span><span>UPI</span></div>
        <div class="row total"><span>Total Order Price</span><span>₹472</span></div>
      </div>

      <div class="summary-note">Total savings of ₹53.00 on this order</div>

      <div class="contact-box">
        <p>Have Queries or Concerns?</p>
        <button onclick="window.location.href='contactus.php'">CONTACT US</button>
      </div>

      <div class="promo">
        <div class="icon">🎁</div>
        <div>
          <strong>Dear Reshma</strong><br>
          Unlock a surprise gift! Choose unbeatable discounts<br>
          and find the latest offers. Start saving on every purchase today!<br>
          <button onclick="window.location.href='bigoffers.php'">Unlock now</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  const stars = document.querySelectorAll('#starRating span');
  const output = document.getElementById('ratingOutput');
  let selectedRating = 0;

  stars.forEach(star => {
    star.addEventListener('click', () => {
      const value = parseInt(star.dataset.value);
      selectedRating = selectedRating === value ? 0 : value;
      updateStarColors();
    });
  });

  function updateStarColors() {
    stars.forEach(star => {
      const value = parseInt(star.dataset.value);
      star.classList.toggle('selected', value <= selectedRating);
    });
  }

  function submitRating() {
    if (selectedRating > 0) {
      output.textContent = `Thank you! You rated this ${selectedRating} out of 5.`;
    } else {
      output.textContent = 'Please select a rating before submitting.';
    }
  }
</script>

<?php include 'footer.php'; ?>

</body>
</html>
