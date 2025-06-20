<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Big Offers</title>
  <style>
    .product-section {
  padding: 40px;
  background-color: #fff;
}

.section-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.product-grid {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: space-between;
}

.product-card {
  flex: 0 1 23%;
  border: 1px solid #e0e0e0;
  border-radius: 10px;
  padding: 15px;
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

/* 🔻 RESPONSIVE: Two cards per row on smaller screens */
@media (max-width: 768px) {
  .product-card {
    flex: 0 1 48%;
  }
}

/* 🔻 One card per row on extra small screens */
@media (max-width: 480px) {
  .product-card {
    flex: 0 1 100%;
  }
}
  </style>





  </head>
<body>

  <?php include 'header.php'; ?>


  <!-------------------------------------------------------------- big offers ----------------------------------------------- -->


<section class="product-section">
  
  <div class="product-grid">
    <!-- Product Card 1 -->
    <div class="product-card">
      <img src="images/lavender.jpg" alt="Pulcher Lavender Car Perfume">
      <div class="rating">
        <span class="stars">⭐ 4.5</span>
        <span class="reviews">(18,851)</span>
      </div>
      <h3 class="product-title">Pulcher Lavender Car Perfume</h3>
      <p class="product-description">Hanging Perfume for Car in Glass Bottle with Wooden Diffuser Lid</p>
      <p class="pack-info">(10ml, Pack of 1)</p>
      <div class="price">
        <span class="current-price">₹ 472.00</span>
        <span class="original-price">₹ 525.00</span>
        <span class="discount">(10% off)</span>
      </div>
      <button class="add-to-cart">Add to cart</button>
    </div>


    <div class="product-card">
      <img src="images/musk.jpg" alt="Pulcher Musk Car Perfume">
      <div class="rating">
        <span class="stars">⭐ 4.5</span>
        <span class="reviews">(18,851)</span>
      </div>
      <h3 class="product-title">Pulcher Musk Car Perfume</h3>
      <p class="product-description">Hanging Perfume for Car in Glass Bottle with Wooden Diffuser Lid</p>
      <p class="pack-info">(10ml, Pack of 1)</p>
      <div class="price">
        <span class="current-price">₹ 472.00</span>
        <span class="original-price">₹ 525.00</span>
        <span class="discount">(10% off)</span>
      </div>
      <button class="add-to-cart">Add to cart</button>
    </div>

    
    <div class="product-card">
      <img src="images/rose.jpg" alt="Pulcher Rose Car Perfume">
      <div class="rating">
        <span class="stars">⭐ 4.5</span>
        <span class="reviews">(18,851)</span>
      </div>
      <h3 class="product-title">Pulcher Rose Car Perfume</h3>
      <p class="product-description">Hanging Perfume for Car in Glass Bottle with Wooden Diffuser Lid</p>
      <p class="pack-info">(10ml, Pack of 1)</p>
      <div class="price">
        <span class="current-price">₹ 472.00</span>
        <span class="original-price">₹ 525.00</span>
        <span class="discount">(10% off)</span>
      </div>
      <button class="add-to-cart">Add to cart</button>
    </div>

    
    <div class="product-card">
      <img src="images/aqua.jpg" alt="Pulcher Aqua Car Perfume">
      <div class="rating">
        <span class="stars">⭐ 4.5</span>
        <span class="reviews">(18,851)</span>
      </div>
      <h3 class="product-title">Pulcher Aqua Car Perfume</h3>
      <p class="product-description">Hanging Perfume for Car in Glass Bottle with Wooden Diffuser Lid</p>
      <p class="pack-info">(10ml, Pack of 1)</p>
      <div class="price">
        <span class="current-price">₹ 472.00</span>
        <span class="original-price">₹ 525.00</span>
        <span class="discount">(10% off)</span>
      </div>
      <button class="add-to-cart">Add to cart</button>
    </div>
  </div>
</section>






 <?php include 'footer.php'; ?>

</body>
</html>

