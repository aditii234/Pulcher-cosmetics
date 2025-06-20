<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Help</title>
  <style>
   

.help-container {
  max-width: 768px;
  margin: auto;
  background: white;
  padding: 20px;
  border-radius: 10px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
}

.faq-section {
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 10px;
  overflow: hidden;
}

.faq-toggle {
  background: #fff;
  width: 100%;
  padding: 16px 20px;
  border: none;
  font-size: 16px;
  font-weight: 600;
  text-align: left;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.faq-toggle:hover {
  background: #f0f0f0;
}

.icon {
  font-size: 24px;
  line-height: 1;
}

.faq-content {
  display: none;
  padding: 15px 20px;
  background: #fcfcfc;
  font-size: 15px;
  color: #333;
}

.faq-content p {
  margin-bottom: 15px;
}

@media (max-width: 600px) {
  .help-container {
    padding: 15px;
  }

  .faq-toggle {
    font-size: 15px;
  }

  .icon {
    font-size: 20px;
  }
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.5s ease, opacity 0.5s ease;
  opacity: 0;
}

.faq-item.open .faq-answer {
  max-height: 1000px; /* should be more than enough */
  opacity: 1;
}

.faq-question {
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  font-size: 1.2rem;
  padding: 15px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.faq-question .icon {
  transition: transform 0.3s ease;
}

.faq-item.open .faq-question .icon {
  transform: rotate(45deg); /* turn + into × */
}




 .contact-section {
      max-width: 500px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .contact-section h2 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: 500;
      margin-bottom: 6px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }

    .form-row {
      display: flex;
      gap: 10px;
    }

    .form-row .form-group {
      flex: 1;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #eae4df;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #d5ccc5;
    }

    .error {
      color: red;
      font-size: 0.9rem;
    }

    @media (max-width: 600px) {
      .form-row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>


  <div class="help-container">
    <h1>Help</h1>

    <!-- Section Template -->
    <div class="faq-section">
      <button class="faq-toggle">Ordering & Payments <span class="icon">×</span></button>
      <div class="faq-content">
        <p><strong>1. How do I place an order on Pulcher?</strong><br />
        To place an order, browse our products, select the items you want, add them to your cart, and proceed to checkout.</p>

        <p><strong>2. What payment methods do you accept?</strong><br />
        Credit/debit cards, UPI, net banking, and wallets like Google Pay and Paytm.</p>

        <p><strong>3. Can I modify my order after placing it?</strong><br />
        Once an order is placed, modifications are not guaranteed. Contact support ASAP.</p>

        <p><strong>4. Do you offer Cash on Delivery (COD)?</strong><br />
        No.</p>
      </div>
    </div>

    <div class="faq-section">
      <button class="faq-toggle">Shipping & Delivery <span class="icon">×</span></button>
      <div class="faq-content">
        <p><strong>5. How long does delivery take?</strong><br />
        Standard: 3-7 days. Express: 1-3 days depending on location.</p>

        <p><strong>6. Do you offer international shipping?</strong><br />
        Currently no. It will be available soon.</p>

        <p><strong>7. How can I track my order?</strong><br />
        You'll receive a tracking link via SMS and email once shipped.</p>

        <p><strong>8. What if my order is delayed?</strong><br />
        We’ll notify you via email/SMS. You can also check the tracking link.</p>
      </div>
    </div>

    <div class="faq-section">
      <button class="faq-toggle">Cancellations & Returns <span class="icon">×</span></button>
      <div class="faq-content">
        <p><strong>9. Can I cancel my order after placing it?</strong><br />
        Yes, within 24 hours if it hasn’t shipped.</p>

        <p><strong>10. What if I receive a damaged or wrong product?</strong><br />
        Contact support within 48 hours with photos for replacement/refund.</p>

        <p><strong>11. Do you offer returns or exchanges?</strong><br />
        Yes, within 7 days for unused products.</p>

        <p><strong>12. How long does it take to process a refund?</strong><br />
        5-7 business days after return approval.</p>
      </div>
    </div>

    <div class="faq-section">
      <button class="faq-toggle">Product & Usage <span class="icon">×</span></button>
      <div class="faq-content">
        <p><strong>13. How long does the perfume last?</strong><br />
        30-60 days depending on use/environment.</p>

        <p><strong>14. Are your products suitable for all skin types?</strong><br />
        Yes, but patch test recommended.</p>

        <p><strong>15. Do your perfumes contain alcohol?</strong><br />
        A small amount for better longevity. See product descriptions.</p>
      </div>
    </div>

    <div class="faq-section">
      <button class="faq-toggle">Support & Contact <span class="icon">×</span></button>
      <div class="faq-content">
        <p><strong>16. How can I contact customer support?</strong><br />
        Email support@pulcher.com or call Mon–Sat, 10AM–6PM.</p>

        <p><strong>17. Do you have a physical store?</strong><br />
        Currently online-only. Retail store launches coming soon.</p>

        <p><strong>18. How do I stay updated?</strong><br />
        Subscribe to our newsletter or follow us on Instagram/Facebook.</p>
      </div>
    </div>
  </div>





  <div class="contact-section">
  <h2>Still have any question?</h2>
  <form id="contactForm">
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" required />
    </div>
    <div class="form-row">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required />
      </div>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit">Submit</button>
    <div id="formMessage" class="error" style="margin-top:10px;"></div>
  </form>
</div>

<script>
const toggles = document.querySelectorAll(".faq-toggle");

toggles.forEach(toggle => {
  toggle.addEventListener("click", () => {
    const content = toggle.nextElementSibling;
    const icon = toggle.querySelector(".icon");

    content.style.display = content.style.display === "block" ? "none" : "block";
    icon.textContent = content.style.display === "block" ? "−" : "×";
  });
});


document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.parentElement;
    item.classList.toggle('open');
  });
});





const form = document.getElementById("contactForm");
  const formMessage = document.getElementById("formMessage");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const fullName = form.fullName.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();
    const message = form.message.value.trim();

    if (!fullName || !email || !phone || !message) {
      formMessage.textContent = "Please fill out all fields.";
      return;
    }

    if (!/^\d{10}$/.test(phone)) {
      formMessage.textContent = "Phone number must be 10 digits.";
      return;
    }

    formMessage.style.color = "green";
    formMessage.textContent = "Submitted successfully!";
    
    // Optional: Reset the form
    form.reset();
  });
</script>



<?php include 'footer.php'; ?>

</body>
</html>
