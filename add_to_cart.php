<?php 
$servername = "localhost";
$username = "salozxmb_admin";
$password = "admin";
$dbname="salozxmb_salon";

$item = $_GET["item"];
$price = $_GET["price"];
// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt= $conn->prepare("INSERT INTO cart (item,price)
VALUES(?, ?)");
$stmt->bind_param("si",$item,$price);

$stmt->execute();
include_once('simple_html_dom.php');
$html = file_get_html('test.html');
echo $html;

$conn->close();
?>