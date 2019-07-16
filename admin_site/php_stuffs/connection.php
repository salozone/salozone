<?php
date_default_timezone_set('Asia/Kolkata');
$con = mysqli_connect("localhost", "root", "", "salon_management");

$current_date = date("Y-m-d");
$current_time = date("h:i:s");
$current_datetime = date("Y-m-d H:i:s");
?>