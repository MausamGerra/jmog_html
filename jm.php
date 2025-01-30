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
    <title>Welcome to JM</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/merlin.css">
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
 
    <h1 class="main-head-of-color-gold">Creativity At Its Best!</h1>
        <center><hr></center> 
    <div class="merlin-grids1">
      <a href="index.php"><img src="images/merlin-img/merlin-1.png" alt=""></a>
     <img src="images/merlin-img/quote1.png" alt="">
      <a href="index.php"><img src="images/merlin-img/merlin-2.png" alt=""></a>
    </div>

    <br><br>

    <div class="merlin-grids2">
      <a href="index.php"><img src="images/merlin-img/merlin-5.jpg" alt=""></a>
      <img src="images/merlin-img/quote2.png" alt="">
      <a href="index.php"><img src="images/merlin-img/d.jpg" alt=""></a>
    </div>

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

