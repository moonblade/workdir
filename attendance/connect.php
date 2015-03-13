<?php
session_start();
mysql_connect($server, $user_name, $password);
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found)
?>