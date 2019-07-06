<?php include("../php_stuffs/connection.php"); ?>
<?php
if(isset($_POST["action"]) && $_POST["action"] != "")
{
    $action = $_POST["action"];

    if($action == "all")
    {
        $product_get_query = mysqli_query($con, "SELECT * FROM `order_items` ORDER BY `id` DESC");
        $product_num_query = mysqli_num_rows($product_get_query);
        if($product_num_query > 0)
        {
			$i = 1;
            while($product_fetch_query = mysqli_fetch_array($product_get_query))
            {
                $get_product_id = $product_fetch_query["id"];
                $get_product_name = json_decode($product_fetch_query["order_item"]);
                $get_product_quantity = json_decode($product_fetch_query["order_qty"]);
                $get_product_sold = json_decode($product_fetch_query["order_amt"]);
                $get_product_log = $product_fetch_query["datetime"];
				$customer = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$product_fetch_query['user_id']."'");
				$customer1 = mysqli_fetch_array($customer);
				
?>
                <tr id="del<?php echo $get_product_id; ?>">
                    <td><?php echo $i; ?></td>
                    <td><b>Name:</b> <?php echo $customer1['cust_name']; ?><br>
						<b>Mobile:</b> <?php echo $customer1['cust_mobile']; ?>
					</td>
					<td><b>ID:</b> <?php echo $product_fetch_query['order_id']; ?><br>
						<b>Date:</b> <?php echo date("d-m-Y", strtotime($product_fetch_query['order_date'])); ?><br>
						<b>Time:</b> <?php echo $product_fetch_query['order_time']; ?>
					</td>
                    <td>
						<table width="100%">
							<tr>
								<th width="70%">Particular</th>
								<th width="20%">Amt.</th>
								<th width="10%">Qty.</th>
						<?php 
							$n = 1;
							$m = 0;
							foreach($get_product_name as $gpn) {
								echo "<tr>
										<td width='70%'>".$gpn."</td>
										<td width='20%'>".$get_product_sold[$m]."</td>
										<td width='10%'>".$get_product_quantity[$m]."</td>
									</tr>";
								$n++;
								$m++;
							}
						?>
						</table>
					</td>
                    <td><b>Total Qty:</b> <?php echo $product_fetch_query['tot_qty']; ?><br>
						<b>Total Amt:</b> <?php echo $product_fetch_query['gross_amt']; ?><br>
						<b>Payment:</b> 
						<?php if($product_fetch_query['payment_status'] == 0) {
							echo "Pending";
						} elseif($product_fetch_query['payment_status'] == 1) {
							echo "Paid";
						}
						?>
					</td>
                    <td>
						<a href="edit-sold.php?id=<?php echo $product_fetch_query['id']; ?>" class="btn btn-outline btn-info" id="edit_order" ><i class="fa fa-edit"></i></a>
                        <!--<button type="button" class="btn btn-outline btn-danger" id="delete_order" data-id="<?php echo $get_product_id; ?>" data-action="delete"><i class="fa fa-trash"></i></button>-->
					</td>
                </tr>
<?php			$i++;
            }
        }
    
    }
}
?>