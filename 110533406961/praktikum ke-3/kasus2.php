<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Preselecting Checkbox</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Sarapan hari ini : <br />
	<input type="checkbox" name="menu[]" value="nasi" checked="yes" />nasi <br />
	<input type="checkbox" name="menu[]" value="roti" />roti <br />
	<input type="checkbox" name="menu[]" value="garam" />garam <br />
	<input type="checkbox" name="menu[]" value="sambal" />sambal <br />
	<input type="checkbox" name="menu[]" value="kecap" />kecap<br />
	<input type="checkbox" name="menu[]" value="air" />air <br />
	<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['menu'])){
		foreach($_POST['menu'] as $key => $val){
		echo $key . ' -> ' . $val . '<br />';
		}
	}
?>
</body>
</html>