<?PHP
include("db_details.php");
$username = $_POST['username'];
$pass = md5($_POST['password']);
include("connect.php");
{
	$SQL = "SELECT * FROM $tablename where $user_attribute = '$username' and $pass_attribute = '$pass'";
	$result = mysql_query($SQL) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);
	if ($num_rows > 0) {
		$_SESSION[$user_attribute]=$row[$user_attribute];
		$_SESSION[$pass_attribute]=$row[$pass_attribute];
		$_SESSION[$id_attribute] = $row[$id_attribute];
		$_SESSION[$name_attribute]= $row[$name_attribute];
		$_SESSION[$level_attribute]=$row[$level_attribute];
		$_SESSION[$guest_attribute]=$row[$guest_attribute];
		$_SESSION[$tm_attribute]=$row[$tm_attribute];
		$message= strval($_SESSION[$id_attribute]);
	}
	else {
		$message= "error";
	}
	print $message;
}
include("disconnect.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="http://localhost/workdir/attendance/attendance.php">go here</a>
</body>
</html>