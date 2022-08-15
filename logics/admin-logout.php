<?php   
session_start();
setcookie("fashionstore-admin", "", time() - 3600,"/");
session_destroy();
header("location:../admin/login.php");
exit();

?>