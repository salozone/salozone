<?php
#logininsert.php
session_start();
#include("header.php");
include("admin_site/php_stuffs/connection.php");
$dateTime = date('Y-m-d H:i:s');
//Register Form
if(isset($_POST['do']) && $_POST['do'] == 'Register') {
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	if(trim($fname) != '' && trim($email) != '' && trim($mobile) != '' && trim($password) != '') {
		$getList = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_email` = '".$email."'");
		$getCount = mysqli_num_rows($getList);
		$phone = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_mobile` = '".$mobile."'");
		$phoneCount = mysqli_num_rows($phone);
		if($getCount == 0 ) {
			if($phoneCount == 0) {
			$insert = mysqli_query($con, "INSERT INTO `customer` SET `cust_name` = '".$fname."', `cust_email` = '".$email."', `cust_mobile` = '".$mobile."', `cust_password` = '".$password."', `cust_added` = '".$dateTime."'");
			header("Location:login.php?success=Done");
			}else {
				header("Location:login.php?success=phone");
			}
		} else {
			header("Location:login.php?success=email");
		}

	} else {
		header("Location:login.php?success=Failed");
	}
}

//Login Form
if(isset($_POST['do']) && $_POST['do'] == 'sendOtp') {
	$uname = $_SESSION['contact_no'];
	$ori = $_SESSION['login_otp'];
	$dup = $_POST['login_otp'];
	if(trim($uname) != '' && trim($ori) != '' && trim($dup)) {
		if($ori == $dup) {
			$getList = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_mobile` = '".$uname."'");
			$getCount = mysqli_num_rows($getList);
			if($getCount == 1) {
				$getRow = mysqli_fetch_array($getList);
				$update = mysqli_query($con, "UPDATE `customer` SET `cust_logs` = '".$dateTime."' WHERE `cust_id` = '".$getRow['cust_id']."'");
				unset($_SESSION['login_otp']);
				setcookie("isLogin", 1, time()+60*60*24*100);
				setcookie("username", $getRow['cust_id'], time()+60*60*24*100);
				header("Location:index.php?success=Login");
			} else {
				header("Location:login.php?success=2");
			}
		} else {
			header("Location:login_check.php?success=3");
		}
	} else {
		header("Location:login.php?success=1");
	}
}

//Billing Form First time
if(isset($_POST['do']) && $_POST['do'] == 'Billing') {
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$house_no = $_POST['house_no'];
	$locality = $_POST['locality'];
	$landmark = $_POST['landmark'];
	$message = $_POST['message'];
	if(trim($fname) != '' && trim($email) != '' && trim($house_no) != '' && trim($locality) != '') {
		//Set Session 
		$_SESSION['fname'] = $fname;
		$_SESSION['email'] = $email;
		$_SESSION['house_no'] = $house_no;
		$_SESSION['locality'] = $locality;
		$_SESSION['landmark'] = $landmark;
		$_SESSION['message'] = $message;
		header("Location:timing.php");
	
	} else {
		header("Location:timing.php?success=Failed");
	}
}

//Promo Code
if(isset($_POST['do']) && $_POST['do'] == 'Promo') {
	$pCode = $_POST['promo_code'];
	$p1 = 'SALOZ25'; $pp1 = '25';
	$p2 = 'SALOZ30'; $pp2 = '30';
	if(isset($_SESSION['newtotal'])) { $p = 3; header("Location:payment.php?promo=$p");} else {
		if($pCode == $p1) {
			$totalSum = $_SESSION['total'] * ($pp1/100);
			$newTotal = ($totalSum);
			$_SESSION['newtotal'] = $newTotal;
			$_SESSION['promo_code'] = $p1;
			$_SESSION['promo_per'] = $pp1;
			$_SESSION['promo_amt'] = $newTotal;
			$p = 1;
		} elseif($pCode == $p2) {
			$totalSum = $_SESSION['total'] * ($pp2/100);
			$newTotal = ($totalSum);
			$_SESSION['newtotal'] = $newTotal;
			$_SESSION['promo_code'] = $p2;
			$_SESSION['promo_per'] = $pp2;
			$_SESSION['promo_amt'] = $newTotal;
			$p = 1;
		} else {
			$p = 2;
		}
	}
	header("Location:payment.php?promo=$p");
}

?>