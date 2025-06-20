<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account Details</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .form-container {
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 24px;
      font-size: 22px;
      font-weight: bold;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      padding: 12px;
      font-size: 16px;
      border: 1px solid #000;
      border-radius: 8px;
      outline: none;
      width: 100%;
    }

    .checkbox-container {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      font-size: 14px;
      text-align: left;
    }

    .checkbox-container input[type="checkbox"] {
      margin-top: 4px;
    }

    button {
      margin-top: 10px;
      width: 100%;
      padding: 14px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    button i {
      font-size: 14px;
    }

    @media (max-width: 480px) {
      h2 {
        font-size: 20px;
      }

      input[type="text"],
      input[type="email"],
      input[type="tel"] {
        font-size: 15px;
        padding: 10px;
      }

      button {
        padding: 12px;
      }
    }
    .btn-link {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  width: 100%;
  padding: 14px;
  background-color: black;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
}

.btn-link i {
  font-size: 14px;
}

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>

  <?php include 'header.php'; ?>

  <main>
    <div class="form-container">
      <h2>Enter Account Details</h2>
      <form>
        <input type="text" placeholder="First Name" required />
        <input type="text" placeholder="Last Name" required />
        <input type="email" placeholder="Email" required />
        <input type="tel" placeholder="Mobile Number" required />

        <label class="checkbox-container">
          <input type="checkbox" checked />
          <span>keep me updated on new updates,<br/>exclusive offers</span>
        </label>

       <a href="afterlogin.php" class="btn-link" onclick="validateForm(event)">
  Update <i class="fa fa-arrow-right"></i>
</a>

      </form>
    </div>
  </main>

  <?php include 'footer.php'; ?>
 

 
<script>
  function validateForm(event) {
    event.preventDefault();

    const firstName = document.querySelector('input[placeholder="First Name"]').value.trim();
    const lastName = document.querySelector('input[placeholder="Last Name"]').value.trim();
    const email = document.querySelector('input[placeholder="Email"]').value.trim();
    const phone = document.querySelector('input[placeholder="Mobile Number"]').value.trim();

    if (!firstName || !lastName || !email || !phone) {
      alert("Please fill in all the fields.");
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
      alert("Please enter a valid email address.");
    } else if (!/^[6-9]\d{9}$/.test(phone)) {
      alert("Please enter a valid 10-digit mobile number.");
    } else {
      window.location.href = "afterlogin.php"; // Redirect if all is valid
    }
  }
</script> 	
</body>
</html>
