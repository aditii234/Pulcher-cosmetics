<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All About Pulcher</title>
  <style>
 body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      background: #fff;
      color: #333;
    }

    .breadcrumb {
      font-size: 12px;
      padding: 10px 20px;
      color: #666;
    }

    .section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      background-color: #f4f0ec;
      margin: 40px 20px;
      border-radius: 10px;
      overflow: hidden;
    }

    .section.reverse {
      flex-direction: row-reverse;
    }

    .image-box, .text-box {
      flex: 1 1 50%;
      padding: 30px;
      box-sizing: border-box;
    }

    .image-box img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .heading {
      font-size: 34px;
      letter-spacing: 6px;
      margin-bottom: 5px;
      color: #333;
    }

    .subheading {
      font-size: 24px;
      font-weight: 500;
      margin-bottom: 25px;
      color: #333;
    }

    .bold {
      font-weight: 600;
    }

    .paragraph {
      font-size: 14px;
      line-height: 1.8;
      color: #333;
      margin-bottom: 15px;
    }

    @media (max-width: 768px) {
      .section, .section.reverse {
        flex-direction: column;
        margin: 20px 10px;
      }

      .image-box, .text-box {
        padding: 20px;
      }

      .heading, .subheading {
        text-align: center;
      }
    }
    .image-box {
  flex: 1 1 50%;
  padding: 30px;
  box-sizing: border-box;
  height: 100%; /* ensures flex equal height */
  display: flex;
  align-items: center;
  justify-content: center;
}

.image-box img {
  width: 100%;
  max-height: 350px; /* fixed max height */
  object-fit: cover; /* crop and fill evenly */
  border-radius: 10px;
}










 .commitment-section {
      text-align: center;
      background: #f4f0ec;
      padding: 40px 20px;
    }

    .commitment-section h2 {
      font-size: 28px;
      letter-spacing: 4px;
      margin-bottom: 40px;
      color: #333;
      text-shadow: 2px 2px 2px #ccc;
    }

    .features {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .feature {
      flex: 1 1 30%;
      background: transparent;
      padding: 20px;
    }

    .feature img {
      width: 100%;
      max-width: 120px;
      height: auto;
      border-radius: 20px;
    }

    .feature p {
      font-size: 14px;
      line-height: 1.6;
      margin-top: 15px;
      color: #333;
      letter-spacing: 1px;
    }





    @media (max-width: 768px) {
      .features {
        flex-direction: column;
        align-items: center;
      }
      .feature {
        max-width: 300px;
      }
    }

  </style>





  </head>
<body>

  <?php include 'header.php'; ?>


 
<div class="breadcrumb">Home > About Us</div>

  <!-- Who Are We Section -->
  <div class="section">
    <div class="image-box">
      <img src="images/perfume.jpg" alt="Perfume Bottle">
    </div>
    <div class="text-box">
      <div class="heading">Who</div>
      <div class="subheading">Are We ?</div>
      <p class="paragraph bold">Pulcher – Fragrance That Moves with You.</p>
      <p class="paragraph">
        The engine started, but something felt off. The air inside was stale, carrying the fatigue of long drives and endless traffic. With a quick spray of Pulcher Car Perfume, everything changed.
      </p>
      <p class="paragraph">
        A refreshing aroma filled the space, turning the car into a personal escape—clean, luxurious, and uplifting. Stress melted away, and every breath felt lighter, every mile smoother. The journey no longer felt routine; it became an experience.
      </p>
      <p class="paragraph">
        Because a car isn’t just for travel—it’s where memories are made, ideas are born, and moments are lived. Pulcher Perfume ensures every drive is a pleasure.
      </p>
    </div>
  </div>

  <!-- Why Choose Us Section -->
  <div class="section reverse">
    <div class="image-box">
      <img src="images/perfume.jpg" alt="Perfume and Wood">
    </div>
    <div class="text-box">
      <div class="heading">Why</div>
      <div class="subheading">Choose Us?</div>
      <p class="paragraph bold">
        Your Trusted Companion in the Art of Fragrance.
      </p>
      <p class="paragraph">
        With a relentless commitment to quality and sophistication, we offer a scent experience like no other. Each of our fragrances is meticulously crafted to evoke elegance, confidence, and individuality. Whether you seek a signature scent or something for a special occasion, our collection is designed to captivate the senses and leave a lasting impression.
      </p>
      <p class="paragraph">
        Our team of experts is dedicated to helping you find the perfect fragrance, ensuring that each note complements your unique personality and style. At Pulcher Perfumes, we prioritize transparency, craftsmanship, and your satisfaction above all else.
      </p>
      <p class="paragraph">
        Join us in discovering the transformative power of scent, and let us help you express the best version of yourself through fragrance.
      </p>
    </div>
  </div>











<!-- Commitment Section -->
  <div class="commitment-section">
    <h2>Commitment to Quality & Craftsmanship</h2>
    <div class="features">
      <div class="feature">
        <img src="images/perfume.jpg" alt="Premium Ingredients">
        <p>Premium Ingredients<br>&<br>Exquisite Formulation</p>
      </div>
      <div class="feature">
        <img src="images/perfume.jpg" alt="Craftsmanship">
        <p>Masterful Craftsmanship<br>&<br>Timeless Scents</p>
      </div>
      <div class="feature">
        <img src="images/perfume.jpg" alt="Sustainability">
        <p>Sustainability<br>&<br>Ethical Excellence</p>
      </div>
    </div>
  </div>

 








 <?php include 'footer.php'; ?>

</body>
</html>

