<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cart</title>
  <style>
  	 :root {
      --primary: #1e1e2f;
      --accent: #2ecc71;
      --bg-light: #f4f6fa;
      --bg-white: #ffffff;
      --text-dark: #333;
      --text-muted: #777;
      --highlight: #16a085;
      --shadow: 0 4px 20px rgba(0,0,0,0.08);
      --radius: 12px;
    }

   

    

    .container {
      max-width: 700px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }



    .delete-icon {
      cursor: pointer;
      font-size: 24px;
      color: var(--text-muted);
      transition: 0.3s;
    }

    .delete-icon:hover {
      color: var(--highlight);
    }

    main {
      flex: 1;
      padding: 24px;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .product {
      display: flex;
      background-color: var(--bg-white);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 20px;
      gap: 16px;
      align-items: center;
      transition: transform 0.3s ease;
    }

    .product:hover {
      transform: translateY(-2px);
    }

    .product img {
      width: 90px;
      height: 90px;
      object-fit: cover;
      border-radius: var(--radius);
    }

    .product-info {
      flex: 1;
    }

    .product-info h4 {
      font-size: 18px;
      margin-bottom: 6px;
    }

    .product-info p {
      font-size: 14px;
      color: var(--text-muted);
    }

    .offer {
      background-color: #e6f9ee;
      padding: 16px 20px;
      border-left: 5px solid var(--accent);
      border-radius: var(--radius);
      color: #2d3e50;
      font-size: 15px;
      line-height: 1.6;
    }

    .summary {
      background-color: var(--bg-white);
      padding: 20px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .summary h4 {
      font-size: 20px;
      margin-bottom: 16px;
    }

    .price-summary > div {
      display: flex;
      justify-content: space-between;
      padding: 6px 0;
      font-size: 15px;
    }

    .strikethrough {
      text-decoration: line-through;
      color: var(--text-muted);
    }

    .highlight {
      color: var(--accent);
      font-weight: bold;
    }

    .checkout {
      
      padding: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      
      flex-wrap: wrap;
      gap: 12px;
    }

    .checkout .total {
      font-size: 22px;
      font-weight: 600;
      color: var(--primary);
    }

    .checkout-btn {
      background-color: var(--primary);
      color: white;
      padding: 14px 28px;
      border-radius: var(--radius);
      font-size: 16px;
      font-weight: 600;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .checkout-btn:hover {
      background-color: #444;
    }

    a {
      color: var(--highlight);
    }

    a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      .product {
        flex-direction: column;
        text-align: center;
      }

      .product img {
        margin-bottom: 12px;
      }

      .checkout {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
      }

      .checkout-btn, .checkout .total {
        width: 100%;
      }
    }
 .cart {
      
      padding: 24px;
      font-size: 22px;
      font-weight: 700;
      display: flex;
      justify-content: space-between;
      align-items: center;
      
    }


  </style>
</head>
<body>

  <?php include 'header.php'; ?>
<br>
<div class="container">
    <div class="cart">
      <span>🛒 Cart</span>
      <a href="index.php" class="delete-icon">✖</a>
    </div>

    <main>
      <div class="product">
        <img src="images/aqua.jpg" alt="Pulcher Aqua Car Perfume" />
        <div class="product-info">
          <h4>Pulcher Aqua Car Perfume</h4>
          <p style="margin-top: 6px; font-size: 13px; color: #555;">
              100ml </p>
          <p>long-lasting aqua fragrance designed for a refreshing car interior.</p>
          <p>₹ 472.00</p>
          <p>Qty: 1</p>
        </div>
        <a href="https://example.com/remove-item" class="delete-icon">🗑</a>

      </div>


      <div class="offer">
        ✅ Shop for ₹472 to get a free product!
      </div>

      <div class="summary">
        <h4>Price Summary</h4>
        <div class="price-summary">
          <div><span>Order Total</span><span>₹ 472.00</span></div>
          <div><span>(-) Item Discount</span><span>₹ 53</span></div>
          <div><span>(+) Shipping Charge</span><span><span class="strikethrough">₹ 49</span> <span class="highlight">Free</span></span></div>
          <div style="font-weight: bold; margin-top: 12px;"><span>Grand Total</span><span>₹ 472.00</span></div>
        </div>
      </div>

      <div class="offer">
        🎁 Add any 3 products to avail 
        <a href="bigoffers.php" target="_blank">B2G1</a> offer<br>
        <small>💸 You are saving ₹ 102 on this order.</small>
      </div>
    </main>

    <div class="checkout">
      <span class="total"><span class="strikethrough">₹ 525</span> ₹ 472</span>
      <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>

    </div>
  </div>

<br>
  <script>
    function removeItem() {
      alert("Item removed from cart.");
    }
  </script>


<?php include 'footer.php'; ?>

</body>
</html>
