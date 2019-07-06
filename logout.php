<?php 
// Initialize the session.
session_start();
// Unset all of the session variables.
unset($_COOKIE['isLogin']);
unset($_COOKIE['username']);
// Finally, destroy the session. 
setcookie("isLogin", '', time()-3600);
setcookie("username", '', time()-3600); 
session_destroy();

// Include URL for Login page to login again.
header("Location: index.php");
exit;
 ?>