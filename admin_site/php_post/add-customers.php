<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["customer_service"], $_POST["customer_price"]) && $_POST["customer_service"] != "" && $_POST["customer_price"] != "")
{
    $customer_name = mysqli_real_escape_string($con, $_POST["customer_name"]);
    $customer_service = mysqli_real_escape_string($con, $_POST["customer_service"]);
    $customer_price = mysqli_real_escape_string($con, $_POST["customer_price"]);


    $query = mysqli_query($con, "INSERT INTO `customer`(`cust_name`, `cust_service`, `cust_price`, `cust_logs`) VALUES ('$customer_name', '$customer_service', '$customer_price', '$current_datetime')");
    if($query == true)
    {
        echo "<p class='text-success result_course' style='background: #b6c5a8'> Inserted </p>";
    }
    else
    {
        echo "<p class='text-warning result_course' style='background: wheat'> Error ! try again later </p>";
    }
}


// update packages
if(isset($_POST["update_customer_id"]) && $_POST["update_customer_id"] != "")
{
    $id = mysqli_real_escape_string($con, $_POST["update_customer_id"]);
    $name = mysqli_real_escape_string($con, $_POST["update_customer_name"]);
    $service = mysqli_real_escape_string($con, $_POST["update_customer_service"]);
    $price = mysqli_real_escape_string($con, $_POST["update_customer_price"]);

    $product_update_query = mysqli_query($con, "UPDATE `customer` SET `cust_name`='$name', `cust_service`='$service', `cust_price`='$price' WHERE `cust_id`='$id'");
    if($product_update_query == true)
    {
        echo "<p class='text-success result_course' style='background: #b6c5a8'> Customer Updated </p>";
    }

}


// delete course section
if(isset($_POST["delid"]) && $_POST["delid"] != "")
{
    $id = mysqli_real_escape_string($con, $_POST["delid"]);
    $result = array();

    $query = mysqli_query($con, "DELETE FROM `customer` WHERE `cust_id`='$id'");
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
