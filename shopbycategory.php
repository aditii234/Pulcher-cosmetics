<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop By Category</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #fff;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      padding: 20px;
      gap: 20px;
    }

    .sidebar {
      flex: 0 0 250px;
      background-color: #f4f0ec;
      padding: 20px;
      border-radius: 12px;
      box-sizing: border-box;
      height: fit-content;
    }

    .sidebar h3 {
      margin-top: 0;
      margin-bottom: 15px;
      font-size: 18px;
      font-weight: 600;
    }

    .filter-group {
      margin-bottom: 15px;
    }

    .filter-option {
      margin-bottom: 10px;
    }

    .products {
  flex: 1;
  display: flex;
  flex-wrap: wrap;
  gap: 20px; 
  justify-content: space-between;
}



    .product-card {
      flex: 0 1 23%;
      border: 1px solid #e0e0e0;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      background-color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .product-card img {
      width: 100%;
      border-radius: 10px;
    }

    .rating {
      display: flex;
      justify-content: space-between;
      width: 100%;
      font-size: 14px;
      margin-top: 10px;
      color: #333;
    }

    .stars {
      color: #f4b400;
    }

    .reviews {
      color: #333;
    }

    .product-title {
      font-weight: bold;
      font-size: 14px;
      margin-top: 10px;
      text-align: center;
    }

    .product-description,
    .pack-info {
      font-size: 13px;
      color: #555;
      text-align: center;
    }

    .price {
      margin-top: 10px;
      font-size: 14px;
      text-align: center;
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
      margin-top: 10px;
      background-color: #000;
      color: #fff;
      border: none;
      width: 100%;
      padding: 8px;
      cursor: pointer;
      border-radius: 5px;
    }

    .add-to-cart:hover {
      background-color: #333;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .product-card {
        flex: 0 1 48%;
      }
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
      }
      .products {
        justify-content: center;
      }
      .product-card {
        flex: 0 1 48%;
      }
    }

    @media (max-width: 480px) {
      .product-card {
        flex: 0 1 100%;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="container">
    <!-- Sidebar Filter -->
    <div class="sidebar">
      <h3>Car Perfume</h3>
      <div class="filter-group">
        <div class="filter-option">
          <input type="checkbox" id="lavender" checked onchange="filterProducts()"> 
          <label for="lavender">Pulcher Lavender Car Perfume</label>
        </div>
        <div class="filter-option">
          <input type="checkbox" id="musk" checked onchange="filterProducts()"> 
          <label for="musk">Pulcher Musk Car Perfume</label>
        </div>
        <div class="filter-option">
          <input type="checkbox" id="rose" checked onchange="filterProducts()"> 
          <label for="rose">Pulcher Rose Car Perfume</label>
        </div>
        <div class="filter-option">
          <input type="checkbox" id="aqua" checked onchange="filterProducts()"> 
          <label for="aqua">Pulcher Aqua Car Perfume</label>
        </div>
      </div>
    </div>

    <!-- Products Grid -->
    <div class="products" id="productGrid">
      <div class="product-card" data-type="lavender">
        <img src="images/lavender.jpg" alt="Lavender Perfume">
        <div class="rating">
          <span class="stars">⭐ 4.5</span>
          <span class="reviews">(18,851)</span>
        </div>
        <h3 class="product-title">Pulcher Lavender Car Perfume</h3>
        <p class="product-description">Soothing lavender aroma for your car.</p>
        <p class="pack-info">(10ml, Pack of 1)</p>
        <div class="price">
          <span class="current-price">₹ 472.00</span>
          <span class="original-price">₹ 525.00</span>
          <span class="discount">(10% off)</span>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <div class="product-card" data-type="musk">
        <img src="images/musk.jpg" alt="Musk Perfume">
        <div class="rating">
          <span class="stars">⭐ 4.7</span>
          <span class="reviews">(12,430)</span>
        </div>
        <h3 class="product-title">Pulcher Musk Car Perfume</h3>
        <p class="product-description">Musky fragrance with a bold finish.</p>
        <p class="pack-info">(10ml, Pack of 1)</p>
        <div class="price">
          <span class="current-price">₹ 460.00</span>
          <span class="original-price">₹ 510.00</span>
          <span class="discount">(9% off)</span>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <div class="product-card" data-type="rose">
        <img src="images/rose.jpg" alt="Rose Perfume">
        <div class="rating">
          <span class="stars">⭐ 4.6</span>
          <span class="reviews">(9,211)</span>
        </div>
        <h3 class="product-title">Pulcher Rose Car Perfume</h3>
        <p class="product-description">Fresh rose scent for floral lovers.</p>
        <p class="pack-info">(10ml, Pack of 1)</p>
        <div class="price">
          <span class="current-price">₹ 455.00</span>
          <span class="original-price">₹ 499.00</span>
          <span class="discount">(8% off)</span>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <div class="product-card" data-type="aqua">
        <img src="images/aqua.jpg" alt="Aqua Perfume">
        <div class="rating">
          <span class="stars">⭐ 4.8</span>
          <span class="reviews">(21,019)</span>
        </div>
        <h3 class="product-title">Pulcher Aqua Car Perfume</h3>
        <p class="product-description">Refreshing aquatic aroma for clean air.</p>
        <p class="pack-info">(10ml, Pack of 1)</p>
        <div class="price">
          <span class="current-price">₹ 480.00</span>
          <span class="original-price">₹ 540.00</span>
          <span class="discount">(11% off)</span>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
    </div>
  </div>

  <script>
    function filterProducts() {
      const checkboxes = ['lavender', 'musk', 'rose', 'aqua'];

      checkboxes.forEach(type => {
        const isChecked = document.getElementById(type).checked;
        const products = document.querySelectorAll(`.product-card[data-type="${type}"]`);
        products.forEach(product => {
          product.style.display = isChecked ? 'flex' : 'none';
        });
      });
    }

    window.onload = filterProducts;
  </script>




 <?php include 'footer.php'; ?>
</body>
</html>
