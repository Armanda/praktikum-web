<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>Login</title>
        <style type = "text/css">
        <!--
        .login{
        margin : 180px 80px 180px 180px;
        background-color : #00FF00;
        width : 200px;
        height : 250px;
        padding : 20px 20px 20px 20px;
        border : 3px solid #000000;
        }
        -->
        </style>
</head>

<body>
	<div class = "login">
	<h1 align = 'center'>Login</h1>
	<hr/ color = '#FFFFFF '>
	<form name = "login" action = "validasi.php" method = "post">
	<table>
	<tr>
        <td>Username : </td>
	</tr>
	<tr>
        <td width = "100px"><input type = "text" name = "user"></td>
	</tr>
	<tr>
        <td>Password : </td>
	</tr>
	<tr>
        <td width = "100px"><input type = "password" name = "pass"></td>
	</tr>
	<tr>
        <td><input type = "submit" name = 'login' value = 'LOGIN' ></td>
	</tr>
	</table>
	</form>
</div>
</body>
</html>