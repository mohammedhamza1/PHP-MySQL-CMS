<?php 

define("HOSTNAME", "localhost");
define("HOST_USER", "mohammed");
define("HOST_PASS", "mohammed");
define("DB_NAME", "website");
//database connection
$conn = mysqli_connect(HOSTNAME,HOST_USER,HOST_PASS,DB_NAME);

if ($conn) {
	//echo "connected";
}else{
	die("connection failed".mysqli_connect_error());
}


 ?>

