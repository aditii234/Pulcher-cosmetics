<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Refer & Earn</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f5f5;
    }

    .refer-container {
      max-width: 800px;
      margin: 30px auto;
      background: white;
      border-radius: 10px;
      padding: 20px 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .back-button {
      font-size: 18px;
      margin-bottom: 20px;
      display: inline-block;
      cursor: pointer;
    }

    h2 {
      margin-top: 0;
      font-size: 24px;
    }

    .highlight {
      color: green;
      font-weight: bold;
    }

    .subtext {
      color: #555;
      margin: 10px 0 20px;
    }

    .invite-code {
      font-weight: bold;
      font-size: 20px;
      margin: 10px 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .copy-icon {
      cursor: pointer;
      font-size: 16px;
    }

    .share-buttons {
      display: flex;
      gap: 10px;
      margin: 20px 0;
    }

    .share-button {
      flex: 1;
      border: 1px solid #ccc;
      padding: 12px;
      border-radius: 8px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      background: #fff;
      font-weight: 600;
      transition: background 0.2s;
    }

    .share-button:hover {
      background: #f0f0f0;
    }

    .note {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .how-it-works {
      border-top: 1px solid #ccc;
      padding-top: 20px;
    }

    .step {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      margin: 15px 0;
    }

    .step-icon {
      font-size: 20px;
      margin-top: 3px;
    }

    .step-text {
      font-size: 14px;
      color: #444;
    }

    @media (max-width: 600px) {
      .refer-container {
        padding: 20px;
      }

      .invite-code {
        font-size: 18px;
        flex-wrap: wrap;
      }

      .share-buttons {
        flex-direction: column;
      }

      .share-button {
        width: 100%;
      }

      .step {
        flex-direction: column;
        align-items: flex-start;
      }

      .step-icon {
        margin-bottom: 5px;
      }
    }
    a{
      text-decoration: none;
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>


<div class="refer-container">
  <a href="afterlogin.php" class="back-button">← Refer & Earn</a>


  <h2>Refer a friend and you both get <span class="highlight">₹100</span></h2>
  <p class="subtext">Spread the goodness to your friends and family by gifting them ₹100 for their first order. What’s more? You earn ₹100 as well on their first order.</p>

  <div>
    <label>Invite Code</label>
    <div class="invite-code">
      <span id="referralCode">HB4567SGHJJJH</span>
      <span class="copy-icon" onclick="copyCode()">📋</span>
    </div>
  </div>

  <label>Invite Via</label>
  <div class="share-buttons">
    <div class="share-button" onclick="shareWhatsApp()">📱 WhatsApp</div>
    <div class="share-button" onclick="shareMore()">🔗 More options</div>
  </div>

  <p class="note">To multiply your earnings, share your code across social media groups</p>

  <div class="how-it-works">
    <h3>How it Works</h3>

    <div class="step">
      <div class="step-icon">🔗</div>
      <div class="step-text">Share the referral link with your friends.</div>
    </div>

    <div class="step">
      <div class="step-icon">👤</div>
      <div class="step-text">Your friend will sign up through your shared link.</div>
    </div>

    <div class="step">
      <div class="step-icon">💸</div>
      <div class="step-text">
        Your friend will get ₹50 discount on their first order. You will get ₹100 discount on your next order after their first order is successfully delivered.
      </div>
    </div>
  </div>
</div>

<script>
  function copyCode() {
    const code = document.getElementById('referralCode').innerText;
    navigator.clipboard.writeText(code).then(() => {
      alert('Referral code copied!');
    });
  }

  function shareWhatsApp() {
    const code = document.getElementById('referralCode').innerText;
    const message = `Hey! Use my referral code ${code} and get ₹100 on your first order. Join now!`;
    const url = `https://wa.me/?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
  }

  function shareMore() {
    const code = document.getElementById('referralCode').innerText;
    const text = `Hey! Use my referral code ${code} and get ₹100 on your first order.`;

    if (navigator.share) {
      navigator.share({
        title: 'Referral Code',
        text: text,
        url: window.location.href
      }).catch(err => console.log('Share canceled:', err));
    } else {
      alert('Sharing not supported in your browser. Please copy the referral code manually.');
    }
  }
</script>


<?php include 'footer.php'; ?>

</body>
</html>
