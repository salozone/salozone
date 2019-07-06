<?php
session_start();
#check.php
//Login
if(isset($_POST['do']) && $_POST['do'] == 'login_35') {
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	if(isset($uname)) && $uname != "" && isset($pword) && $pword != "") {
		header("Location:index.php");
	} else {
		header("Location:login.php?login=1");
	}
}
//Register
if(isset($_POST['do']) && $_POST['do'] == 'register_35') {
	$fname = $_POST['fname'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$pword = $_POST['password'];
	if(isset($fname)) && isset($mobile) && isset($email) && isset($pword)) {
		
		header("Location:login.php?reg=1");
	} else {
		header("Location:login.php?reg=2");
	}
}
?>