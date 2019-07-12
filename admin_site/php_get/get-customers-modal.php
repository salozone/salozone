<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["editid"]) && $_POST["editid"] != "")
{
    $editid = $_POST["editid"];

    $customer_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id`='$editid'");
    $customer_fetch = mysqli_fetch_array($customer_query);

    $cust_id = $customer_fetch["cust_id"];
    $cust_name = $customer_fetch["cust_name"];
    $cust_service = $customer_fetch["cust_service"];
    $cust_price = $customer_fetch["cust_price"];
    $cust_logs = $customer_fetch["cust_logs"];
?>
        <div class="form-group">
            <label for="update_customer_name">Customer Name</label>
            <input class="form-control" id="update_customer_name" name="update_customer_name" type="text" required value="<?php echo $cust_name; ?>">
        </div>
        <div class="form-group">
            <label for="update_customer_service">Service</label>
            <input class="form-control" id="update_customer_service" name="update_customer_service" type="text" required value="<?php echo $cust_service; ?>">
        </div>
        <div class="form-group">
            <label for="update_customer_price">Price</label>
            <input class="form-control" id="update_customer_price" name="update_customer_price" type="number" required value="<?php echo $cust_price; ?>">
        </div>
        <input type="hidden" name="update_customer_id" id="update_customer_id" value="<?php echo $cust_id; ?>">
<?php
}
?>