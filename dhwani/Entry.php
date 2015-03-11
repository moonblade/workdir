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
	foreach ($id as $i) 
		if (strlen($i)!=0)
		{
			$time=time();
			$SQL = "SELECT * FROM $tablename where $id_attribute = '$i'";
			$result = mysql_query($SQL) or die(mysql_error());
			$num_rows = mysql_num_rows($result);
			$row = mysql_fetch_assoc($result);
			if ($num_rows > 0) {
				if (not_in($row)){
					$update = "UPDATE $tablename SET $inside_attribute ='$time' where $id_attribute='$i'";
					$upresult = mysql_query($update) or die(mysql_error());
					if ($upresult) {
						$message= $i." Updated";
					}		
				}else{
					$gettime="SELECT $inside_attribute from $tablename where $id_attribute='$i'";
					$timeresult=mysql_query($gettime) or die(mysql_error());
					$timerow = mysql_fetch_assoc($timeresult);
					$timestamp = $timerow[$inside_attribute];
					$dt = new DateTime("@$timestamp");
					$message=$i." got inside at ".$dt->format('Y-m-d H:i:s');;
				}
			}else{
				$message="Entry not found";
			}	
			print $message."</br>";
		} 


	}
	mysql_close($db_handle);
	?>