<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<style type="text/css">
	#container{
		height: auto;
		width: 250px;
		border: 3px solid #000000;
	}
	
	#container form{
		margin-top: 15px;
		margin-left: 30px;
	}
	
	h3{
		text-align: center;
}
</style>

<script type="text/javascript">
function sambungantugas(form){
	if(form.user.value.length == 0 || form.password.value.length == 0){
		alert("Silahkan isi username dan password");
		form.user.focus();
		return false;
	}
}
</script>

</head>
<body>
<div id="container">
	<h3>LOGIN</h3>
	<form name="form_test" method="post" action="<?php $_SERVER['PHP_SELF'];?>" onSubmit="return sambungantugas(this)">
		<p>
			<label for="user">Username </label>
			<input name="user" id="user" type="text" placeholder="Username"/>
		</p>
		<p>
			<label for="password">Password </label>
			<input name="password" id="password" type="password" placeholder="Password"/>
		</p>
		<p><input type="submit" name="submit" value="Login"></p>
	</form>
	
	<?php
		$user = $_POST['user'];
		$password = $_POST['password'];
		if(isset($user) || (isset($password))){
			require("sambungantugas.php");
		}
	?>
</div>
</body>
</html>