<?php include("php_stuffs/connection.php"); ?>
<?php
session_start();
if(isset($_SESSION["adid"]) || !empty($_SESSION["adid"]))
{
  header("location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

    <?php include("php_includes/styles.php"); ?>
</head>
<body>

    <div id="wrapper">

        <div id="container">
            <br/><br/>
            <div class="">
                <div class="col-lg-6 col-lg-offset-3">
                  <form role="form" id="login_form" method="POST" autocomplete="off">
                      <div class="form-group">
                        <label for="login_email">Username</label>
                        <input type="text" class="form-control" id="login_email" name="login_email" required>
                      </div>
                      <div class="form-group">
                        <label for="login_pass">Password</label>
                        <input type="password" class="form-control" id="login_pass" name="login_pass" required>
                      </div>
                      <div class="form-group">
                        <label for="login_code">Code</label>
                        <input type="number" class="form-control" id="login_code" name="login_code" required>
                      </div>
                      <div id="login_result"></div>
                      <input type="submit" class="btn btn-default" value="Submit">
                  </form>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php include("php_includes/scripts.php"); ?>
    <script>
    $(document).ready(function() {

        $("#login_form").on("submit", function(event) {
  		  	event.preventDefault();

			     var mydata = $(this).serialize();

    			$.ajax({
    				type: "POST",
    				dataType: "JSON",
    				url: "php_stuffs/login.php",
    				data: mydata,
    				success: function(data) {
    					if(data["type"] == "error" )
    					{
    						$("#login_result").html(data["msg"]);
    					}
    					else
    					{
    						$("#login_result").html(data["msg"]);
                            setTimeout(() => {
                                window.location.href = "index.php";
                            }, 3000);
    					}
    				},
    				error: function(xhr, textStatus, errorThrown) {
    					alert(textStatus);
    				}
    			});
    		});

    });
    </script>
</body>
</html>
