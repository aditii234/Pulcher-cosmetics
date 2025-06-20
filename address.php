<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Address</title>
  <style>
    
    h3 {
      margin-bottom: 20px;
    }

    .address-section {
      max-width: 700px;
      margin: auto;
    }

    .address-card {
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 15px;
      margin-bottom: 15px;
      position: relative;
      background: #fff;
    }

    .address-header {
      font-weight: bold;
    }

    .address-meta {
      font-size: 14px;
      color: #555;
      margin: 5px 0;
    }

    .address-actions {
      margin-top: 10px;
      display: flex;
      gap: 15px;
    }

    .address-actions a {
      text-decoration: none;
      color: #000;
      font-weight: 500;
    }

    .badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #eee;
      padding: 3px 8px;
      border-radius: 4px;
      font-size: 12px;
    }

    .add-address {
      display: block;
      width: 100%;
      text-align: center;
      border: 1px solid #ccc;
      padding: 12px;
      border-radius: 5px;
      font-weight: bold;
      background: #fff;
      margin-top: 10px;
      text-decoration: none;
      color: #000;
    }

    .support-section {
      text-align: center;
      margin-top: 40px;
    }

    .support-section a button {
      padding: 10px 20px;
      background: #f1ebe7;
      border: none;
      border-radius: 5px;
      font-weight: 500;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      .address-actions {
        flex-direction: column;
        gap: 8px;
      }

      .badge {
        top: 5px;
        right: 5px;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

<br>
<div class="address-section">
    <h3>2 Saved Address</h3>

    <div class="address-card">
      <div class="address-header">Sunil Pawar <span style="font-size: 12px;">(Default)</span></div>
      <div class="address-meta">Plot no - 33, sector - 8, Kharghar, Navi Mumbai, Maharashtra - 400709</div>
      <div class="address-meta">8657745515</div>
      <div class="address-actions">
        <a href="addaddress.php">Edit</a>
        <a href="/remove-address">Remove</a>
      </div>
    </div>

    <div class="address-card">
      <div class="badge">Home</div>
      <div class="address-header">Sunil Pawar</div>
      <div class="address-meta">Plot no - 33, sector - 8, Kharghar, Navi Mumbai, Maharashtra - 400709</div>
      <div class="address-meta">8657745515</div>
      <div class="address-actions">
        <a href="addaddress.php">Edit</a>
        <a href="/remove-address">Remove</a>
      </div>
    </div>

    <a href="addaddress.php" class="add-address">+ ADD NEW ADDRESS</a>

    <div class="support-section">
      <p>Have Queries or Concern?</p>
      <br>
      <a href="contactus.php"><button>CONTACT US</button></a>
    </div>
  </div>
  <br>




<?php include 'footer.php'; ?>

</body>
</html>
