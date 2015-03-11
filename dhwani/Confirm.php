<?PHP
include "db_details.php";
$id = $_POST['id'];
if (isset($_POST['con']))
	$con=$_POST['con'];

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
if ($db_found) 
{
	$time=time();
	$boo=new DateTime("@$time");
	print "Current Time is ".$boo->format("Y-m-d H:i:s")."<br><br>";	
	foreach ($id as $i) {
		if (strlen($i)!=0)
		{
			$SQL = "SELECT * FROM $tablename where $id_attribute = '$i'";
			$result = mysql_query($SQL) or die(mysql_error());
			$num_rows = mysql_num_rows($result);
			$row = mysql_fetch_assoc($result);
			if ($num_rows > 0) {
				$name=$row[$name_attribute];
				$branch=$row[$branch_attribute];				{
					?>
					<!DOCTYPE html>
					<html>
					<body>
						<center>
							<form method="post" action="Confirm.php" >
								<?php echo "id : ".$i.", Name : ".$name."</br> Branch : ".$branch."</br>";?>
								<input type="hidden" name="con" value="<?php echo $i;?>">
								<?php
								foreach ($id as $key) {
									?><input type="hidden" name="id[]" value="<?php echo $key;?>"><?PHP
								}?>	
								<input class="button" type="submit" value="Confirm" />

							</form>
							<?PHP
							if(isset($con) && $i==$con){
								if (not_in($row)){
									$update = "UPDATE $tablename SET $inside_attribute ='$time' where $id_attribute='$i'";
									$upresult = mysql_query($update) or die(mysql_error());
									if ($upresult) {
										$message= $i." : ".$name." ----- Updated";
									}		
								}else{
									$timestamp = $row[$inside_attribute];
									$dt = new DateTime("@$timestamp");
									$message=$i." : ".$name." ----- got inside at ".$dt->format('Y-m-d H:i:s');;
								}
								echo $message;
							}

							?>

						</center>
					</body>
					</html>
					</html>
					<?PHP 
				} 
				for ($temp=0; $temp <500 ; $temp++) { 
					echo "-";
				}
				echo "\n\n";
			} 
		}
	}
}
mysql_close($db_handle);
?>
