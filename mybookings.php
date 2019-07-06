<?php 
//session_start();
#mybookings.php
include('header.php');	
?>
<style>
.rowcenter {
	vertical-align:middle;
	text-align:center;
}
</style>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h3 class="text-center">My Bookings</h3>
					<div class="col-md-12">
					<?php if(isset($_GET['success']) && $_GET['success'] == 'Done') {
							unset($_SESSION["id"]); //The order serial no
						   unset($_SESSION["order"]); //The order id
					} else {
					}
					?>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th width="5%">S.No</th>
									<th width="15%">Order No</th>
									<th width="20%">Order Date/ Time</th>
									<th width="15%">Order Amount</th>
									<th width="15%">Order Status</th>
									<th width="15%">Payment Type</th>
									<th width="15%">Payment Status</th>
								</tr>
							</thead>
							<tbody>
							<?php $i = 1;
							//setcookie("username", '8', time()+60*60*24*100);
							//echo "test". $_COOKIE['isLogin'];echo ("SELECT * FROM `order_items` WHERE `user_id` = '8'");
							$order = mysqli_query($con, "SELECT * FROM `order_items` WHERE `user_id` = '".$_COOKIE['username']."' ORDER BY `id` DESC");
							while($order1 = mysqli_fetch_array($order)) {
							?>
								<tr>
									<td class="rowcenter"><?php echo $i; ?></td>
									<td class="rowcenter"><?php echo $order1['order_id']; ?></td>
									<td class="rowcenter"><?php echo date("d M Y",strtotime( $order1['order_date'])); ?><br><?php echo $order1['order_time']; ?></td>
									<td class="rowcenter"><?php echo $order1['gross_amt']; ?></td>
									<td class="rowcenter"><?php if($order1['order_status'] == 1) { echo "Done"; } elseif($order1['order_status'] == 2) { echo "Canceled"; } else { echo "Pending"; } ?></td>
									<td class="rowcenter"><?php if($order1['payment_type'] == 1) { echo "Pay Online After Service"; } elseif($order1['payment_type'] == 2) { echo "Pay Cash"; } elseif($order1['payment_type'] == 3) { echo "Pay Online"; } ?></td>
									<td class="rowcenter">
										<?php 
										if($order1['payment_status'] == 0) { 
											$ps = "Pending";
											$psc = 'danger';
											$psh = 'payment_later.php?id='.$order1['id'].'&order='.$order1['order_id'];
										} elseif($order1['payment_type'] == 1) { 
											$ps = "paid";
											$psc = "success";
											$psh = '#';
										} 
										?>
										<a href="<?php echo $psh; ?>" title="<?php echo $ps; ?>" class="btn btn-<?php echo $psc; ?> btn-sm"><?php echo $ps; ?></a>
									</td>
								</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>	
<?php 
include('footer.php'); ?>
