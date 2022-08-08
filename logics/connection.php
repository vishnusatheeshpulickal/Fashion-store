<?php
session_start();
$con=mysqli_connect("localhost","root","","fashion-store");
mysqli_select_db($con,"fashion-store") or die("cannot connect to the database");
?>