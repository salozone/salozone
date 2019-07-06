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
    <title>View Products</title>

    <?php include("php_includes/styles.php"); ?>
</head>
<body>

    <div id="wrapper">

        <!-- Navbar -->
        <?php include("php_includes/navbar.php"); ?>

        <div id="page-wrapper">
            <br/><br/>
            <div class="row">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="width: 5%;"> S.No </th>
                            <th style="width: 20%;"> User Details </th>
                            <th style="width: 20%;"> Order Details </th>
                            <th style="width: 35%;"> Order Item(s) </th>
                            <th style="width: 15%;"> Amount/ Status </th>
                            <th style="width: 15%;"> Actions </th>
                        </tr>
                    </thead>
                    <tbody id="loadAllSoldProducts"></tbody>
                </table>
            </div>
        </div>
        <!-- /#page-wrapper -->

        <?php include("php_includes/footer.php"); ?>
        
    </div>
    <!-- /#wrapper -->

    <?php include("php_includes/scripts.php"); ?>
    <script>
    $(document).ready(function() {
        
        loadAllCustomers("all");
        
    });
    
    function loadAllCustomers(action) {
        var action = action;
        $.ajax({
            url: "php_get/get-sold-products-all.php",
            type: "POST",
            data: {action: action},
            success: function(result) {
                if(result != "")
                {
                    $("#loadAllSoldProducts").html(result);
                }
            }
        });
    }
    </script>
</body>
</html>