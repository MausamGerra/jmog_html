<?php
    session_start();
	  if(!isset($_SESSION['userlogin'])){
      header("Location: loginew.php");
    }
    if(isset($_GET['logout'])){
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header("Location: loginew.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JM's Wardrobe</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nova+Cut|Nova+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/ref.css">
</head> 
<body>  
  <!-- navbar -->
    <nav>
      <div class="logo">
        <h3><a href="jm.php" class="logo-name">Jaanvi Mutreja</a></h3>
      </div>

      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="aboutme.php">About Jaanvi</a></li>
        <li><a href="contactnew.php">ContactUs</a></li>
        <li><a href="logout.php?logout=true" id="logout">Logout</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- ALL THE LINKS WILL GO TO categories.html -->
      <div class="index-main-img">
        <a href="jm.php"><img id="main-index-img" src="images/index-img/Off-the-Wall.jpg" alt="" srcset=""></a> 
      </div>
      
      <br>

      <div class="index-offers-img">
        <a href="kurtas.php"><img src="images/index-img/kurtasets.jpg" alt=""></a>
        <a href="lehengas.php"><img src="images/index-img/lehengas.jpg" alt=""></a>
        <a href="sarees.php"><img src="images/index-img/saareog.jpg" alt=""></a>
        <a href="westerns.php"><img src="images/index-img/westerns.jpg" alt=""></a>
      </div>

      <br><br>

      <div class="index-grid-img-1">
        <img src="images/index-img/young1.jpeg" alt="" srcset=""></a>
        <img src="images/index-img/conquerr.jpeg" alt="" srcset=""></a>
        <img src="images/index-img/sun1.jpeg" alt=""></a>
        <h4 class="info-of-img-below">For the Young, Wild & Stylish</h4></a>    
        <h4 class="info-of-img-below">Stands out like the Sun</h4></a>      
        <h4 class="info-of-img-below">Just like your way to Conquer</h4></a>
      </div>
    <!-- ALL THE LINKS WILL GO TO categories.html -->
        
      <br> <br> <br>
      <h2 class="head-of-offer">STYLES TO STEAL</h2><br>
      <p class="para-of-offer">Inspired by influencer</p>

      <br><br>

      <div class="index-grid-img-3">
        <a href="products.php"><img src="images/index-img/girl11.png" alt=""></a>
        <a href="products.php"><img src="images/index-img/girl22.png" alt="" srcset=""></a>
        <a href="products.php"><img src="images/index-img/girl33.png" alt=""></a>
        <a href="products.php"><img src="images/index-img/girl44.png" alt="" srcset=""></a>
    </div>
    <!-- ALL THE LINKS WILL GO TO products.html -->

      <br><br>

    <!-- FOOTER -->
    <div class="footer-container">
      <div class="footer-1">
        <a href="index.php"><h2>Jaanvi Mutreja🥂</h2></a>
        <br>
        <p><b>ONLINE SHOWCASE</b></p>
          <h6>
            Women of all age groups <br><br>
            JM Exclusive<br><br>
          </h6>
      </div>

      <div class="footer-2">
        <p><b>USEFUL LINKS</b></p>
        <h6>
         <a id="ref" href="https://www.facebook.com/jaanvi.mutreja">Facebook</a><br><br>
         <a id="ref" href="https://instagram.com/jaanvi_asfaa_textiles?utm_medium=copy_link">Instagram</a><br><br>
         Privacy Policy<br><br>
        </h6>
      </div>

      <div class="footer-3">
        <p><b>100% Original</b> Guaranteed</p>
          <h6>
            for all products at jaanvimutreja.com
          </h6>
        <p><b>To book Appointments</b> use</p>
          <h6>
          the 
        <a id="ref" href="contactnew.php">Contact Us</a> page
        </h6>
        <p><b>For Any Issues</b> contact creator of website</p>
          <h6>
            - siddhantkhemlani@gmail.com
          </h6>
        <br><br>
      </div>
      
    </div>
    <p class="copy-right">Thank You For Visiting , Copyright &copy; 2022</p>
    <br>
  <!-- FOOTER -->

  <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>