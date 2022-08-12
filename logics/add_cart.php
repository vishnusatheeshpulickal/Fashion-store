<?php
require('connection.php');
$pid = urldecode(base64_decode($_GET['pid']));
$redirect = urldecode(base64_decode($_GET['redirect']));


?>