<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>OTP Verification</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .otp-container {
      text-align: center;
      max-width: 400px;
      width: 100%;
      margin: 40px auto;
      padding: 0 20px;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 8px;
    }

    p {
      color: gray;
      margin-bottom: 10px;
    }

    .email-display {
      color: #555;
      margin-bottom: 20px;
    }

    .edit-icon {
      cursor: pointer;
      font-size: 14px;
    }

    .otp-inputs {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .otp-inputs input {
      width: 40px;
      height: 50px;
      text-align: center;
      font-size: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      outline: none;
    }

    .otp-inputs input:focus {
      border-color: #333;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    }

    .verify-button {
      width: 100%;
      padding: 12px;
      background-color: black;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }

    .success-message, .error-message {
      margin: 20px 0;
      padding: 12px;
      border-radius: 5px;
      display: none;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .success-message {
      border: 1px solid #28a745;
      color: #28a745;
    }

    .error-message {
      border: 1px solid #dc3545;
      color: #dc3545;
    }

    .recaptcha {
      border: 1px solid #ccc;
      border-radius: 4px;
      height: 70px;
      margin: 20px 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f9f9f9;
    }

    .resend-section {
      font-size: 14px;
      color: #777;
      margin-top: 10px;
    }

    .resend-section a {
      color: #333;
      font-weight: bold;
      text-decoration: underline;
      pointer-events: none;
      opacity: 0.5;
    }

    .resend-section a.enabled {
      pointer-events: auto;
      opacity: 1;
    }

    .timer {
      font-weight: bold;
      margin-top: 5px;
    }

    @media (max-width: 480px) {
      .otp-inputs input {
        width: 35px;
        height: 45px;
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="otp-container">
    <h2>Enter OTP</h2>
    <p>The OTP has been sent to your email</p>
    <div class="email-display">
      <a href="logingmail.php" class="edit-link">
        example@gmail.com <i class="fa fa-edit edit-icon"></i>
      </a>
    </div>

    <div class="otp-inputs">
      <input type="text" maxlength="1" />
      <input type="text" maxlength="1" />
      <input type="text" maxlength="1" />
      <input type="text" maxlength="1" />
      <input type="text" maxlength="1" />
      <input type="text" maxlength="1" />
    </div>

    <button class="verify-button" onclick="verifyOTP()">
      Verify OTP <i class="fa fa-arrow-right"></i>
    </button>

    <div class="success-message" id="successMessage">
      <i class="fa fa-check-circle"></i> OTP verified successfully!
    </div>
    <div class="error-message" id="errorMessage">
      <i class="fa fa-exclamation-circle"></i> Invalid OTP. Please try again.
    </div>

    <div class="recaptcha">I'm not a robot (reCAPTCHA placeholder)</div>

    <div class="resend-section">
      Didn’t Receive the OTP?<br/>
      <a id="resendLink">Resend OTP</a>
      <div class="timer" id="timer">00:30</div>
    </div>
  </div>

  <script>
    const inputs = document.querySelectorAll('.otp-inputs input');
    const resendLink = document.getElementById('resendLink');
    const timerEl = document.getElementById('timer');
    const successMsg = document.getElementById('successMessage');
    const errorMsg = document.getElementById('errorMessage');
    let timeLeft = 30;

    // Auto-tab and backspace support
    inputs.forEach((input, index) => {
      input.addEventListener('input', () => {
        input.value = input.value.replace(/[^0-9]/g, '');
        if (input.value && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !input.value && index > 0) {
          inputs[index - 1].focus();
        }
      });
    });

    function verifyOTP() {
      const enteredOTP = Array.from(inputs).map(input => input.value).join('');
      const isValidOTP = /^\d{6}$/.test(enteredOTP);

      if (isValidOTP) {
        successMsg.style.display = 'flex';
        errorMsg.style.display = 'none';
        setTimeout(() => {
          window.location.href = "loginaccount.php";
        }, 1500);
      } else {
        errorMsg.style.display = 'flex';
        successMsg.style.display = 'none';
      }
    }

    function updateTimer() {
      timeLeft--;
      timerEl.textContent = `00:${timeLeft < 10 ? '0' : ''}${timeLeft}`;
      if (timeLeft <= 0) {
        clearInterval(timerInterval);
        resendLink.classList.add('enabled');
      }
    }

    resendLink.addEventListener('click', () => {
      if (!resendLink.classList.contains('enabled')) return;
      resendLink.classList.remove('enabled');
      timeLeft = 30;
      timerEl.textContent = "00:30";
      timerInterval = setInterval(updateTimer, 1000);
      successMsg.style.display = 'flex';
      errorMsg.style.display = 'none';
    });

    let timerInterval = setInterval(updateTimer, 1000);
  </script>

  <?php include 'footer.php'; ?>

</body>
</html>
