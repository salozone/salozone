<?php
$servername = "localhost";
$username = "salozxmb_admin";
$password = "admin";
$dbname="salozxmb_salon";
$item = $_GET["item"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$stmt= $conn->prepare("DELETE FROM cart WHERE item=?;");
$stmt->bind_param("s",$item);

if ($stmt->execute() === TRUE) {
    echo "Item deleted successfully";
    header("Location: cart.php", true, 301);
    
} else {
    echo "Error deleting item: " . $conn->error;
}

$conn->close();
?>