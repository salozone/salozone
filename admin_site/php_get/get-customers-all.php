<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["action"]) && $_POST["action"] != "")
{
    $action = $_POST["action"];

    if($action == "all")
    {
        $customer_query = mysqli_query($con, "SELECT * FROM `customer` ORDER BY `cust_logs` DESC");
        $customer_num = mysqli_num_rows($customer_query);
        if($customer_num > 0)
        {
			$i = 1;
            while($customer_fetch = mysqli_fetch_array($customer_query))
            {
                $get_customer_id = $customer_fetch["cust_id"];
                $get_customer_name = $customer_fetch["cust_name"];
                if($get_customer_name == "")
                {
                    $get_customer_name = "NULL";
                }
                #$get_customer_service = $customer_fetch["cust_service"];
                #$get_customer_price = $customer_fetch["cust_price"];
                $get_customer_log = $customer_fetch["cust_logs"];
?>
                <tr id="del<?php echo $get_customer_id; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo date("d-m-Y h:i a", strtotime($get_customer_log)); ?></td>
                    <td><?php echo $get_customer_name; ?></td>
                    <td><?php echo $customer_fetch['cust_email']; ?><br><?php echo $customer_fetch['cust_mobile']; ?></td>
                    <td><?php echo $customer_fetch['cust_houseno']; ?><br>
					<?php echo $customer_fetch['cust_locality']; ?><br></td>
					<?php echo $customer_fetch['cust_landmark']; ?><br></td>
                    
                    <td>
                        <button type="button" class="btn btn-outline btn-info" id="edit_customer" data-id="<?php echo $get_customer_id; ?>" data-action="edit" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-outline btn-danger" id="delete_customer" data-id="<?php echo $get_customer_id; ?>" data-action="delete"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
<?php			$i++;
            }
        }
    
    }
}
?>