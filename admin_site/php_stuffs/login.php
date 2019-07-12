<?php include("./connection.php"); ?>
<?php
session_start();
$successMsg = '<div class="alert alert-success">Success ! You Will be redirect within 3 seconds</div>';

$fillMsg    = '<div class="alert alert-warning">Please fill all fields !</div>';

$errorMsg   = '<div class="alert alert-danger">Hm.. seems there is a problem, sorry!</div>';

?>
<?php
if(!isset($_POST['login_email']) || !isset($_POST['login_pass']) || !isset($_POST['login_code']) || empty($_POST['login_email']) || empty($_POST['login_pass']) || empty($_POST['login_code']))
{

	if(empty($_POST['login_email']) && empty($_POST['login_pass']) && empty($_POST['login_code']))
	{
		$json_arr = array("type" => "error", "msg" => $fillMsg);
		echo json_encode($json_arr);
	}
	else
	{
        $fields = "";
        if(!isset($_POST['login_email']) || empty($_POST['login_email']))
		      {
			         $fields .= "Email";
        }

		if(!isset($_POST['login_pass']) || empty($_POST['login_pass']))
		{
			if($fields == "")
			{
				$fields .= "Password";
			}
			else
			{
				$fields .= ", Password";
			}
		}

		$json_arr = array( "type" => "error", "msg" => "<div class='alert alert-warning'>Please fill ".$fields." fields !" );
		echo json_encode($json_arr);
	}
}
else
{

		$email = mysqli_real_escape_string($con, $_POST['login_email']);
		$pass = mysqli_real_escape_string($con, $_POST['login_pass']);
        $code = mysqli_real_escape_string($con, $_POST['login_code']);

        $pass = ($pass);

        $email_check_query = mysqli_query($con, "SELECT * FROM `admin` WHERE `ad_username`='$email'");
        $email_check_num = mysqli_num_rows($email_check_query);

        $code_check_query = mysqli_query($con, "SELECT * FROM `admin` WHERE `ad_username`='$email' AND `ad_password`='$pass' AND `ad_code`='$code'");
        $code_check_num = mysqli_num_rows($code_check_query);
        $code_check_fetch = mysqli_fetch_array($code_check_query);

        $pass_check_query = mysqli_query($con, "SELECT * FROM `admin` WHERE `ad_username`='$email' AND `ad_password`='$pass'");
        $pass_check_num = mysqli_num_rows($pass_check_query);


        if($email_check_num != 0)
        {
            if($pass_check_num != 0)
            {
                if($code_check_num != 0)
                {
                    $_SESSION["adid"] = $code_check_fetch["ad_id"];
                    $json_arr = array("type" => "success", "msg" => $successMsg);
			                 echo json_encode($json_arr);
                }
                else
                {
                    $json_arr = array("type" => "error", "msg" => "<div class='alert alert-warning'>Enter Code Correctly !</div>");
			        echo json_encode($json_arr);
                }
            }
            else
            {
                $json_arr = array("type" => "error", "msg" => "<div class='alert alert-warning'>Password Incorrect !</div>");
			    echo json_encode($json_arr);
            }
        }
        else
        {
            $json_arr = array("type" => "error", "msg" => "<div class='alert alert-warning'>Username is Incorrect !</div>");
			echo json_encode($json_arr);
        }

}
