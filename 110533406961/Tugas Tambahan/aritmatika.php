<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Aritmatika" content="text/html; charset=utf-8" />
<title>Kalkulator</title>

</head>
<body>
	<h1>Aritmatika</h1>
	<form method="post">
	<table>

	<tr>
		<td><input type="number" name="angka1" value="" required placeholder= "Angka 1"/></td>
		<td align="center">
		<select name="operator">
		<option></option>
		<option value ="+">+</option>
		<option value ="-">-</option>
		<option value ="*">*</option>
		<option value ="/">/</option>
		</select></td>
		<td><input type="number" name="angka2" value="" required placeholder= "Angka 2"/></td>

<?php
if(isset($_POST['angka1']) or isset($_POST['angka2'])){
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	}
	else{
	$angka1 = "0";
	$angka2 = "0";
	}
	if(isset($_POST['operator'])){
	$operator =$_POST['operator'];
	}
	else{
	$operator ="";
	}

	switch($operator){
		case "+":
		$hasil = $_POST["angka1"] + $_POST["angka2"];
	break;
		case "-":
		$hasil = $_POST["angka1"] - $_POST["angka2"];
	break;
		case "*":
		$hasil = $_POST["angka1"] * $_POST["angka2"];
	break;
		case "/":
		$hasil = $_POST["angka1"] / $_POST["angka2"];
	break;
	}
?>

<td><input type="submit" name="Operasi" value="="></td>
<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>

</tr>
</table>
</form>
</body>
</html>