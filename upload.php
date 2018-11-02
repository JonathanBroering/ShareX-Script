<?php
//loading the config
include 'config.php';

if (isset($_POST['key']) and $_POST['key'] == $key){
	$file = explode('.', $_FILES['file']['name']);
	$target = getcwd() . $dir . $_POST['name'] . '.' . end($file);
	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
		$target_parts = explode($dir, $target);
		echo $url .end($target_parts);
	}
}else{
	echo 'Sorry, your Key is wrong or missing';
}


?>
