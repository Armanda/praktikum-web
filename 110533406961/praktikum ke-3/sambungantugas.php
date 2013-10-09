<?php
if((eregi("[^a-zA-Z ]", $_POST['user'])) || (eregi("[^a-zA-Z ]", $_POST['password']))){
	echo "Mohon gunakan tipe data string";
}
else{
	echo "Hai " . $_POST['user'];
}
?>