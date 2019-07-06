<?php
include("php_stuffs/session.php");

session_destroy();
header("location: login.php");

?>
