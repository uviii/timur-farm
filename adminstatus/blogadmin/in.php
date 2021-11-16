<?php

	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$http  = (strtolower($_SERVER['HTTPS']) == 'on' ? 'https:' : 'http:');
	$extra = './blogadmin/main.php';
	header("Location: $http//$host $uri/$extra");
	exit;
?>



