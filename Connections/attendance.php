<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_attendance = "localhost";
$database_attendance = "attendance";
$username_attendance = "root";
$password_attendance = "";
$biocore = mysql_pconnect($hostname_attendance, $username_attendance, $password_attendance) or trigger_error(mysql_error(),E_USER_ERROR); 
?>