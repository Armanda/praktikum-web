<?php
$nama = "admin";
$pasword = "admin";
$user = $_POST["user"];
$pass = $_POST["pass"];
$userstring = "^[A-Za-z]+$";
$passstring = "^[A-Za-z]+$";

if (isset($_POST["user"]) && isset($_POST["pass"]) && ($_POST["user"] =="$nama") && ($_POST["pass"] == "$pasword")){
?><script language = "JavaScript">
alert("Anda Berhasil Login")
document.location='index.php'</script><?php
}

else if (empty($_POST["user"]) || empty($_POST["pass"])){?>
<script language = "JavaScript">
alert("Lengkapi Username dan Password")
document.location='login.php'
</script><?php
}
else if((@!eregi($userstring, $user)) || (@!eregi($passstring, $pass))){?>
<script language = "JavaScript">
alert("Gunakan Huruf Untuk Username dan Password")
document.location='login.php'</script><?php
}

else if (("$user" != "$nama")||("$pass" != "$pasword")) {?>
<script language = "JavaScript">
alert("Username atau Password salah")
document.location='login.php'</script><?php
}
?>