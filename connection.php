<?php
    $server="localhost";
	$username="root";
	$password="";
	$db=new PDO('mysql:host=localhost;dbname=jmog;charset=utf8',$username,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>