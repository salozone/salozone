<?php include("../php_stuffs/connection.php"); ?>
<?php include("../php_stuffs/session.php"); ?>
<?php
if(isset($_POST["oldPass"]) && isset($_POST["newPass"]) && isset($_POST["newConPass"]) && $_POST["oldPass"] != "" && $_POST["newPass"] != "" && $_POST["newConPass"] != "")
{
    $old = mysqli_real_escape_string($con, $_POST["oldPass"]);
    $new = mysqli_real_escape_string($con, $_POST["newPass"]);
    $newCon = mysqli_real_escape_string($con, $_POST["newConPass"]);
    $id = $_SESSION["adid"];

    $md5old = md5($old);
    $md5new = md5($new);

    $exist_query = mysqli_query($con, "SELECT * FROM `admin` WHERE `ad_id`='$id' AND `ad_password`='$md5old'");
    $num_exist_query = mysqli_num_rows($exist_query);
    if($num_exist_query > 0)
    {
        if($new == $newCon)
        {
            $query = mysqli_query($con, "UPDATE `admin` SET `ad_password`='$md5new' WHERE `ad_id`='$id'");
            if($query == true)
            {
                header("location: ../settings.php?status=success");
            }
            else
            {
                header("location: ../settings.php?status=error");
            }
        }
        else
        {
            header("location: ../settings.php?status=mismatch");
        }
    }
    else
    {
        header("location: ../settings.php?status=oldpass");
    }
}
?>