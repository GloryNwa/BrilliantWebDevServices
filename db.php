<?php



$db_host = 'remotemysql.com';
$db_user = 'cllNCzBdnm';
$db_password = '0tfcaATAqU';
$db_name = 'cllNCzBdnm';




$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}



?>
