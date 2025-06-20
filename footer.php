<footer>
  <style>
    .footer {
      background-color: #fff;
      padding: 40px 20px;
      font-family: Arial, sans-serif;
      color: #000;
      border-top: 1px solid #ccc;
    }

    .footer-logo {
      font-size: 36px;
      font-weight: 800;
      margin-bottom: 20px;
      text-align: center;
    }

    .footer-socials {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 30px;
    }

    .footer-socials a {
      font-size: 18px;
      color: #000;
      text-decoration: none;
    }

    .footer-content {
      display: flex;
      flex-direction: column;
      gap: 30px;
      text-align: center;
    }

    .footer-section h4 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 12px;
    }

    .footer-section a {
      display: block;
      color: #000;
      font-size: 14px;
      text-decoration: none;
      margin-bottom: 8px;
    }

    .footer-section a:hover {
      text-decoration: underline;
    }

    .footer-bottom {
      font-size: 13px;
      margin-top: 30px;
      text-align: center;
    }

    /* Desktop View */
    @media (min-width: 768px) {
      .footer-content {
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
        flex-wrap: wrap;
      }

      .footer-section {
        flex: 1;
        min-width: 180px;
      }

      .footer-logo {
        text-align: left;
      }

      .footer-socials {
        justify-content: flex-start;
      }
    }
  </style>

  <div class="footer">
    <div class="footer-logo">PULCHER</div>

    <div class="footer-socials">
      <a href="#"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
    </div>

    <div class="footer-content">
      <div class="footer-section">
        <h4>Shop by Category</h4>
        <a href="#">Car Perfume</a>
        <a href="#">Combos</a>
      </div>

      <div class="footer-section">
        <h4>Learn</h4>
        <a href="#">Blogs</a>
        <a href="#">FAQs</a>
      </div>

      <div class="footer-section">
        <h4>Help</h4>
        <a href="#">Privacy Policies</a>
        <a href="#">Returns and Refunds</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Shipping</a>
      </div>

      <div class="footer-section">
        <h4>Contact Us</h4>
        <a href="tel:+1234567890">+1234567890</a>
        <a href="mailto:care@pulchercosmatics.com">care@pulchercosmatics.com</a>
        <a href="#">Track My Order</a>
      </div>
    </div>

    <div class="footer-bottom">
      © 2025 Pulcher, all rights reserved.
    </div>
  </div>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
</footer>
