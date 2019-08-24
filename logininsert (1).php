<?php
#logininsert.php
session_start();
// include("header.php");
include("admin_site/php_stuffs/connection.php");
$dateTime = date('Y-m-d H:i:s');
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "VLCC-Face", "VLCC-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "VLCC", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Hand","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal","Threading + Full Hand Waxing + Clean Up(Fruit)","Facial(Gold) + Pedicure + Manicure","Facial(Gold) + Pedicure","Bleach(Oxy) + Hair Style Designer + Pedicure","Threading + Full Waxing(Hands+Legs+Under Arms) + Clean Up(Fruit)" ,"Air Brush","Body Polishing","Bridal Facial","Engagement","Reception","Pre-Bridal","Bridal HD", "Hair Spa-LOreal","Hair Spa-Body care","Hair Massage");
$amounts = array("15","25", "10","80","30","50","119","199","119","149","199","249","299","449","329","499","99","119","20","25","599","799","149","175","149","175","30","45","99","180","199","299","149","249","249","349","449","599","199","299","449","599","199","299","299", "399", "199", "299","499","649","499","649","1499","199","299","299", "499", "299", "499","99","199","299","119","259","379","99","199","349","75","149","199","199","149","30","50","100","100","120","100","100","100","100","50","50","50","149","199","149","450","550","600","700","199","4999","200","149","4999","250","650","620","420","420","399","2999","799","1999","1999","3499","7999","549","449","249");


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
			$insert = mysqli_query($con, "INSERT INTO `customer` SET `cust_name` = '".$fname."', `cust_email` = '".$email."', `cust_mobile` = '".$mobile."', `cust_password` = '".$password."', `wallet_pts` = 0,  `cust_added` = '".$dateTime."'");
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

if(isset($_POST['do']) && $_POST['do'] == 'Login') {
	$uname = $_POST['uname'];
	$pass= $_POST['pword'];
	if(trim($uname) != '' &&  trim($pass) != ''){
		$getList = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_email` = '".$uname."' and `cust_password` = '".$pass."'");
		$getCount = mysqli_num_rows($getList);
		if($getCount == 1 ) {
				$getRow = mysqli_fetch_array($getList);

				$update = mysqli_query($con, "UPDATE `customer` SET `cust_logs` = '".$dateTime."' WHERE `cust_id` = '".$getRow['cust_id']."'");
				setcookie("isLogin", 1, time()+60*60*24*100);
				setcookie("username", $getRow['cust_id'], time()+60*60*24*100);
				setcookie("wallet_pts", $getRow['wallet_pts'], time()+60*60*24*100);
				if(isset($_SESSION["redirect"]) && $_SESSION["redirect"] == true)
				{
					header('Location: membership.php');
					$_SESSION["redirect"] == false;
					exit();
				}
				$userid = $getRow['cust_id'];
				setcookie("userid", $userid, time()+60*60*24*100);
				$getList = mysqli_query($con, "SELECT * FROM `cart` WHERE `user_id` = '".$userid."'");
				$getListNum = mysqli_num_rows($getList);
				if($getListNum > 0){
				for($i = 0 ; $i < $getListNum ; $i++) {
				$cart_fetch = mysqli_fetch_array($getList);
				$item  = $cart_fetch['item'];
				$price = $cart_fetch['price'];
				$qty   = $cart_fetch['qty'];
				$_SESSION["cart"][$item] = $item ;
				$_SESSION["amounts"][$item] = $price;
				$_SESSION["qty"][$item] = $qty;
				$_SESSION["price"][$item] = $amounts[$item];
				}

				$sql = "DELETE FROM cart WHERE user_id='".$getRow['cust_id']."'";
				$con->query($sql);

				$numbers = "";
				$total = 0;
				$noQty = 0;
				$n = 1;
				foreach ( $_SESSION["cart"] as $i ) {
					$numbers.=$i.",";
					$cate = $products[$_SESSION["cart"][$i]];
					$total = $total + $_SESSION["amounts"][$i];
					$noQty += $_SESSION["qty"][$i];
					$n++;
				}
				$_SESSION["total"] = $total;
				$_SESSION["noQty"] = $noQty;

				}


				header("Location:index.php?success=Login");
		}else{
			header("Location:login.php?success=2");
		}
	}else{
		header("Location:login.php?success=1");
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
				$_SESSION["wallet_pts"] = $getRow['wallet_pts'];
				if(isset($_SESSION["redirect"]) && $_SESSION["redirect"] == true)
				{
					header('Location: membership.php');
					$_SESSION["redirect"] = false;
					exit();
				}
				$userid = $getRow['cust_id'];
				setcookie("userid", $userid, time()+60*60*24*100);
				$getList = mysqli_query($con, "SELECT * FROM `cart` WHERE `user_id` = '".$userid."'");
				$getListNum = mysqli_num_rows($getList);
				if($getListNum > 0){
				for($i = 0 ; $i < $getListNum ; $i++) {
				$cart_fetch = mysqli_fetch_array($getList);
				$item  = $cart_fetch['item'];
				$price = $cart_fetch['price'];
				$qty   = $cart_fetch['qty'];
				$_SESSION["cart"][$item] = $item ;
				$_SESSION["amounts"][$item] = $price;
				$_SESSION["qty"][$item] = $qty;
				$_SESSION["price"][$item] = $amounts[$item];

				}

				$sql = "DELETE FROM cart WHERE user_id='".$getRow['cust_id']."'";
				$con->query($sql);

				$numbers = "";
				$total = 0;
				$noQty = 0;
				$n = 1;
				foreach ( $_SESSION["cart"] as $i ) {
					$numbers.=$i.",";
					$cate = $products[$_SESSION["cart"][$i]];
					$total = $total + $_SESSION["amounts"][$i];
					$noQty += $_SESSION["qty"][$i];
					$n++;
				}
				$_SESSION["total"] = $total;
				$_SESSION["noQty"] = $noQty;

				}

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
