<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $billingChoice = $_POST['billing_choice'];

    if ($billingChoice === 'different') {
        $billingFirstName = $_POST['billing_firstname'];
        $billingLastName = $_POST['billing_lastname'];
        $billingAddress = $_POST['billing_address'];
        $billingCity = $_POST['billing_city'];
        $billingState = $_POST['billing_state'];
        $billingPin = $_POST['billing_pincode'];
        $billingPhone = $_POST['billing_phone'];

        // Process or validate the data...
    } else {
        // Billing same as shipping
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Checkout</title>
  <style>
  	 

    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 20px auto;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      flex-direction: row-reverse; /* <-- Important: Show Right side first */
    }
    .left, .right {
      padding: 30px;
    }
    .left {
      flex: 1 1 60%;
      border-left: 1px solid #ddd;
    }
    .right {
      flex: 1 1 40%;
      background: #fafafa;
    }
    h2 {
      font-size: 20px;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    input, select, button {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background: black;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background: #333;
    }
    .order-summary img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      margin-right: 10px;
    }
    .order-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .discount-code {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
    }
    .summary-details {
      margin-bottom: 20px;
    }
    .summary-details div {
      display: flex;
      justify-content: space-between;
      margin: 5px 0;
    }
    .total {
      font-weight: bold;
      font-size: 18px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }
    
    .small-text {
      font-size: 12px;
      color: #777;
      margin: 15px 0;
    }
    @media (max-width: 768px) {
      .container {
        flex-direction: column; /* Stack vertically on mobile */
      }
      .left, .right {
        flex: 1 1 100%;
        border-left: none;
        border-bottom: 1px solid #ddd;
      }
    }

.payment-box {
    background: #f0f0f0;
    border-radius: 10px;
    overflow: hidden;
    margin-top: 20px;
}

.payment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #d9d9d9;
    padding: 15px;
}

.payment-option {
    display: flex;
    align-items: center;
}

.payment-option input[type="radio"] {
    margin-right: 10px;
    transform: scale(1.5);
}

.payment-option span {
    font-size: 16px;
    font-weight: bold;
}

.payment-icons {
    display: flex;
    gap: 10px;
}

.payment-icons .icon {
    width: 40px;
    height: auto;
    background: white;
    padding: 5px;
    border-radius: 5px;
}

.payment-body {
    text-align: center;
    padding: 20px;
    background: #eeeeee;
}

.browser-img {
    width: 100px;
    margin-bottom: 20px;
}


.billing-address {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
}

.billing-address h2 {
    font-size: 20px;
    margin-bottom: 15px;
}

.address-options {
    background: #f0f0f0;
    border-radius: 8px;
    margin-bottom: 20px;
    overflow: hidden;
}

.address-option {
    display: flex;
    align-items: center;
    padding: 12px 15px;
    font-size: 16px;
    border-bottom: 1px solid #ccc;
    background: #f0f0f0;
}

.address-option input[type="radio"] {
    margin-left: 0px;
    transform: scale(1.5);
}

.address-option.different {
    background: #fff;
    border: 1px solid #000;
    border-top: none;
}

.billing-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.billing-row {
    display: flex;
    gap: 10px;
}

.billing-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    background: #fff;
    font-size: 14px;
}

.billing-input:focus {
    outline: none;
    border-color: #000;
}

.mcash-info {
    display: flex;
    align-items: center;
    margin-top: 20px;
    padding: 15px;
    background: #fff;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.gift-icon {
    width: 40px;
    margin-right: 10px;
}
.mcash-info p {
    font-size: 14px;
}
.mcash-info small {
    font-size: 12px;
}

