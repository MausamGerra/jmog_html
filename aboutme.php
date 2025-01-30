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
    <title>The Journey !!</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nova+Cut|Nova+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/aboutme.css">
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
    <div class="pimg1">
        <div class="ptext">
         <span class="border">
           Costume Stylist.
         </span>
        </div> 
       </div>
       
       <section class="section section-light">
        <h2>She Loves Sketching Desgins !</h2>
        <p>Jaanvi since her childhood was always fond of sketching, slowly and gradually she developed interest in desgins and started using it for her clients.
        She used her skills for the user to easy visualize the design and made it easy to explain to her co-workers as well. </p>
        
       </section>
       
       <div class="pimg2">
        <div class="ptext">
         <span class="border">
           Rias Creations
         </span>
        </div> 
       </div>
       
       <section class="section section-dark">
        <h2>This Is Where She Started Her Journey !</h2>
        <p>Jaanvi started her fashion desgining carrer in late 1990s along with her siblings and created a well known boutique called Rias Creations.
         She invested in this venture for many years until her marriage and made uncountable Desgins for Women of all age and for any occassion.</p>
        
       </section>
       
       <div class="pimg3">
        <div class="ptext">
         <span class="border">
           Success In The Venture !!       
          </span>
        </div> 
       </div>
       
       <section class="section section-light">
        <h2>The Family Business !</h2>
        <p>Rias Creations was a huge success as it was able to bring Jaanvi's family from rags to riches but it was now time to think even bigger.
          So after 15 years of struggle the family was able to open branches of Ria's Creations operated by Jaanvi and her brother along with other family members.</p>
        
       </section>
       
       <div class="pimg4">
        <div class="ptext">
         <span class="border">
           The Opportunity !!
         </span>
        </div> 
       </div>
       
       <section class="section section-dark">
        <h2>The Shift to Dubai !</h2>
        <p>In 2009, Jaanvi got married and had shifted to Dubai leaving her family business but no one could keep her off from desgining for long.
          3 years after marriage Jaanvi was able to start a Boutique of her own in the Famous Meena Bazar. The Dream was right on track.
        </p>
        
       </section>
       
       <div class="pimg5">
        <div class="ptext">
         <span class="border">
          The Asfaa Textiles !!
         </span>
        </div> 
       </div>
       <section class="section section-light">
        <h2>The Present and The Future !</h2>
        <p>Since then Jaanvi has dedicated hours and her hadwork has paid lavishly.
          In Addition to everything Jaanvi is now gonna compete in Miss Global Indonesia by collaberating with one of the praticipants.
        </p>
       </section>
       
       <div class="pimg6">
        <div class="ptext">
         <span class="border">
           We Wish Her the Best !!
         </span>
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
          <a id="ref" href="https://www.facebook.com/jaanvi.mutreja" color="red">Facebook</a><br><br>
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