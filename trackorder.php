<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Track Order</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #fafafa;
      color: #333;
    }

    h1 {
      text-align: center;
      font-size: 26px;
      margin: 30px 0 10px;
    }

    .tabs {
      display: flex;
      justify-content: center;
      gap: 20px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
    }

    .tabs div {
      padding: 12px 20px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 5px 5px 0 0;
      color: #777;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .tabs .active {
      background: #f1ebe7;
      color: #000;
      border-bottom: 2px solid #000;
    }

    .track-form {
      max-width: 500px;
      margin: 30px auto;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .track-form input[type="text"] {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .track-form p {
      font-size: 12px;
      margin-top: 8px;
      color: #555;
    }

    .track-form button {
      width: 100%;
      padding: 12px;
      background: #000;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      margin-top: 20px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .track-form button:hover {
      background: #333;
    }

    .refer-box {
      display: flex;
      max-width: 600px;
      margin: 40px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      align-items: center;
      gap: 15px;
    }

    .refer-box img {
      width: 60px;
    }

    .refer-text {
      font-size: 14px;
      color: #444;
      line-height: 1.6;
    }

    .refer-text b {
      display: block;
      margin-bottom: 5px;
    }

    .invite-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
      flex-wrap: wrap;
    }

    .invite-section button {
      background: #f1ebe7;
      border: 1px solid #ccc;
      padding: 6px 10px;
      cursor: pointer;
      margin-left: 10px;
    }

    .footer {
      background: #fff;
      border-top: 1px solid #ddd;
      padding: 30px 20px;
      text-align: center;
    }

    .footer-boxes {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .footer-box {
      flex: 1;
      min-width: 160px;
      max-width: 220px;
      background: #f9f9f9;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.05);
      font-size: 13px;
    }

    .footer-box img {
      width: 40px;
      margin-bottom: 8px;
    }

    .footer-contact {
      margin-top: 20px;
    }

    .contact-btn {
      margin-top: 10px;
      background: #f1ebe7;
      padding: 8px 16px;
      border: 1px solid #ccc;
      font-size: 13px;
      cursor: pointer;
      border-radius: 4px;
      text-transform: uppercase;
    }

    .footer-icons {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin: 20px 0;
    }

    .footer-icons img {
      height: 30px;
    }

    @media (max-width: 600px) {
      .refer-box {
        flex-direction: column;
        text-align: center;
      }

      .invite-section {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
      }

      .tabs {
        flex-direction: column;
        align-items: center;
      }

      .footer-boxes {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<h1>Track Your Order</h1>

<div class="tabs">
  <div class="active" onclick="switchTab('awb')">AWB Number</div>
  <div onclick="switchTab('order')">Order ID</div>
</div>

<div class="track-form">
  <input type="text" id="inputField" placeholder="AWB Number">
  <p>Enter the code sent on your registered Email/Mobile Number in the shipment confirmation email</p>
  <button>Track Order</button>
</div>

<div class="refer-box">
  <img src="images/money-bag.png" alt="Refer Icon">
  <div class="refer-text">
    <b>Refer a friend and you both get</b>
    Get <strong>₹100</strong> in your Pulcher wallet when your friend or family places their 1st order.
    <div class="invite-section">
      <span>Invite code<br><strong id="inviteCode">HB8374151KLSRM</strong></span>
      <div>
        <a id="whatsappShare" target="_blank">
          <button style="color: #25D366;">WhatsApp</button>
        </a>
        <button onclick="shareMoreOptions()">More Options</button>
      </div>
    </div>
  </div>
</div>


<div class="footer">
  <div class="footer-boxes">
    <div class="footer-box">
      <img src="images/shipping.png" alt="Shipping"><br>
      Free Shipping <br> Above ₹399
    </div>
    <div class="footer-box">
      <img src="images/payment.png" alt="Payment"><br>
      Secure Card Payments
    </div>
  </div>

  <div class="footer-contact">
    <span>Have Queries or Concerns?</span><br>
    <a href="contact.php"><button class="contact-btn">Contact Us</button></a>
  </div>

  <div class="footer-icons">
    <img src="images/upi.jpg" alt="UPI">
    <img src="images/phonepe.png" alt="PhonePe">
    <img src="images/paytm.png" alt="Paytm">
    <img src="images/visa.png" alt="Visa">
    <img src="images/mastercard.png" alt="MasterCard">
    <img src="images/amex.png" alt="Amex">
    <img src="images/rupay.png" alt="RuPay">
    <img src="images/netbanking.png" alt="Net Banking">
  </div>

  <p><strong>100% Secure Payment</strong></p>
</div>

<script>
  function switchTab(tab) {
    const tabs = document.querySelectorAll(".tabs div");
    tabs.forEach(t => t.classList.remove("active"));
    if (tab === "awb") {
      tabs[0].classList.add("active");
      document.getElementById("inputField").placeholder = "AWB Number";
    } else {
      tabs[1].classList.add("active");
      document.getElementById("inputField").placeholder = "Order ID";
    }
  }





  const inviteCode = document.getElementById("inviteCode").innerText;
  const shareMessage = `Hey! Use my invite code ${inviteCode} and get ₹100 in your Pulcher wallet. Shop now at https://yourwebsite.com`;

  // WhatsApp button link
  const whatsappLink = `https://wa.me/?text=${encodeURIComponent(shareMessage)}`;
  document.getElementById("whatsappShare").href = whatsappLink;

  // Native share functionality
  function shareMoreOptions() {
    if (navigator.share) {
      navigator.share({
        title: 'Pulcher Invite',
        text: shareMessage,
        url: 'https://yourwebsite.com'
      })
      .catch(err => console.log('Sharing failed:', err));
    } else {
      alert("Sharing not supported on this device. Please copy the invite code manually.");
    }
  }


</script>

<?php include 'footer.php'; ?>
</body>
</html>
