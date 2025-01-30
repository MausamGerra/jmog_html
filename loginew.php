<?php
    session_start();
	if(isset($_SESSION['userlogin'])){
        header("Location: jm.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/loginew.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5bdcb5c5a0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    
</head>
<body style="background-color: #ffffff ;">
    <!-- navbar -->
    <nav>
      <div class="logo">
        <h3><a class="logo-name">Jaanvi Mutreja</a></h3>
      </div>
    </nav>
    <!-- navbar --> 
    <form action="loginew.php" method="POST">
    <div class="container">
        <h1>Log In</h1>
        <div class="box">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
        </div>
        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="password" id="password" placeholder="Enter Your Pass" required>
        </div>
        <input type="submit" name="submit" class="btn" id="login" value="Log In"/>    
        <button class="btn" onclick="location.href='signup.php'">Sign Up</button>
    </div>
    </form>
    <script type="text/javascript">
        $(function(){
            $('#login').click(function(e){
                var valid=this.form.checkValidity();
                if(valid){
                    var email=$('#email').val();
                    var pswd=$('#password').val();
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "jslogin.php",
                        data: {email: email, pswd: pswd},
                        success: function(data){
                            if($.trim(data)==="Success"){
                                setTimeout('window.location.href="jm.php"',2000);
                            }
                        },
                        error: function(data){
                            alert("There were errors while saving the data..");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>    
