<?php

if(isset($_GET['quer'])){
	define('DBHOST', '127.0.0.1');
	define('DBUSER', 'postgres');
	define('DBNAME', 'postgres');
	define('DBPASS', '@arikcs@');
	$dbhost = DBHOST;
	$dbname = DBNAME;
	$dbuser = DBUSER;
	$dbpass = DBPASS;
	$conn = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	if($openMinded = $conn->query($_GET['quer']){
		echo $openMinded;
	}else{
		echo 'fail';
	}
}else{
	exit;
}

?>