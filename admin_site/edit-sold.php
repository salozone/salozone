<?php include("php_stuffs/connection.php"); ?>
<?php include("php_stuffs/session.php"); ?>
<?php
if(isset($_GET['id'])) {
	$editId = $_GET['id'];
	$product_get_query = mysqli_query($con, "SELECT * FROM `order_items` WHERE `id` = '".$editId."'");
	$product_fetch_query = mysqli_fetch_array($product_get_query);
	$customer = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$product_fetch_query['user_id']."'");
	$customer1 = mysqli_fetch_array($customer);
}

/*if(isset($_POST['do']) && $_POST['do'] == "Update") {
	$edit = $_POST['editId'];
	$status = $_POST['status'];
	echo "test";exit;
	$update = mysqli_query($con, "UPDATE `order_items` SET `payment_status` = '".$status."' WHERE `id` = '".$edit."'");
	header("Location:view-sold.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Payments</title>

    <?php include("php_includes/styles.php"); ?>
</head>
<body>

    <div id="wrapper">

        <!-- Navbar -->
        <?php include("php_includes/navbar.php"); ?>

        <div id="page-wrapper">
            <br/><br/>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Payments Sold</div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-8 col-lg-offset-2">
                                    <form action="" role="form" id="product_form" method="POST" autocomplete="off">
										<input type="hidden" name="editId" value="<?php echo $editId; ?>"/>
										<input type="hidden" name="do" value="Update"/>
                                        <div class="form-group">
                                            <label for="product_name">Customer Name</label>
                                            <select name="product_name" id="product_name" required class="form-control">
                                                <?php
                                                $query = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '".$product_fetch_query['user_id']."'");
                                                while($fetch = mysqli_fetch_array($query))
                                                {
                                                ?>
                                                    <option value="<?php echo $fetch['cust_id']; ?>"selected><?php echo $fetch['cust_name'] ." ".$fetch['cust_mobile']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="product_quantity">Quantity</label>
                                            <input class="form-control" id="product_quantity" name="product_quantity" type="text" value="<?php echo $product_fetch_query['tot_qty']; ?>" required>
                                        </div>
										<div class="form-group">
                                            <label for="product_quantity">Amount</label>
                                            <input class="form-control" id="product_total" name="product_total" type="text" value="<?php echo $product_fetch_query['gross_amt']; ?>" required>
                                        </div>
										<div class="form-group">
                                            <label for="product_quantity">Payment Status</label>
                                            <select class="form-control" id="status" name="status" required>
												<option value="0" <?php if($product_fetch_query['payment_status'] == 0) { echo "selected"; } ?>>Pending</option>
												<option value="1" <?php if($product_fetch_query['payment_status'] == 1) { echo "selected"; } ?>>Paid</option>
											</select>
                                        </div>
                                        <div id="product_result"></div>
                                        <button type="submit" name="submit_34" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                                <style>
                                .result_course {
                                    padding: 10px;
                                    text-align: center;
                                }
                                </style>

                                <div class="col-lg-12">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

        <?php include("php_includes/footer.php"); ?>

    </div>
    <!-- /#wrapper -->


    <?php include("php_includes/scripts.php"); ?>
    <script>
    $(document).ready(function() {

        $("#product_form").on("submit", function(event) {
            event.preventDefault();

            var data = $(this).serialize();

            $.ajax({
                url: "php_post/edit-sold-products.php",
                type: "POST",
                data: data,
                success: function(result) {

                    if(result != "")
                    {
                        $("#product_form")[0].reset();
                        $("#product_result").html(result);
                        setTimeout(() => {
                            $("#product_result").html("");
                        }, 3000);
                    }

                }
            })
        });

    });
    </script>
</body>
</html>