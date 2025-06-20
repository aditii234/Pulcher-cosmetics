
<?php include 'header.php'; ?>

<style>
/* General Styling */
body {
  font-family: 'Segoe UI', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #fff;
  color: #333;
}
.container {
  max-width: 1200px;
  margin: 40px auto;
  padding: 0 20px;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.product-detail-hero {
  display: flex;
  gap: 20px;
  margin: 40px;
  flex-wrap: wrap;
  align-items: flex-start;
}

.gallery-column {
  display: flex;
  flex-direction: column;
  gap: 30px;
  width: 80px;
}

.product-info {
  flex: 1.2;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.product-info h1 {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 0;
}

.sub-title {
  font-size: 14px;
  color: #666;
}

.rating {
  font-size: 14px;
  color: #222;
  margin-bottom: 5px;
}

.rating span {
  margin-left: 8px;
  color: #999;
}

.price-block {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.price-block select {
  width: fit-content;
  padding: 4px 10px;
  font-size: 14px;
  margin-top: 6px;
}

.price {
  font-size: 20px;
  font-weight: 600;
}

.discount {
  font-size: 14px;
  color: #d00;
  margin-left: 10px;
}

.mrp {
  font-size: 14px;
  color: #999;
}


.key-features {
  margin-top: 20px;
  background: #f6f0eb;
  padding: 16px;
  border-radius: 10px;
}

.key-features h4 {
  margin-bottom: 10px;
  font-weight: 600;
}

.key-features ul {
  list-style-type: disc;
  padding-left: 20px;
  margin: 0;
}

.key-features li {
  font-size: 14px;
  margin-bottom: 6px;
}
.styled-select {
  padding: 8px 12px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 14px;
  width: 120px;
  margin-top: 6px;
  background-color: #fff;
  appearance: none;
}

.quantity-cart-wrap {
  display: flex;
  align-items: center;
  gap: 15px;
  margin-top: 10px;
  flex-wrap: wrap;
}

.quantity-control {
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  border-radius: 6px;
  overflow: hidden;
  background: #fff;
}

.qty-btn {
  padding: 6px 12px;
  font-size: 18px;
  background: #f1f1f1;
  border: none;
  cursor: pointer;
  color: #333;
  font-weight: bold;
}

.qty-btn:hover {
  background-color: #ddd;
}

.quantity-control input[type="number"] {
  width: 50px;
  padding: 6px;
  font-size: 14px;
  text-align: center;
  border: none;
  outline: none;
}

.add-to-cart {
  padding: 10px 20px;
  background-color: #000;
  color: #fff;
  font-size: 14px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.add-to-cart:hover {
  background-color: #333;
}
.product-gallery {
  display: flex;
  align-items: flex-start;
  gap: 20px;
}

.thumbnails {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.thumb {
  width: 90px;
  height: 90px;
  object-fit: cover;
  border: 2px solid transparent;
  cursor: pointer;
  transition: border 0.2s ease;
  border-radius: 4px;
}

.thumb.active {
  border-color: #000;
}

.main-image img {
  width: 460px;
  height: 500px;
  object-fit: cover;
  border-radius: 6px;
}











.collapsible-section {
  border-radius: 10px;
  overflow: hidden;
  margin: 30px auto;
  max-width: 1000px;
  background: linear-gradient(135deg, #f9f9f9, #ffffff);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
  transition: all 0.3s ease-in-out;
}

.collapsible-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #ffffff;
  padding: 18px 24px;
  font-weight: 600;
  font-size: 17px;
  cursor: pointer;
  transition: background 0.3s ease;
  position: relative;
  border-bottom: 1px solid #eee;
}

.collapsible-header:hover {
  background-color: #f0f0f0;
}

.toggle-icon {
  font-size: 22px;
  font-weight: bold;
  transition: transform 0.3s ease, color 0.3s ease;
  color: #555;
}

.collapsible-section.active .toggle-icon {
  transform: rotate(45deg);
  color: #000;
}

/* Animated collapsible content */
.collapsible-content {
  max-height: 0;
  overflow: hidden;
  opacity: 0;
  transition: max-height 0.5s ease, opacity 0.5s ease;
  padding: 0 24px;
}

.collapsible-section.active .collapsible-content {
  max-height: 1000px; /* large enough for tallest section */
  opacity: 1;
  padding: 20px 24px;
}

/* Content layout */
.collapsible-row {
  display: flex;
  gap: 24px;
  align-items: flex-start;
  flex-wrap: wrap;
}

.collapsible-row.reverse {
  flex-direction: row-reverse;
}

.collapsible-row img {
  max-width: 250px;
  border-radius: 10px;
  flex-shrink: 0;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.collapsible-row p,
.collapsible-row ul {
  font-size: 15px;
  line-height: 1.7;
  color: #333;
  margin: 0;
  flex: 1;
}

/* Ingredients block */
.ingredients-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
  text-align: center;
}

.ingredient-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 150px;
}

.ingredient-item img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 10px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

.ingredient-item div {
  font-size: 14px;
  color: #333;
}

/* How-to steps */
.how-to-steps {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 20px;
  text-align: center;
}

.how-to-steps div {
  flex: 1 1 150px;
}

.how-to-steps img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  margin-bottom: 10px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

/* Product specs table */
.product-specs {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.product-specs th,
.product-specs td {
  border: 1px solid #ddd;
  padding: 12px 16px;
  text-align: left;
  background: #fff;
}

.product-specs th {
  background-color: #f7f7f7;
}






.reviews-section {
  padding: 60px 30px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  max-width: 1200px;
  margin: 0 auto;
  font-family: 'Segoe UI', sans-serif;
}

.reviews-section h2 {
  font-size: 32px;
  font-weight: bold;
  color: #111;
  margin-bottom: 40px;
  text-align: center;
}

.reviews-summary {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 40px;
  gap: 40px;
}

/* Rating Bars */
.rating-breakdown {
  flex: 1;
  min-width: 280px;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.rating-bar {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 15px;
  color: #333;
}

.rating-bar span:first-child {
  width: 20px;
  font-weight: 600;
}

.rating-bar span:last-child {
  width: 50px;
  text-align: right;
}

.bar {
  flex: 1;
  height: 6px;
  background-color: #eee;
  border-radius: 50px;
  overflow: hidden;
  position: relative;
}

.bar > div {
  height: 100%;
  background: linear-gradient(90deg, #ffc107, #ff9800);
  border-radius: 50px;
  transition: width 0.4s ease-in-out;
}

/* Score Box */
.rating-score {
  text-align: center;
  min-width: 250px;
}

.rating-score h3 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 8px;
}

.rating-score .stars {
  color: #f4c150;
  font-size: 24px;
  letter-spacing: 1px;
}

.rating-score p {
  color: #555;
  font-size: 14px;
  margin-bottom: 20px;
}

.review-button {
  background-color: #000;
  color: #fff;
  padding: 10px 24px;
  font-size: 14px;
  border: none;
  border-radius: 24px;
  cursor: pointer;
  transition: background 0.3s;
}

.review-button:hover {
  background-color: #333;
}

/* Review Carousel */
.review-carousel {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 20px;
}

.review-card {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 12px;
  padding: 20px;
  max-width: 300px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  transition: transform 0.3s;
}

.review-card:hover {
  transform: translateY(-5px);
}

.review-card img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 12px;
}

.review-card p {
  font-size: 15px;
  color: #333;
  line-height: 1.5;
  margin-bottom: 10px;
}

.reviewer {
  font-weight: bold;
  color: #222;
  margin-bottom: 5px;
}

.review-stars {
  color: #f4c150;
  font-size: 16px;
}






</style>

<section class="product-detail-hero">
  <div class="product-gallery">
  <div class="thumbnails">
    <img src="images/aqua.jpg" alt="Thumb 1" class="thumb active" />
    <img src="images/aqua.jpg" alt="Thumb 2" class="thumb" />
    <img src="images/aqua.jpg" alt="Thumb 3" class="thumb" />
    <img src="images/aqua.jpg" alt="Thumb 4" class="thumb" />
    <img src="images/aqua.jpg" alt="Thumb 5" class="thumb" />
  </div>
  <div class="main-image">
    <img src="images/aqua.jpg" alt="Main Product" id="mainDisplayImage" />
  </div>
</div>

  <div class="product-info">
    <h1>Pulcher Aqua Car Perfume</h1>
    <p class="sub-title">
      Hanging Perfume for Car in Glass Bottle with Wooden Diffuser
    </p>
    <div class="rating">
      ⭐⭐⭐⭐☆ <span>(4.5) | 1845 reviews</span>
    </div>
    <div class="price-block">
  <label for="volume">Quantity</label>
  <select id="volume" class="styled-select">
    <option>10 ml</option>
  </select>

  <p class="price">₹472.00 <span class="discount">20% OFF</span></p>
  <p class="mrp">MRP: <del>₹590.00</del></p>

  <div class="quantity-cart-wrap">
    <div class="quantity-control">
      <button class="qty-btn minus">−</button>
      <input type="number" value="1" min="1" />
      <button class="qty-btn plus">+</button>
    </div>
    <button class="add-to-cart">Add to cart</button>
  </div>
</div>

    <div class="key-features">
      <h4>Key Features</h4>
      <ul>
        <li><strong>Contents:</strong> 1 Pulcher Musk Car Perfume (50ml / 100ml)</li>
        <li><strong>Luxury Musk Scent:</strong> Premium, long-lasting musk fragrance inspired by high-end colognes.</li>
        <li><strong>Long-Lasting Fragrance:</strong> Keeps your car fresh for weeks, resisting heat and odor.</li>
        <li><strong>Safe & Eco-Friendly:</strong> Made with non-toxic essential oils and natural solvents.</li>
        <li><strong>Elegant Design:</strong> Elegant glass bottle fits on dashboard, AC vent, or mirror.</li>
        <li><strong>Versatile Use:</strong> Perfect for cars, offices, wardrobes, or small rooms.</li>
      </ul>
    </div>
  </div>
</section>

  <!-- COLLAPSIBLE SECTIONS -->
<!-- About The Product -->
<div class="collapsible-section">
  <div class="collapsible-header toggle-btn">
    About The Product
    <span class="toggle-icon">+</span>
  </div>
  <div class="collapsible-content">
    <div class="collapsible-row">
      <img src="images/perfume.jpg" alt="About Image">
      <p>Pulcher Musk Car Perfume – the ultimate luxury car fragrance for a fresh, odor-free ride. Infused with premium musk essential oils, it ensures a long-lasting, non-toxic aroma. This sleek air freshener blends style and performance, ideal for dashboard or AC vent. Elevate your car’s ambiance with elegance and freshness.</p>
    </div>
  </div>
</div>

<!-- What’s Special -->
<div class="collapsible-section">
  <div class="collapsible-header toggle-btn">
    What’s Special
    <span class="toggle-icon">+</span>
  </div>
  <div class="collapsible-content">
    <div class="collapsible-row reverse">
      <ul>
        <li>Luxury Musk Car Perfume – Inspired by high-end colognes</li>
        <li>Odor Eliminating & Fresh – Removes smoke, food, and pet odors</li>
        <li>Stylish & Eco-Friendly – Non-toxic, oil-based for all passengers</li>
      </ul>
      <img src="images/perfume.jpg" alt="Special Image">
    </div>
  </div>
</div>

<!-- Ingredients -->
<div class="collapsible-section">
  <div class="collapsible-header toggle-btn">
    Ingredients
    <span class="toggle-icon">+</span>
  </div>
  <div class="collapsible-content">
    <div class="ingredients-list">
      <div class="ingredient-item">
        <img src="images/perfume.jpg" alt="Musk">
        <div><strong>Musk Essence</strong><br>Warm, sensual</div>
      </div>
      <div class="ingredient-item">
        <img src="images/perfume.jpg" alt="Essential Oils">
        <div><strong>Essential Oils</strong><br>Oil-based formula</div>
      </div>
      <div class="ingredient-item">
        <img src="images/perfume.jpg" alt="Solvent">
        <div><strong>Solvent Base</strong><br>Deep action base</div>
      </div>
      <div class="ingredient-item">
        <img src="images/perfume.jpg" alt="Fixatives">
        <div><strong>Fixatives</strong><br>Quick-diffuse formula</div>
      </div>
    </div>
  </div>
</div>

<!-- Benefits -->
<div class="collapsible-section">
  <div class="collapsible-header toggle-btn">
    Benefits
    <span class="toggle-icon">+</span>
  </div>
  <div class="collapsible-content">
    <div class="collapsible-row">
      <img src="images/perfume.jpg" alt="Benefits Image">
      <ul>
        <li><strong>Long-Lasting Luxury Scent</strong> – Infused with premium musk fragrance, keeping your car fresh for weeks.</li>
        <li><strong>Odor Eliminator & Air Freshener</strong> – Removes smoke, food, pet, and musty odors, ensuring a clean ambiance.</li>
        <li><strong>Stylish & Compact Car Perfume</strong> – Sleek design that enhances your car’s interior while providing a rich aroma.</li>
        <li><strong>Eco-Friendly & Easy to Use</strong> – Made with non-toxic essential oils, safe for all passengers, and fits on dashboard, mirror, or AC vent.</li>
      </ul>
    </div>
  </div>
</div>

<!-- How to Use -->
<div class="collapsible-section">
  <div class="collapsible-header toggle-btn">
    How to Use
    <span class="toggle-icon">+</span>
  </div>
  <div class="collapsible-content">
    <div class="how-to-steps">
      <div><img src="images/perfume.jpg" alt="Step 1"><p>Open the wooden lid</p></div>
      <div><img src="images/perfume.jpg" alt="Step 2"><p>Remove the plastic cap</p></div>
      <div><img src="images/perfume.jpg" alt="Step 3"><p>Close the wooden lid back</p></div>
      <div><img src="images/perfume.jpg" alt="Step 4"><p>Turn the bottle over<br>5–10 seconds</p></div>
      <div><img src="images/perfume.jpg" alt="Step 5"><p>Hang it on mirror<br>(once a week)</p></div>
    </div>
  </div>
</div>

<!-- Product Details -->
<div class="collapsible-section">
  <div class="collapsible-header toggle-btn">
    Product Details
    <span class="toggle-icon">+</span>
  </div>
  <div class="collapsible-content">
    <table class="product-specs">
      <tr><th>Product Name</th><td>Pulcher Musk Car Perfume</td></tr>
      <tr><th>Fragrance Type</th><td>Premium Musk</td></tr>
      <tr><th>Capacity</th><td>10 ml</td></tr>
      <tr><th>Usage</th><td>Car air freshener</td></tr>
      <tr><th>Application</th><td>Hanging</td></tr>
      <tr><th>Ingredients</th><td>Musk essence, Essential oil, Ethanol, Fixatives</td></tr>
      <tr><th>Shelf Life</th><td>12 months</td></tr>
      <tr><th>Package Includes</th><td>1 Perfume bottle + diffuser stick / clip (optional)</td></tr>
    </table>
  </div>
</div>

<!-- Reviews -->
<section class="reviews-section">
  <h2>Reviews</h2>

  <div class="reviews-summary">
    <div class="rating-breakdown">
      <div class="rating-bar">
        <span>5</span>
        <div class="bar"><div style="width: 90%;"></div></div>
        <span>6,512</span>
      </div>
      <div class="rating-bar">
        <span>4</span>
        <div class="bar"><div style="width: 75%;"></div></div>
        <span>5,512</span>
      </div>
      <div class="rating-bar">
        <span>3</span>
        <div class="bar"><div style="width: 50%;"></div></div>
        <span>3,512</span>
      </div>
      <div class="rating-bar">
        <span>2</span>
        <div class="bar"><div style="width: 30%;"></div></div>
        <span>2,512</span>
      </div>
      <div class="rating-bar">
        <span>1</span>
        <div class="bar"><div style="width: 5%;"></div></div>
        <span>12</span>
      </div>
    </div>

    <div class="rating-score">
      <h3>4.5 <span class="stars">★★★★★</span></h3>
      <p>Based on 18,851 reviews</p>
      <button class="review-button">Write A Review</button>
    </div>
  </div>

  <div class="review-carousel">
    <div class="review-card">
      <img src="images/perfume.jpg" alt="User">
      <p>"I can’t believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best."</p>
      <div class="reviewer">– Isha Patil</div>
      <div class="review-stars">★★★★★</div>
    </div>
    <div class="review-card">
      <img src="images/perfume.jpg" alt="User">
      <p>"I can’t believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best."</p>
      <div class="reviewer">– Isha Patil</div>
      <div class="review-stars">★★★★★</div>
    </div>
    <div class="review-card">
      <img src="images/perfume.jpg" alt="User">
      <p>"I can’t believe how refreshing my car smells now! I’ve tried other car perfumes, but this one is by far the best."</p>
      <div class="reviewer">– Isha Patil</div>
      <div class="review-stars">★★★★★</div>
    </div>
  </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", function () {
  // Product image gallery
  const thumbs = document.querySelectorAll(".thumb");
  const mainImage = document.getElementById("mainDisplayImage");

  thumbs.forEach((thumb) => {
    thumb.addEventListener("click", function () {
      thumbs.forEach((t) => t.classList.remove("active"));
      this.classList.add("active");
      mainImage.src = this.src;
      mainImage.alt = this.alt;
    });
  });

  // Quantity controls
  const minusBtn = document.querySelector(".qty-btn.minus");
  const plusBtn = document.querySelector(".qty-btn.plus");
  const input = document.querySelector(".quantity-control input");

  minusBtn.addEventListener("click", () => {
    let value = parseInt(input.value, 10);
    if (value > 1) input.value = value - 1;
  });

  plusBtn.addEventListener("click", () => {
    let value = parseInt(input.value, 10);
    input.value = value + 1;
  });

  // Collapsible sections
  const toggleButtons = document.querySelectorAll(".toggle-btn");

  toggleButtons.forEach((button) => {
    const icon = button.querySelector(".icon");

    button.addEventListener("click", function () {
      const section = this.closest(".collapsible-section");
      const isActive = section.classList.toggle("active");
      this.setAttribute("aria-expanded", isActive);

      if (icon) {
        icon.textContent = isActive ? "×" : "+";
        icon.classList.toggle("rotate");
      }
    });

    button.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        this.click();
      }
    });
  });
});





</script>

<?php include 'footer.php'; ?>
