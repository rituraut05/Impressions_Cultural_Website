<?php
$mysql_host = "mysql.hostinger.in";
$mysql_username = "u998011828_imp";
$mysql_password = "rrrrrrrr";
//$mysql_username = "id3154008_piyushhcool";
//$mysql_password = "Piyush123@";
$connection = mysqli_connect($mysql_host, $mysql_username, $mysql_password);

if(!$connection)
{
	echo "Failed to connect to database.\n";
}
$db = mysqli_select_db($connection, 'u998011828_imp');

if(!$db)
{
	echo "Failed to select database";
}


?>
