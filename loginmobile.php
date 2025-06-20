<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: #fff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-container {
      max-width: 600px;
      width: 100%;
      text-align: center;
      padding: 30px;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      color: gray;
      margin-bottom: 20px;
    }

    .phone-input {
      display: flex;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 20px;
      overflow: hidden;
    }

    .phone-input select {
      padding: 12px;
      font-size: 16px;
      border: none;
      outline: none;
      background: #fff;
      min-width: 150px;
      flex-shrink: 0;
    }

    .phone-input input {
      padding: 12px;
      font-size: 16px;
      border: none;
      outline: none;
      flex: 1;
      background: #fff;
    }

    .otp-button {
      width: 100%;
      padding: 12px;
      background-color: black;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-bottom: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
      text-decoration: none;
    }

    .otp-button:hover {
      opacity: 0.9;
    }

    .recaptcha-box {
      border: 1px solid #ccc;
      border-radius: 4px;
      height: 70px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f2f2f2;
    }

    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      margin-bottom: 20px;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid #ccc;
    }

    .divider:not(:empty)::before {
      margin-right: 10px;
    }

    .divider:not(:empty)::after {
      margin-left: 10px;
    }

    .social-login {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }

    .social-login a {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 25px;
      background-color: white;
      font-size: 14px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      min-width: 140px;
      text-decoration: none;
      color: inherit;
    }

    .social-login a:hover {
      background-color: #f9f9f9;
    }

    .privacy-text {
      font-size: 12px;
      color: #333;
    }

    @media (max-width: 480px) {
      .social-login {
        flex-direction: column;
      }

      .social-login a {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <?php include 'header.php'; ?>

  <main>
    <div class="login-container">
      <h2>Login with OTP</h2>
      <p>Enter your log in details</p>

      <div class="phone-input">
        <select id="countryCode">
          <option value="+61">🇦🇺 Australia (+61)</option>
          <option value="+55">🇧🇷 Brazil (+55)</option>
          <option value="+1">🇨🇦 Canada (+1)</option>
          <option value="+86">🇨🇳 China (+86)</option>
          <option value="+33">🇫🇷 France (+33)</option>
          <option value="+49">🇩🇪 Germany (+49)</option>
          <option value="+91">🇮🇳 India (+91)</option>
          <option value="+39">🇮🇹 Italy (+39)</option>
          <option value="+81">🇯🇵 Japan (+81)</option>
          <option value="+82">🇰🇷 Korea (+82)</option>
          <option value="+52">🇲🇽 Mexico (+52)</option>
          <option value="+234">🇳🇬 Nigeria (+234)</option>
          <option value="+7">🇷🇺 Russia (+7)</option>
          <option value="+966">🇸🇦 Saudi Arabia (+966)</option>
          <option value="+65">🇸🇬 Singapore (+65)</option>
          <option value="+27">🇿🇦 South Africa (+27)</option>
          <option value="+34">🇪🇸 Spain (+34)</option>
          <option value="+971">🇦🇪 UAE (+971)</option>
          <option value="+44">🇬🇧 United Kingdom (+44)</option>
          <option value="+1">🇺🇸 United States (+1)</option>
        </select>
        <input type="tel" placeholder="Phone number" />
      </div>

      <a href="loginmobileotp.php" class="otp-button">
        Request OTP <i class="fa fa-arrow-right"></i>
      </a>

      <div class="recaptcha-box">
        I'm not a robot (reCAPTCHA placeholder)
      </div>

      <div class="divider">Or Login Using</div>

      <div class="social-login">
        <a href="logingmail.php"><i class="fa fa-envelope"></i> Email</a>
        <a href="login-google.php"><i class="fa-brands fa-google"></i> Google</a>
      </div>

      <p class="privacy-text">
        I accept that I have read & understand Privacy Policy and T&Cs.
      </p>
    </div>
  </main>

  <?php include 'footer.php'; ?>

</body>
</html>
