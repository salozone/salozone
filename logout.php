<?php 
// Initialize the session.
include('header.php');
// Unset all of the session variables.
$servername = "localhost";
$username = "root";
$password = "";
$dbname="salon_management";

// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_SESSION["total"])){
    $userid = $_COOKIE['username'];
    foreach ($_SESSION["cart"] as $i) {
        $item  = $_SESSION["cart"][$i];
        $price = $_SESSION["amounts"][$i];
        $qty   = $_SESSION["qty"][$i];

        $stmt= $conn->prepare("INSERT INTO cart (item,price,user_id,qty)
        VALUES(?, ?, ?,?)");
        $stmt->bind_param("siii",$item,$price,$userid,$qty);
        $stmt->execute();
      }
      $conn->close();
    }

unset($_COOKIE['isLogin']);
unset($_COOKIE['username']);
// Finally, destroy the session. 
setcookie("isLogin", '', time()-3600);
setcookie("username", '', time()-3600); 
session_destroy();

// Include URL for Login page to login again.
header("Location: index.php");
exit;
 ?>