<header>
  <!-- FONT AWESOME (place here so it's loaded early) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      font-family: 'Arial', sans-serif;
    }

    .top-strip {
      background-color: #eee7e1;
      text-align: center;
      padding: 10px 0;
      font-size: 16px;
    }

    .top-strip a {
      color: #000;
      text-decoration: underline;
      font-weight: bold;
      margin-left: 8px;
    }

    .main-header {
      background-color: #fff;
      padding: 18px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      z-index: 1001;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 6px;
      cursor: pointer;
    }

    .hamburger div {
      width: 30px;
      height: 4px;
      background-color: #000;
    }

    .logo {
      font-size: 32px;
      font-weight: bold;
      letter-spacing: 2px;
      color: #000;
    }

    .search-box {
      flex: 1;
      margin: 0 30px;
      position: relative;
      max-width: 400px;
    }

    .search-box input {
      width: 100%;
      padding: 12px 45px 12px 15px;
      border: none;
      border-radius: 30px;
      background-color: #eee7e1;
      font-size: 16px;
    }

    .search-box i {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #000;
      font-size: 18px;
    }

    .icons {
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .icons i {
      font-size: 28px;
      color: #000;
      cursor: pointer;
    }

    .nav-bar {
      background-color: #eee7e1;
      display: flex;
      justify-content: center;
      gap: 60px;
      padding: 15px 0;
    }

    .nav-bar a {
      color: #000;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
    }

    .nav-bar a:hover {
      text-decoration: underline;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #eee7e1;
      min-width: 250%;
      z-index: 1002;
      top: 100%;
      left: 0;
      border-radius: 5px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .dropdown:hover .dropdown-content,
    .dropdown-content:hover {
      display: block;
    }

    .dropdown-content a {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 16px;
      color: #000;
      text-decoration: none;
      font-size: 15px;
    }

    .dropdown-content a img {
      width: 30px;
      height: 30px;
      object-fit: cover;
      border-radius: 50%;
    }

    .dropdown-content a:hover {
      background-color: #e1d8cf;
    }

    /* Mobile Styles */
    @media (max-width: 991px) {
      .main-header {
        padding: 22px 24px;
      }

      .hamburger {
        display: flex;
      }

      .logo {
        font-size: 36px;
      }

      .icons i {
        font-size: 30px;
      }

      .search-box {
        display: none;
      }

      .nav-bar {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 80%;
        max-width: 320px;
        background-color: #eee7e1;
        flex-direction: column;
        align-items: flex-start;
        padding: 100px 20px 20px 20px;
        gap: 20px;
        transition: 0.3s ease-in-out;
        z-index: 1000;
        overflow-y: auto;
      }

      .nav-bar.active {
        left: 0;
      }

      .nav-bar a {
        font-size: 18px;
        padding: 8px 0;
      }

      .dropdown:hover .dropdown-content {
        position: static;
        display: block;
        background-color: transparent;
        box-shadow: none;
        padding-left: 10px;
      }

      .dropdown-content a {
        padding: 6px 0;
        font-size: 16px;
      }
    }
  </style>

  <!-- Top Strip -->
  <div class="top-strip">
    Buy 2 Get 1 Free <a href="bigoffers.php">Shop Now</a>
  </div>

  <!-- Main Header -->
  <div class="main-header">
    <div class="hamburger" onclick="toggleMenu(event)">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <div class="logo">PULCHER</div>

    <div class="search-box">
      <input type="text" placeholder="Search Here">
      <i class="fa fa-search"></i>
    </div>

    <div class="icons">
  <a href="loginmobile.php"><i class="fa fa-user"></i></a>
  <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
</div>

  </div>

  <!-- Nav Bar -->
  <div class="nav-bar" id="navBar">
    <a href="index.php">Home</a>

    <div class="dropdown">
      <a href="#">Car Perfume <i class="fa fa-caret-down"></i></a>
      <div class="dropdown-content">
        <a href="#"><img src="images/rose.jpg" alt="Rose"> Pulcher Rose</a>
        <a href="#"><img src="images/musk.jpg" alt="Musk"> Pulcher Musk</a>
        <a href="productpage.php"><img src="images/aqua.jpg" alt="Aqua"> Pulcher Aqua</a>
        <a href="#"><img src="images/lavender.jpg" alt="Lavender"> Pulcher Lavender</a>
        
      </div>
    </div>

    <a href="shopbycategory.php">Shop by Category</a>
    <a href="about.php">All About Pulcher</a>
    <a href="contactus.php">Contact Us</a>
  </div>

  <script>
    const navBar = document.getElementById('navBar');

    function toggleMenu(event) {
      event.stopPropagation();
      navBar.classList.toggle('active');
    }

    document.body.addEventListener('click', function (event) {
      if (!navBar.contains(event.target) && !event.target.closest('.hamburger')) {
        navBar.classList.remove('active');
      }
    });
  </script>
</header>
