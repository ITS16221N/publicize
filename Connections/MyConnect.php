<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MyConnect = "localhost";
$database_MyConnect = "publicize";
$username_MyConnect = "root";
$password_MyConnect = "root";
$MyConnect = mysql_pconnect($hostname_MyConnect, $username_MyConnect, $password_MyConnect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>