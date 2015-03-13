<?PHP
include("db_details.php");
$username = $_POST['username'];
$name = $_POST['name'];
$pass = md5($_POST['password']);
include("connect.php");
{
	$SQL=" INSERT INTO $tablename ($user_attribute,$pass_attribute,$name_attribute) VALUES ('$username' , '$pass','$name' )";
	$result = mysql_query($SQL) or die(mysql_error());
	if (!$result){
		$message  = 'Invalid query: ';
	}
	else{
		$message= "success";
	}
}
	include("disconnect.php");

	print $message;
}


?>