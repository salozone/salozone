<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["do"], $_POST["do"]) && $_POST["editId"] != "" && $_POST["status"] != "")
{
    $product_name = mysqli_real_escape_string($con, $_POST["editId"]);
    $product_status = mysqli_real_escape_string($con, $_POST["status"]);

    $exist_query = mysqli_query($con, "UPDATE `order_items` SET `payment_status`='$product_status' WHERE `id`='$product_name'");
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