.pay-button {
            background: black;
            color: white;
            font-weight: bold;
            padding: 12px;
            width: 100%;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .pay-button:hover {
            background: #333;
        }
        .back-button-container {
  display: flex;
  justify-content: flex-end;
  padding: 20px;
}



  </style>
</head>
<body>

  <?php include 'header.php'; ?>

<div class="container">

  <!-- Right Side: Order Summary (First now) -->
  <div class="right">
    <h2>Order Summary</h2>

    <div class="order-summary">
      <div class="order-item">
        <img src="images/aqua.jpg" alt="Pulcher Aqua Car Perfume">
        <div>
          <strong>Pulcher Aqua Car Perfume</strong><br>
          ₹472.00
        </div>
      </div>

      <div class="discount-code">
        <input type="text" placeholder="Discount code">
        <button>Apply</button>
      </div>

      <div class="summary-details">
        <div>
          <span>Subtotal</span>
          <span>₹472.00</span>
        </div>
        <div>
          <span>Shipping</span>
          <span>Enter shipping address</span>
        </div>
      </div>

      <div class="summary-details total">
        <div>
          <span>Total</span>
          <span>INR ₹472.00</span>
        </div>
      </div>

    </div>
  </div>

  <!-- Left Side: Contact, Delivery, Payment -->


  <div class="left">
    <h2>Contact</h2>
    <div class="form-group">
      <input type="email" placeholder="Email">
    </div>
    <div class="form-group discount-code">
      <input type="text" placeholder="Discount code or Gift Card">
      <button>Apply</button>
    </div>

    <h2>Delivery</h2>
    <div class="form-group">
      <select>
        <option>India</option>
      </select>
    </div>
    <div class="form-group">
      <input type="text" placeholder="First Name">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Last Name">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Flat number, building, house, company, apartment">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Area, street, sector, village">
    </div>
    <div class="form-group">
      <input type="text" placeholder="City">
    </div>
    <div class="form-group">
      <select>
        <option>MAHARASHTRA</option>
      </select>
    </div>
    <div class="form-group">
      <input type="text" placeholder="Pin Code">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Phone">
    </div>

    <h2>Shipping Method</h2>
    <div class="form-group">
      <input type="text" placeholder="Shipping method will appear here">
    </div>

    <!-- Payment Section -->
<div class="section">
    <h2>Payment</h2>
    <p>All transactions are secure and encrypted</p>
    
    <div class="payment-box">
        <div class="payment-header">
            <div class="payment-option">
                <input type="radio" checked>
                <span>Razorpay Secure (UPI, Cards, Wallets, NetBanking)</span>
            </div>
            <div class="payment-icons">
                <img src="images/gpay.png" alt="GPay" class="icon">
                <img src="images/visa.png" alt="Visa" class="icon">
                <img src="images/mastercard.png" alt="MasterCard" class="icon">
                <img src="images/rupay.png" alt="RuPay" class="icon">
            </div>
        </div>
        <div class="payment-body">
            <img src="images/payment.png">
            <p>After Clicking Pay now, you will be redirected to<br> Razorpay Secure (UPI, Cards, Wallets, NetBanking)<br> to complete your purchase securely</p>
        </div>
    </div>
</div>


   <!-- Billing Address Section -->
<div class="billing-address">
    <h2>Billing Address</h2>

    <div class="address-options">
        <label class="address-option">
            <input type="radio" name="billing_choice" value="same" <?php if (!isset($_POST['billing_choice']) || $_POST['billing_choice'] === 'same') echo 'checked'; ?> onchange="toggleBillingForm()">
            <span>Same as shipping address</span>
        </label>
        <label class="address-option different">
            <input type="radio" name="billing_choice" value="different" <?php if (isset($_POST['billing_choice']) && $_POST['billing_choice'] === 'different') echo 'checked'; ?> onchange="toggleBillingForm()">
            <span>Use a different billing address</span>
        </label>
    </div>

    <div id="billingForm" class="billing-form" style="<?php echo (isset($_POST['billing_choice']) && $_POST['billing_choice'] === 'different') ? 'display: flex;' : 'display: none;'; ?>">
        <select class="billing-input" name="billing_country">
            <option value="India" selected>India</option>
        </select>

        <div class="billing-row">
            <input type="text" class="billing-input" name="billing_firstname" placeholder="First Name*" required value="<?php echo $_POST['billing_firstname'] ?? ''; ?>">
            <input type="text" class="billing-input" name="billing_lastname" placeholder="Last Name" value="<?php echo $_POST['billing_lastname'] ?? ''; ?>">
        </div>

        <input type="text" class="billing-input" name="billing_address" placeholder="Flat name, building house no, company, Apartment" value="<?php echo $_POST['billing_address'] ?? ''; ?>">

        <div class="billing-row">
            <input type="text" class="billing-input" name="billing_city" placeholder="City*" required value="<?php echo $_POST['billing_city'] ?? ''; ?>">
            <select class="billing-input" name="billing_state">
                <option value="MAHARASHTRA" selected>MAHARASHTRA</option>
                <option value="DELHI">DELHI</option>
                <option value="KARNATAKA">KARNATAKA</option>
                <option value="TAMIL NADU">TAMIL NADU</option>
            </select>
            <input type="text" class="billing-input" name="billing_pincode" placeholder="Pin code" value="<?php echo $_POST['billing_pincode'] ?? ''; ?>">
        </div>

        <input type="text" class="billing-input" name="billing_phone" placeholder="Phone no*" required value="<?php echo $_POST['billing_phone'] ?? ''; ?>">
    </div>

    <div class="mcash-info">
        <img src="https://img.icons8.com/ios-filled/50/000000/gift.png" alt="Gift Icon" class="gift-icon">
        <p>You will earn 28 Mcash on this purchase<br><small>1 Mcash = ₹1</small></p>
    </div>
</div>

<!-- Pay Now -->
<div class="section" style="text-align:center;">
            <button class="pay-button" onclick="handlePayment()">Pay Now</button>




  </div>

</div>
</div>

<!-- Payment Success Popup -->
<div id="paymentSuccessPopup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:9999; justify-content:center; align-items:center;">
  <div style="background:#fff; padding:40px; border-radius:10px; text-align:center; box-shadow:0 0 20px rgba(0,0,0,0.3); animation: popIn 0.4s ease;">
    <h2 style="color:green; font-size:24px; margin-bottom:15px;">✅ Payment Successful!</h2>
    <p style="font-size:16px;">Thank you for your purchase.</p>
    <p style="font-size:14px; color:gray;">Redirecting to order details...</p>
  </div>
</div>

<style>
@keyframes popIn {
  from { transform: scale(0.8); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
</style>

<script>
function toggleBillingForm() {
    const billingForm = document.getElementById('billingForm');
    const selected = document.querySelector('input[name="billing_choice"]:checked').value;
    billingForm.style.display = selected === 'different' ? 'flex' : 'none';
}





function handlePayment() {
    const popup = document.getElementById('paymentSuccessPopup');
    popup.style.display = 'flex';

    // Redirect after 2.5 seconds
    setTimeout(() => {
        window.location.href = 'orderplaced.php';
    }, 2500);
}

</script>
<?php include 'footer.php'; ?>

</body>
</html>
