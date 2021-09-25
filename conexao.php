<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$username_con = "root";
$password_con = "";
$hostname_con = "localhost";

$con = mysqli_connect($hostname_con, $username_con, $password_con) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_set_charset($con,"utf8");

?>