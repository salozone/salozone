<?php include("php_stuffs/connection.php"); ?>
<?php include("php_stuffs/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Customer</title>

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
                        <div class="panel-heading">
                            Add Customer Service
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-8 col-lg-offset-2">
                                    <form role="form" id="customer_form" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <label for="customer_name">Name</label>
                                            <input class="form-control" id="customer_name" name="customer_name" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_service">Service</label>
                                            <input class="form-control" id="customer_service" name="customer_service" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_price">Price</label>
                                            <input class="form-control" id="customer_price" name="customer_price" type="number" required>
                                        </div>
                                        <div id="customer_result"></div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <style>
                                .customer_result {
                                    padding: 10px;
                                    text-align: center;
                                }
                                </style>
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

        $("#customer_form").on("submit", function(event) {
            event.preventDefault();

            var data = $(this).serialize();

            $.ajax({
                url: "php_post/add-customers.php",
                type: "POST",
                data: data,
                success: function(result) {

                    if(result != "")
                    {
                        $("#customer_form")[0].reset();
                        $("#customer_result").html(result);
                        setTimeout(() => {
                            $("#customer_result").html("");
                        }, 3000);
                    }

                }
            })
        });

    });
    </script>
</body>
</html>
