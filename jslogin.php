<?php
    session_start();
    require_once('connection.php');
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $query="select * from user where user_email=? and user_pswd=? LIMIT 1";
    $stmtselect=$db->prepare($query);
    $result=$stmtselect->execute([$email, $pswd]);
    if($result){
        $user=$stmtselect->fetch(PDO::FETCH_ASSOC);
        if($stmtselect->rowCount()>0){
            $_SESSION['userlogin']=$user;
            echo "Success";
        }
        else{
            echo "There is no user for that combo";
        }
    }
    else{
        echo "There were errors while connecting to database.";
    }           
?>