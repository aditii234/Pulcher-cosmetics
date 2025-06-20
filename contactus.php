<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #fff;
      color: #000;
    }

    h2 {
      text-align: center;
      margin: 30px 0;
      font-size: 26px;
    }

    .contact-form {
      max-width: 900px;
      margin: 0 auto;
    }

    form {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .form-group {
      flex: 1 1 calc(50% - 10px);
      display: flex;
      flex-direction: column;
    }

    .form-group-full {
      flex: 1 1 100%;
    }

    label {
      font-size: 14px;
      margin-bottom: 5px;
    }

    .required::after {
      content: "*";
      color: red;
      margin-left: 4px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 30px;
      font-size: 14px;
      width: 100%;
      box-sizing: border-box;
    }

    textarea {
      border-radius: 15px;
      min-height: 120px;
      resize: vertical;
    }

    .checkbox-group {
      flex: 1 1 100%;
      font-size: 13px;
    }

    .send-btn {
      background: #000;
      color: white;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .send-btn:hover {
      background: #333;
    }

    .info-section {
      display: flex;
      gap: 20px;
      max-width: 900px;
      margin: 40px auto;
      flex-wrap: wrap;
    }

    .info-box {
      flex: 1 1 48%;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      text-align: center;
      position: relative;
    }

    .info-box h3 {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .info-box p {
      font-size: 14px;
      margin: 10px 0;
    }

    .info-box input {
      width: 100%;
      border-radius: 5px;
      padding: 8px;
      border: 1px solid #ccc;
      margin-top: 5px;
      text-align: center;
      font-size: 13px;
    }

    .icon-badge {
      position: absolute;
      top: -20px;
      left: 50%;
      transform: translateX(-50%);
      background: #000;
      color: white;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
    }

    .underline {
      margin: 10px auto;
      width: 120px;
      border-top: 2px solid #000;
    }

    .track-button {
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      background: #000;
      color: white;
      font-size: 13px;
      border: none;
      cursor: pointer;
    }

    .track-button:hover {
      background: #333;
    }

    @media (max-width: 768px) {
      .form-group {
        flex: 1 1 100%;
      }

      .info-box {
        flex: 1 1 100%;
      }
    }
     </style>

  </head>
<body>

  <?php include 'header.php'; ?>


  <h2>Contact Us</h2>

  <div class="contact-form">
    <form onsubmit="handleSubmit(event)">
      <div class="form-group">
        <label for="name" class="required">Name</label>
        <input type="text" id="name" name="name" required />
      </div>

      <div class="form-group">
        <label for="email" class="required">Email</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="phone" class="required">Phone Number</label>
        <input type="text" id="phone" name="phone" required />
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" />
      </div>

      <div class="form-group-full">
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>
      </div>

       <div class="checkbox-group">
    <label>
      <input type="checkbox" id="consentCheckbox" />
      Yes, I agree to receiving marketing communications (news, updates, offers) and online advertising tailored to my interests from Pulcher via emails, SMS, WhatsApp, etc.
      <a href="#" target="_blank">Privacy Notice</a>
    </label>
  </div>

      <button type="submit" class="send-btn">Send</button>
    </form>
  </div>

  <div class="info-section">
    <div class="info-box">
      <div class="icon-badge">👥</div>
      <h3>CUSTOMER SERVICE</h3>
      <div class="underline"></div>
      <p>Contact Number</p>
      <input type="text" value="📞 +91 7070 36 2424" readonly />
      <p>Email Us</p>
      <input type="text" value="📧 care@pulchercosmetic.com" readonly />
    </div>

    <div class="info-box">
      <div class="icon-badge">📍</div>
      <h3>Order Tracker</h3>
      <div class="underline"></div>
      <p>Track Order</p>
      <button class="track-button">📍 Click here to track your order</button>
    </div>
  </div>











  <script>
    function handleSubmit(event) {
    event.preventDefault(); // Prevent the default form submission

    const consentCheckbox = document.getElementById("consentCheckbox");

    // Check if checkbox is ticked
    if (!consentCheckbox.checked) {
      alert("Please agree to the marketing communications before submitting the form.");
      return false;
    }

    // Optional: Validate required inputs manually (if needed)
    const requiredFields = ["name", "email", "phone"];
    for (const id of requiredFields) {
      const input = document.getElementById(id);
      if (!input.value.trim()) {
        alert("Please fill all required fields.");
        return false;
      }
    }

    // If all validations pass
    alert("Form submitted successfully! (This is a placeholder — hook up backend here.)");
    // Optionally, you could reset the form like this:
    // event.target.reset();
  }
  </script>








  <?php include 'footer.php'; ?>

</body>
</html>