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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product: Designs</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/ref.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <head>
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
      <br><br><div>
        <h1>Regular <span class="colored-word">Kurta Sets</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>

        <div class="kurti">
          <img src="images/products-img/women/kurti1.jpg" id="AKS  Kurta with Plazzzo & Dupatta || Rs.1799" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/kurti2.jpg" id="Nayo Women Solid Kurta with Trouser || Rs.1649" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/kurti3.jpg" id="AKS Printed Staight Kurta || Rs.659" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/kurti4.jpg" id="Fabindia Slim Fit Straight Kurta || Rs.1990" alt="" onclick="add(this.id)">
        </div>
        </div>
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
    <script src="js/nav.js"></script>
    <script src="js/products.js"></script>
  </body>
</html>