<?php

// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'brilliantdevelopers';

$db_host = 'remotemysql.com';
$db_user = 'cllNCzBdnm';
$db_password = '0tfcaATAqU';
$db_name = 'cllNCzBdnm';

// mysql://bd6be8838570c4:f1bd98de@us-cdbr-east-03.cleardb.com/heroku_c45f68a61de44e6?
// CLEARDB_DATABASE_URL

// $db_host ='arectlimited.com.ng';
// $db_user ='arectlim_glorynwa';
// $db_password = 'SeLVM[uune@w';
// $db_name ='arectlim_brilliant';

// $db_host = 'us-cdbr-east-03.cleardb.com';
// $db_user = 'bd6be8838570c4';
// $db_password = 'f1bd98de@us';
// $db_name = 'arectlim_brilliant';



$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}



?>