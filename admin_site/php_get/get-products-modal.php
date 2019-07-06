<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["editid"]) && $_POST["editid"] != "")
{
    $editid = $_POST["editid"];

    $product_get_query = mysqli_query($con, "SELECT * FROM `products` WHERE `product_id`='$editid'");
    $product_get_fetch = mysqli_fetch_array($product_get_query);

    $get_product_id = $product_get_fetch["product_id"];
    $get_product_name = $product_get_fetch["product_name"];
    $get_product_quantity = $product_get_fetch["product_quantity"];
?>
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input class="form-control" id="update_product_name" name="update_product_name" type="text" required value="<?php echo $get_product_name; ?>">
        </div>
        <div class="form-group">
            <label for="product_quantity">Quantity</label>
            <input class="form-control" id="update_product_quantity" name="update_product_quantity" type="number" required value="<?php echo $get_product_quantity; ?>">
        </div>
        <input type="hidden" name="update_product_id" id="update_product_id" value="<?php echo $get_product_id; ?>">
<?php
}
?>