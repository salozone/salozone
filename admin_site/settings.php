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
    <title>Settings</title>

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
                            Change Password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <form role="form" id="change_password_form" method="POST" autocomplete="off" action="./php_post/settings.php">
                                        <div class="form-group">
                                            <label for="oldPass">Old Password</label>
                                            <input class="form-control" id="oldPass" name="oldPass" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="newPass">New Password</label>
                                            <input class="form-control" id="newPass" name="newPass" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="newConPass">Confirm Password</label>
                                            <input class="form-control" id="newConPass" name="newConPass" type="text" required>
                                        </div>
                                        <div id="change_password_result">
                                        <?php
                                        if(isset($_GET["status"]) && $_GET["status"] != "")
                                        {
                                            $status = $_GET["status"];
                                            if($status == "success")
                                            {
                                        ?>
                                                <div class="alert alert-success result_course"> Password Successfully Changed </div>
                                            <?php
                                            }
                                            elseif($status == "oldpass")
                                            {
                                            ?>
                                                <div class="alert alert-danger result_course"> Old Password Incorrect </div>
                                            <?php
                                            }
                                            elseif($status == "mismatch")
                                            {
                                            ?>
                                                <div class="alert alert-danger result_course"> New Password & Confirm Password Mismatch </div>
                                            <?php
                                            }
                                            elseif($status == "error")
                                            {
                                            ?>
                                                <div class="alert alert-warning result_course"> Error ! try again later </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <style>
                                .result_course {
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
      
    });
    </script>
</body>
</html>