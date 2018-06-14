<?php

	
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbuser = getenv("databaseuser");
	$dbpwd = getenv("databasepassword");
	$dbname = getenv("daztabasename");

$con = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	echo "Conexion Correcta!";
}

?>