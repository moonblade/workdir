<?PHP
include("db_details.php");
include("connect.php");
{
	if (isset($_SESSION)){
		$attendance=explode(",",$_SESSION[$tm_att]);
		for ($i=0; $i < 30; $i++) 
		{ 
			print "</br>".($i+1)." : ".$attendance[$i];
		}
	}
	else
	{
		//TODO redirect to main page
	}
}
include("disconnect.php");	


?>