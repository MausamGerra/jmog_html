<?php
    require_once('connection.php');
	if(isset($_POST)){
		$email=$_POST['email'];
		$name=$_POST['name'];
		$phno=$_POST['phno'];
		$pswd=$_POST['pswd'];
		$cpswd=$_POST['cpswd'];
		$query="insert into user (user_email,user_name,user_phno,user_pswd,user_cpswd) values(?,?,?,?,?)";
		$stmtinsert=$db->prepare($query);
        $result=$stmtinsert->execute([$email,$name,$phno,$pswd,$cpswd]);
        if($result){
            echo "Successfully saved";
		}
        else{
            echo "There were errors while saving the data..";
        }
    }
	else{
		echo "Please Enter Valid Credentials..";
	}
?>