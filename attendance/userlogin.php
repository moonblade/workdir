<?PHP
include("db_details.php");
$username = $_POST['username'];
$pass = md5($_POST['password']);
mysql_connect($server, $user_name, $password);

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
	$SQL = "SELECT * FROM $tablename where $user_attribute = '$username' and $pass_attribute = '$pass'";
	$result = mysql_query($SQL) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);
	if ($num_rows > 0) {
		session_start();
		$_SESSION[$id_attribute] = $row[$id_attribute];
		$_SESSION[$name_attribute]= $row[$name_attribute];
		$_SESSION[$level_attribute]=$row[$level_attribute];
		$message= strval($_SESSION[$id_attribute]);
	}
	else {
		$message= "error";
	}
	print $message;
}
mysql_close($db_handle);


?>