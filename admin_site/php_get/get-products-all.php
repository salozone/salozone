<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["action"]) && $_POST["action"] != "")
{
    $action = $_POST["action"];

    if($action == "all")
    {
        $product_get_query = mysqli_query($con, "SELECT * FROM `products` WHERE `product_removed`='0' ORDER BY `product_name` ASC");
        $product_num_query = mysqli_num_rows($product_get_query);
        if($product_num_query > 0)
        {
            while($product_fetch_query = mysqli_fetch_array($product_get_query))
            {
                $get_product_id = $product_fetch_query["product_id"];
                $get_product_name = $product_fetch_query["product_name"];
                $get_product_quantity = $product_fetch_query["product_quantity"];
                $get_product_log = $product_fetch_query["product_logs"];
?>
                <tr id="del<?php echo $get_product_id; ?>">
                    <td><?php echo $get_product_name; ?></td>
                    <td><?php echo $get_product_quantity; ?></td>
                    <td><?php echo date("d-m-Y h:i a", strtotime($get_product_log)); ?></td>
                    <td>
                        <button type="button" class="btn btn-outline btn-info" id="edit_product" data-id="<?php echo $get_product_id; ?>" data-action="edit" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-outline btn-danger" id="delete_product" data-id="<?php echo $get_product_id; ?>" data-action="delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
<?php
            }
        }
    
    }
}
?>