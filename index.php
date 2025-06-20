<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pulcher - Home</title>
  <style>
  	.hero {
  width: 100%;
  overflow: hidden;
}

.hero-image {
  width: 100%;
  height: auto;
  display: block;
}

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















.features-section {
  background-color: #f3efec;
  padding: 40px 20px;
  text-align: center;
}

.features-heading {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 30px;
}

.features-boxes {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.feature-box {
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 25px;
  padding: 20px 10px;
  flex: 0 1 22%;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.feature-box img {
  width: 100px;
  height: 100px;
  margin-bottom: 15px;
}

.feature-box p {
  font-size: 20px;
  font-weight: 500;
  color: #000;
  line-height: 1.4;
}

/* 🔻 For tablets and mobile: 2 per row */
@media (max-width: 1024px) {
  .feature-box {
    flex: 0 1 45%;
  }
}

/* 🔻 Optional: single column only for very narrow screens */
@media (max-width: 480px) {
  .feature-box {
    flex: 0 1 45%; /* Still keep 2 per row even on mobile */
  }
}















.watch-shop-section {
  padding: 40px 20px;
}

.watch-title {
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 20px;
}

.watch-scroll {
  display: flex;
  overflow-x: auto;
  gap: 20px;
  scroll-snap-type: x mandatory;
  padding-bottom: 10px;
}

.watch-scroll::-webkit-scrollbar {
  height: 8px;
}
.watch-scroll::-webkit-scrollbar-thumb {
  background: black;
  border-radius: 10px;
}
.watch-scroll::-webkit-scrollbar-track {
  background: #f3efec;
  border-radius: 10px;
}

.watch-card {
  background-color: #f3efec;
  border-radius: 12px;
  flex: 0 0 280px;
  scroll-snap-align: start;
  padding: 12px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.watch-card video {
  width: 100%;
  aspect-ratio: 9 / 16;
  object-fit: cover;
  border-radius: 10px;
  background-color: #000;
}


.product-info {
  margin-top: 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  gap: 10px;
}

.product-info img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
}

.info-text {
  flex-grow: 1;
  font-size: 12px;
}

.info-text strong {
  display: block;
  font-size: 13px;
  font-weight: 600;
}

.price {
  font-size: 12px;
}

.old {
  text-decoration: line-through;
  color: gray;
  margin-left: 5px;
}

.discount {
  color: red;
  margin-left: 5px;
}

button {
  background-color: black;
  color: white;
  border: none;
  border-radius: 20px;
  padding: 5px 10px;
  font-size: 12px;
  cursor: pointer;
}




















.subscribe-section {
  
  padding: 60px 20px;
  display: flex;
  justify-content: center;
}

.subscribe-container {
  max-width: 1000px;
  width: 100%;
  text-align: center;
  background-color: #f3efec;
  padding: 40px 30px;
  border-radius: 30px; /* Rounded corners */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.03);
}

.subscribe-container h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.subscribe-container p {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.subscribe-input {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0;
  max-width: 600px;
  margin: 0 auto 20px;
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
}

.subscribe-input input {
  flex: 1;
  padding: 12px 20px;
  border: none;
  font-size: 16px;
  outline: none;
}

.subscribe-input button {
  background-color: #000;
  color: #fff;
  padding: 12px 20px;
  font-size: 14px;
  cursor: pointer;
  border: none;
}

.disclaimer {
  font-size: 14px;
  color: #222;
  max-width: 700px;
  margin: 0 auto 30px;
}

.disclaimer a {
  text-decoration: underline;
  color: #000;
  font-weight: 500;
}

.subscribe-container h3 {
  font-size: 24px;
  font-weight: bold;
}

/* Responsive */
@media (max-width: 600px) {
  .subscribe-container h2 {
    font-size: 24px;
  }

  .subscribe-container p,
  .disclaimer {
    font-size: 16px;
  }

  .subscribe-container h3 {
    font-size: 20px;
  }

  .subscribe-input {
    flex-direction: column;
    gap: 10px;
  }

  .subscribe-input input,
  .subscribe-input button {
    width: 100%;
    border-radius: 10px;
  }
}














.reviews-section {
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
  text-align: center;
}

.reviews-section h2 {
  font-size: 28px;
  margin-bottom: 30px;
}

.review-slider {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  gap: 20px;
  scroll-snap-type: x mandatory;
  padding-bottom: 20px;
}

.review-card {
  flex: 0 0 48%;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  display: flex;
  gap: 20px;
  align-items: center;
  scroll-snap-align: start;
  min-width: 300px;
}

.review-card img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
}

.review-content {
  text-align: left;
}

.review-content p {
  font-size: 16px;
  margin-bottom: 10px;
}

.review-author {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 500;
}

.stars {
  color: #ffc107;
  font-size: 18px;
}

/* Pagination Dots */
.dots {
  display: flex;
  justify-content: center;
  margin-top: 15px;
  gap: 8px;
}

.dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #ddd;
  transition: background-color 0.3s;
}

