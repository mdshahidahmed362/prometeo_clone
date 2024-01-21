<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_aa = "localhost";
$database_aa = "login_us";
$username_aa = "root";
$password_aa = "";
$aa = mysql_pconnect($hostname_aa, $username_aa, $password_aa) or trigger_error(mysql_error(),E_USER_ERROR); 
?>