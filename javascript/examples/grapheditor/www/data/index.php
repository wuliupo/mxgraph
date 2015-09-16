<?php

if(array_key_exists('open', $_GET)){
	//echo 'open';
}else if(array_key_exists('save', $_GET)){
	//echo 'save';
}else if(array_key_exists('export', $_GET)){
	//echo 'export';
	$filename = $_POST['filename'];
	$format = $_POST['format'];
	$bg = $_POST['bg'];
	$w = $_POST['w'];
	$h = $_POST['h'];
	$plain = $_POST['plain'];
}else {
	echo 'action not define';
	var_dump($_POST);
}

?>