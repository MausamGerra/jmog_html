<?php
    require_once('connection.php');
	if(isset($_POST)){
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
		$phno=$_POST['phno'];
		$msg=$_POST['msg'];
		$query="insert into feedback (fd_fname,fd_lname,fd_email,fd_phno,fd_msg) values(?,?,?,?,?)";
		$stmtinsert=$db->prepare($query);
        $result=$stmtinsert->execute([$fname,$lname,$email,$phno,$msg]);
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