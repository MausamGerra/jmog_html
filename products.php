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
    <title>Products</title>
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
      <h2 class="main-head-of-products">Everyone Has A Style Statment<br>
        <span class="colored-word-bigger-size">Lets Find Yours!</span>
      </h2>

      <br>
      <div class="bg-images">
        <a href="products.php"><img src="images/products-img/1st.jpeg" alt=""></a>
      </div>
      <div>
        <h1>Regular <span class="colored-word">Casuals</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>

        <div class="kurti">
          <img src="images/products-img/women/kurti1.jpg" id="AKS  Kurta with Plazzzo & Dupatta || Rs.1799" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/kurti2.jpg" id="Nayo Women Solid Kurta with Trouser || Rs.1649" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/kurti3.jpg" id="AKS Printed Staight Kurta || Rs.659" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/kurti4.jpg" id="Fabindia Slim Fit Straight Kurta || Rs.1990" alt="" onclick="add(this.id)">
        </div> 
        <div class="western">
          <img src="images/products-img/women/western1.jpg"  id="Ives Solid Shirt Style Top || Rs.549" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/western2.jpg"  id="Style Quotient Solid Top || Rs.554" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/western3.jpg"  id="HERE&NOW Printed A-Line Top || Rs.549" alt="" onclick="add(this.id)">
          <img src="images/products-img/women/western4.jpg"  id="SASSAFRAS Ruffled Shirt Style Top || Rs. 549" alt="" onclick="add(this.id)">
        </div>
        

        <h1>Specials For <span class="colored-word">Celeberation</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>

        <div class="shirts">
          <img src="images/products-img/men/11.jpeg"  id="Difference of Opinion Printed Shirt || Rs.449" alt="" onclick="add(this.id)">
          <img src="images/products-img/men/2.jpeg"  id="Moda Rapido Printed Round Neck T-shirt || Rs.486" alt="" onclick="add(this.id)">
          <img src="images/products-img/men/3.jpeg"  id="DILLINGER Colourblocked Round Neck T-shirt || Rs.404" alt="" onclick="add(this.id)">
          <img src="images/products-img/men/4.jpeg"  id="Roadster T-shirt with Shoulder patch || Rs.519" alt="" onclick="add(this.id)">
        </div>
        <div class="jeans">
          <img src="images/products-img/men/5.jpeg"  id="HIGHLANDER Men Slim Fit Jeans || Rs.874" alt="" onclick="add(this.id)">
          <img src="images/products-img/men/6.jpeg"  id="Roadster Men Super Skinny Fit Jeans || Rs.1199" alt="" onclick="add(this.id)">
          <img src="images/products-img/men/7.jpeg"  id="Calvin Klein Jeans Mean Slim Straight Jeans || Rs.9599" alt="" onclick="add(this.id)">
          <img src="images/products-img/men/8.jpeg"  id="LOCOMOTIVE Mean Slim Fit Jeans || Rs.999" alt="" onclick="add(this.id)">
        </div>

        <h4 class="sry-msg">Lets bring to life<span class="colored-word"> Your Imagination Together</span></h4>
        <center><hr class="last-hr-of-product"></center>
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
    <script src="js/nav.js"></script>
    <script src="js/products.js"></script>
  </body>
</html>
