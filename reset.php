<?PHP
$pass = $_POST['pass'];
include "db_details.php";

function resetall()
{
	if($GLOBALS['pass']=="reset")
	{
		$SQL= "UPDATE Student set inside='Null'";
		$nresult=mysql_query($SQL);
		if($nresult)
		{
			$message = "success";
		}
		else
			$message = "fail";
		
	}
	else
		$message = "error";
	print($message);
}

mysql_connect($server, $user_name, $password);
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) 
{
	resetall();
}
mysql_close($db_handle);

?>

