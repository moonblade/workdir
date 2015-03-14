<?PHP
include("db_details.php");
$username = $_POST['username'];
$pass = md5($_POST['password']);
include("connect.php");
{
	$SQL = "SELECT * FROM $student_table where $user_att = '$username' and $pass_att = '$pass'";
	$result = mysql_query($SQL) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);
	if ($num_rows > 0) {
		$_SESSION[$user_att]=$row[$user_att];
		$_SESSION[$pass_att]=$row[$pass_att];
		$_SESSION[$id_att] = $row[$id_att];
		$_SESSION[$name_att]= $row[$name_att];
		$_SESSION[$level_att]=$row[$level_att];
		$_SESSION[$guest_att]=$row[$guest_att];
		$_SESSION[$tm_att]=$row[$tm_att];
		$message= strval($_SESSION[$id_att]);
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