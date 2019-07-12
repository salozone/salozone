<?php 
session_start();
include("header.php");
#include("admin_site/php_stuffs/connection.php");
#cart.php - A simple shopping cart with add to cart, and remove links
 //---------------------------
 //initialize sessions
//Load up session
 if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
   for ($i=0; $i< count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
   $_SESSION["price"][$i] = 0;
  }
 }

 //---------------------------
 //Reset
 if ( isset($_GET['reset']) )
 {
 if ($_GET["reset"] == 'true')
   {
   unset($_SESSION["qty"]); //The quantity for each product
   unset($_SESSION["amounts"]); //The amount from each product
   unset($_SESSION["total"]); //The total cost
   unset($_SESSION["cart"]); //Which item has been chosen
   unset($_SESSION["price"]); //Which item price
   }
 }

 //---------------------------
 //Add
 if (isset($_GET['add']))
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   $_SESSION["price"][$i] = $amounts[$i];
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
   
   if ( isset($_SESSION["cart"]) ) {
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
   
 }

  //---------------------------
  //Delete
  if ( isset($_GET["delete"]) )
   {
	   $i = $_GET["delete"];
	   #$qty = $_SESSION["qty"][$i];
	   #$qty--;
	   #$_SESSION["qty"][$i] = $qty;
	   unset($_SESSION["qty"][$i]);
	   //remove item if quantity is zero
	   /*if ($qty == 0) {
		$_SESSION["amounts"][$i] = 0;*/
		unset($_SESSION["cart"][$i]);
  /*}
 else
  {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  }*/
 }
 
	if(isset($_POST['new_quantity']) && isset($_POST['cart_id'])) {
		$i = $_POST["cart_id"];
		$n = $_POST['new_quantity'];
	   $qty = $_SESSION["qty"][$i] + 1;
	   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
	   $_SESSION["price"][$i] = $amounts[$i];
	   $_SESSION["cart"][$i] = $i;
	   $_SESSION["qty"][$i] = $qty;
	}
	
	if(isset($_POST['minus_quantity']) && isset($_POST['cart_id'])) {
		$i = $_POST["cart_id"];
		$n = $_POST['new_quantity'];
	   $qty = $_SESSION["qty"][$i] - 1;
	   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
	   $_SESSION["price"][$i] = $amounts[$i];
	   $_SESSION["cart"][$i] = $i;
	   $_SESSION["qty"][$i] = $qty;
	}
 ?>
<?php
#cart.php
header("Location:checkout.php");
?>
