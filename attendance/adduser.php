<?PHP
include("db_details.php");
$username = $_POST['username'];
$name = $_POST['name'];
$pass = md5($_POST['password']);
include("connect.php");
{
	$SQL=" INSERT INTO $student_table ($user_att,$pass_att,$name_att) VALUES ('$username' , '$pass','$name' )";
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