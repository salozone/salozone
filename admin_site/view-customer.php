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
    <title>View Customers</title>

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
							<th style="width: 20%;"> Date Added </th>
                            <th style="width: 20%;"> Customer Name </th>
                            <th style="width: 20%;"> Email/ Mobile No </th>
                            <th style="width: 25%;"> Address </th>
                            <th style="width: 10%;"> Action </th>
                        </tr>
                    </thead>
                    <tbody id="loadCustomerServices"></tbody>
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
        
        // modal edit package form
        $(document).on("click", "#edit_customer", function() {
            var id = $(this).data("id");

            if(id != "")
            {
                loadModalCustomers(id);
            }
        });

        // update packages
        $("#update_form").on("submit", function(event) {
            event.preventDefault();

            var data = $(this).serialize();
            var id = $("#update_customer_id").val();
            $.ajax({
                url: "php_post/add-customers.php",
                type: "POST",
                data: data,
                success: function(result) {
                    if(result != "")
                    {
                        $("#update_form")[0].reset();
                        loadAllCustomers("all");
                        loadModalCustomers(id);
                        $("#customerModalResult").html(result);
                        setTimeout(() => {
                            $("#customerModalResult").html("");
                        }, 3000);
                    }
                    else
                    {
                        $("#customerModalResult").html("");
                    }
                }
            })
        })

        // delete packages
        $(document).on("click", "#delete_customer", function() {
            var id = $(this).data("id");
            var action = $(this).data("action");

            if(confirm("Are you sure you want to delete this") == true)
            {
                $.ajax({
                    url: "php_post/add-customers.php",
                    type: "POST",
                    data: {delid: id},
                    dataType: "JSON",
                    success: function(delresult) {
                        if(delresult != "")
                        {
                            if(delresult.status == "done")
                            {
                                $("#del"+delresult.id).fadeOut(1000);
                            }
                        }
                    }
                })
            }
            else
            {
                return false;
            }
        })

    });
    
    function loadAllCustomers(action) {
        var action = action;
        $.ajax({
            url: "php_get/get-customers-all.php",
            type: "POST",
            data: {action: action},
            success: function(result) {
                if(result != "")
                {
                    $("#loadCustomerServices").html(result);
                }
            }
        });
    }

    function loadModalCustomers(id) {
        var id = id;
        $.ajax({
            url: "php_get/get-customers-modal.php",
            type: "POST",
            data: {editid: id},
            success: function(result) {
                if(result != "")
                {
                    $("#editCustomerDetails").html(result);
                }
            }
        })
    }
    </script>
</body>
</html>


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Packages</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="update_form" method="POST" autocomplete="off">
                        <div class="form-group">
                            <div id="editCustomerDetails"></div>
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                    <div id="customerModalResult" style="margin-top: 5px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->