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
    <title>Queries? Conact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen|Nova+Cut&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/ref.css">
    <script src="https://kit.fontawesome.com/5bdcb5c5a0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<style>
   .slogan{
    font-family: 'Beth Ellen', cursive;
    color:black;
    font-size: 36px;
  }
   .author{
    font-family: 'Nova Cut', cursive;
    color:black;
  } 
  .contact-info{
    padding-top:170px;
  }
</style>
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
    <!--contactform-->
    <div class="container">
        <form name="Contact_form" method="POST" action="feedback.php">
         <h2>Get In Touch With Me</h2>
          <div class="row100">
           <div class="col">
            <div class="inputbox">
             <input type="text" name="fname" id="fname" required="required">
              <span class="text">First Name</span>
              <span class="line"></span>
            </div>
           </div>
           <div class="col">
            <div class="inputbox">
             <input type="text" name="lname" id="lname" required="required">
              <span class="text">  Last Name</span>
              <span class="line"></span>
            </div>
           </div>
          </div>
          <div class="row100">
           <div class="col">
            <div class="inputbox">
             <input type="text" name="email" id="email" required="required">
              <span class="text">Email</span>
              <span class="line"></span>
            </div>
           </div>
           <div class="col">
            <div class="inputbox">
             <input type="text" name="phno" id="phno" required="required">
              <span class="text">   Mobile</span>
              <span class="line"></span>
            </div>
           </div>
          </div>
          <div class="row100">
           <div class="col">
            <div class="inputbox textarea">
             <textarea required="required" name="msg" id="msg"></textarea>
              <span class="text">Please Type In Your Message..</span>
              <span class="line"></span>
            </div>
           </div>	  
         </div>
          <div class="row100">
           <div class="col">
            <input type="submit" id="feedback" value="Send">
           </div>
          </div>
          </form>
        </div>
    <!--contactform-->
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
    <script type="text/javascript">
        $(function(){
            $('#feedback').click(function(e){
                var valid=this.form.checkValidity();
                if(valid){
                    var fname=$('#fname').val();
                    var lname=$('#lname').val();
                    var email=$('#email').val();
                    var phno=$('#phno').val();
                    var msg=$('#msg').val();
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "feedback.php",
                        data: {fname: fname, lname: lname, email: email, phno: phno, msg: msg},
                        success: function(data){
                            Swal.fire({
                                'title': 'Feedback Sent Successfully!!',
                                'text': data,
                                'type': 'success'
                            });
                        },
                        error: function(data){
                            Swal.fire({
                                'title': 'Errors!!',
                                'text': 'There were errors while saving the feedback..',
                                'type': 'error'
                            });
                        }
                    });
                }
                else{
                }
            });
        });
    </script>
  </body>
</html>