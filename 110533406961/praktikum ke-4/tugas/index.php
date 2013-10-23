<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Autentikasi Session</title>
	<style type="text/css">
	.inner{
			margin:200px auto; padding:20px; width:250px; border:3px solid 	#191970;}
	</style>
</head>

<body>
	<p>
	<?php
		ini_set('display_errors', 1);
		define('_VALID', 1);
		require_once('./auth.php');
		init_login();
		validate();
	?>
</p>

<h2 align="center">Welcome</h2>
	<p align="center">
		<a href="?m=logout"></a>
	<p align="center"><a href="?m=logout">Logout</a></p>
	
</body>
</html>