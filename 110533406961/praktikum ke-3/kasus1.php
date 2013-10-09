<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Preselecting</title>
</head>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	Tempat Lahir :
	<select name="menu">
		<option value="Rumah sakit" selected="yes" />Rumah sakit
		<option value="Rumah bersalin" />Rumah bersalin
		<option value="Rumah bidan" />Rumah bidan
		<option value="Rumah ibu" />Rumah ibu
	</select>
	<br />
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['menu'])){
		echo $_POST['menu'];
	}
?>
</body>
</html>