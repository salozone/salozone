<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["product_name"], $_POST["product_quantity"]) && $_POST["product_name"] != "" && $_POST["product_quantity"] != "")
{
    $product_name = mysqli_real_escape_string($con, $_POST["product_name"]);
    $product_quantity = mysqli_real_escape_string($con, $_POST["product_quantity"]);

    $exist_query = mysqli_query($con, "UPDATE `products` SET `product_sold`='$product_quantity' WHERE `product_id`='$product_name'");
    if($exist_query)
    {
        echo "<p class='text-warning result_course' style='background: wheat'> Product Quantity Updated </p>";
    }
    else
    {
        echo "<p class='text-warning result_course' style='background: wheat'> Try Again Laters </p>";
    }
}
?>