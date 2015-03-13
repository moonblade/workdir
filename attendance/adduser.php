<?PHP
include("db_details.php");
$username = $_POST['username'];
$name = $_POST['name'];
$pass = md5($_POST['password']);
mysql_connect($server, $user_name, $password);

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
$SQL=" INSERT INTO $tablename ($user_attribute,$pass_attribute,$name_attribute) VALUES ('$username' , '$pass','$name' )";
$result = mysql_query($SQL) or die(mysql_error());
if (!$result){
	$message  = 'Invalid query: ';
}
else{
	$message= "success";
}
mysql_close($db_handle);
print $message;
}


?>