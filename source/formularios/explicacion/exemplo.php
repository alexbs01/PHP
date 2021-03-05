<?php
    header('Content-Type: text/html; charset=UTF-8'); 
	echo '<pre>';
	echo '$_REQUEST';
    print_r($_REQUEST);
		
	echo "<br/>";
	echo '$_GET';
    print_r($_GET);
	
	echo "<br/>";
	echo '$_POST';
	print_r($_POST);
	
	echo "<br/>";
	echo '$_FILEs';
	print_r($_FILES);
	
	move_uploaded_file($_FILES["arquivo1"]["tmp_name"], "subidos/".$_FILES["arquivo1"]["name"]);
	move_uploaded_file($_FILES["arquivo2"]["tmp_name"], "subidos/".$_FILES["arquivo2"]["name"]);
	
	//echo "Mi nombre es : $_REQUEST['nome']";
	echo '</pre>';
?>