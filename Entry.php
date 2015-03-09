<?PHP
include "db_details.php";
$id = $_POST['id'];

function not_in($row)
{
	if ($row['inside']=="Null")
		return 1;
    else
    	return 0;
}
mysql_connect($server, $user_name, $password);
$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
	$time=time();
	$SQL = "SELECT * FROM Student where id = '$id'";
	$result = mysql_query($SQL) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);
	if ($num_rows > 0) {
		if (not_in($row)){
			$update = "UPDATE Student SET inside ='$time' where id='$id'";
			$upresult = mysql_query($update) or die(mysql_error());
			if ($upresult) {
				$message= $id." Updated";
			}		
		}else{
			$gettime="SELECT inside from Student where id='$id'";
			$timeresult=mysql_query($gettime) or die(mysql_error());
			$timerow = mysql_fetch_assoc($timeresult);
			$timestamp = $timerow['inside'];
			$dt = new DateTime("@$timestamp");
			$message=$id." got inside at ".$dt->format('Y-m-d H:i:s');;
		}
	}else{
		$message="Entry not found";
	}
	print $message;
}
mysql_close($db_handle);
?>