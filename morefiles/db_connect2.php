<?php
$mysql_host = "localhost";
$mysql_username = "root";
$mysql_password = "arunaritu";
//$mysql_username = "id3154008_piyushhcool";
//$mysql_password = "Piyush123@";
$connection = mysqli_connect($mysql_host, $mysql_username, $mysql_password);

if(!$connection)
{
	echo "Failed to connect to database.\n";
}
$db = mysqli_select_db($connection, 'impressions');

if(!$db)
{
	echo "Failed to select database";
}
?>