.dot.active {
  background-color: #333;
}

/* Responsive */
@media (max-width: 768px) {
  .review-card {
    flex: 0 0 90%;
  }

  .review-content p {
    font-size: 15px;
  }
}


  	</style>
</head>
<body>

  <?php include 'header.php'; ?>

  
  <section class="hero">
    <img src="images/hero.jpg" alt="Pulcher Hero Banner" class="hero-image" />
  </section>





<!-------------------------------------------------------------- best seller ----------------------------------------------- -->


<section class="product-section">
  <h2 class="section-title">Best Sellers</h2>
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




<!-------------------------------------------------------------- car perfumes ----------------------------------------------- -->

<section class="product-section">
  <h2 class="section-title">Car Perfumes</h2>
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




<!-------------------------------------------------------------- Big offers ----------------------------------------------- -->

<section class="product-section">
  <h2 class="section-title">Big Offers</h2>
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







<section class="features-section">
  <h2 class="features-heading">Drive Fresh, Stay Fresh – Perfume Your Ride with Every Mile</h2>
  <div class="features-boxes">
    <div class="feature-box">
      <img src="images/perfume.jpg" alt="Made with natural oils" />
      <p>Made with<br>natural<br>essentials oils</p>
    </div>
    <div class="feature-box">
      <img src="images/perfume.jpg" alt="Unique Fragrances" />
      <p>Unique<br>Fragrances</p>
    </div>
    <div class="feature-box">
      <img src="images/perfume.jpg" alt="Long lasting" />
      <p>Long<br>lasting</p>
    </div>
    <div class="feature-box">
      <img src="images/perfume.jpg" alt="Distinctive Scent" />
      <p>Distinctive<br>Scent</p>
    </div>
  </div>
</section>











<section class="watch-shop-section">
  <h2 class="watch-title">Watch & Shop</h2>
  <div class="watch-scroll">
    <!-- Card 1 -->
    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>


    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>


    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>


    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>


    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>



    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>



    <div class="watch-card">
      <video controls muted>
        <source src="video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="product-info">
        <img src="images/rose.jpg" alt="Product" />
        <div class="info-text">
          <strong>Pulcher Rose Car Perfume</strong>
          <div class="price">₹ 472.00 <span class="old">₹ 525.00</span> <span class="discount">(10% off)</span></div>
        </div>
        <button>Add to cart</button>
      </div>
    </div>

    
  </div>
</section>













<section class="subscribe-section">
  <div class="subscribe-container">
    <h2>Join our Pulcher Squad</h2>
    <p>
      For exclusive skincare tips, early access to new launches, insider deals, beauty
      secrets, expert advice, and personalized recommendations.
    </p>

    <div class="subscribe-input">
      <input type="email" placeholder="Enter Your Email ID" />
      <button>Subscribe</button>
    </div>

    <p class="disclaimer">
      By continuing, I agree to receiving marketing communications (news, updates, offers) and online advertising tailored to your interests from trusted
      <a href="#">Unilever Brands</a> via email, SMS, WhatsApp, etc.
      <a href="#">Privacy Notice</a>.
    </p>

    <h3>Subscribe for free and get 10% OFF your first order!</h3>
  </div>
</section>

















<section class="reviews-section">
  <h2>Reviews</h2>
  <div class="review-slider">
    <div class="review-card">
      <img src="images/perfume.jpg" alt="Reviewer 1">
      <div class="review-content">
        <p>"I can't believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best.”</p>
        <div class="review-author">
          <span>-Isha Patil</span>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div>

    <div class="review-card">
      <img src="images/perfume.jpg" alt="Reviewer 2">
      <div class="review-content">
        <p>"I can't believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best.”</p>
        <div class="review-author">
          <span>-Isha Patil</span>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div>
    


    <div class="review-card">
      <img src="images/perfume.jpg" alt="Reviewer 2">
      <div class="review-content">
        <p>"I can't believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best.”</p>
        <div class="review-author">
          <span>-Isha Patil</span>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div>


    <div class="review-card">
      <img src="images/perfume.jpg" alt="Reviewer 2">
      <div class="review-content">
        <p>"I can't believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best.”</p>
        <div class="review-author">
          <span>-Isha Patil</span>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div>


    <div class="review-card">
      <img src="images/perfume.jpg" alt="Reviewer 2">
      <div class="review-content">
        <p>"I can't believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best.”</p>
        <div class="review-author">
          <span>-Isha Patil</span>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div>



    <div class="review-card">
      <img src="images/perfume.jpg" alt="Reviewer 2">
      <div class="review-content">
        <p>"I can't believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best.”</p>
        <div class="review-author">
          <span>-Isha Patil</span>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div>
  </div>
</section>





<br>
<br>

<br>


  <?php include 'footer.php'; ?>

</body>
</html>
