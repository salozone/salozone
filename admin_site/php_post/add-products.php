<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["product_name"], $_POST["product_quantity"]) && $_POST["product_name"] != "" && $_POST["product_quantity"] != "")
{
    $product_name = mysqli_real_escape_string($con, $_POST["product_name"]);
    $product_quantity = mysqli_real_escape_string($con, $_POST["product_quantity"]);

    $exist_query = mysqli_query($con, "SELECT * FROM `products` WHERE `product_name` LIKE '".$product_name."' AND `product_removed`='0'");
    $num_exist_query = mysqli_num_rows($exist_query);
    if($num_exist_query > 0)
    {
        echo "<p class='text-warning result_course' style='background: wheat'> Already Exist Product </p>";
    }
    else
    {
        $query = mysqli_query($con, "INSERT INTO `products`(`product_name`, `product_quantity`, `product_logs`, `product_removed`) VALUES ('$product_name', '$product_quantity', '$current_datetime', '0')");
        if($query == true)
        {
            echo "<p class='text-success result_course' style='background: #b6c5a8'> Product Inserted </p>";
        }
        else
        {
            echo "<p class='text-warning result_course' style='background: wheat'> Error ! try again later </p>";
        }
    }
}


// update packages
if(isset($_POST["update_product_id"]) && $_POST["update_product_id"] != "")
{
    $id = mysqli_real_escape_string($con, $_POST["update_product_id"]);
    $name = mysqli_real_escape_string($con, $_POST["update_product_name"]);
    $quantity = mysqli_real_escape_string($con, $_POST["update_product_quantity"]);

    $product_update_query = mysqli_query($con, "UPDATE `products` SET `product_name`='$name', `product_quantity`='$quantity' WHERE `product_id`='$id'");
    if($product_update_query == true)
    {
        echo "<p class='text-success result_course' style='background: #b6c5a8'> Product Updated </p>";
    }

}


// delete course section
if(isset($_POST["delid"]) && $_POST["delid"] != "")
{
    $id = mysqli_real_escape_string($con, $_POST["delid"]);
    $result = array();

    $query = mysqli_query($con, "UPDATE `products` SET `product_removed`='1' WHERE `product_id`='$id'");
    if($query == true)
    {
        $result = [
            "status" => "done",
            "id" => $id
        ];
    }
    echo json_encode($result);
}
?>
