<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";

$conn = mysqli_connect($servername , $username , $password ,$dbname);

if ($conn) {
	// echo "conetion ok";
	# code...
}else{echo "conection failed" .mysqli_connect_error();

}
?>