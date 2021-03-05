<?php
    header('Content-Type: text/html; charset=UTF-8'); 
	echo '<pre>';
	
	$recibirInformacion = (isset($_REQUEST['recibirInformacion']))? true : "";
	$genero = (isset($_REQUEST['genero']))? true : "";
	$menuLinguas = (isset($_REQUEST['menuLinguas']))? true : "";
	$dataNacemento = explode("/", $_REQUEST['dataNacemento']);
	
	if ($_REQUEST['nomeCompleto'] != "") {
		echo "Nome completo da persoa que cubriu o formulario: " . $_REQUEST['nomeCompleto'] . "</br>";
	} else {
		echo "Non completou o seu nome" . "</br>";
	}
	
	if ($_REQUEST['nomeUsuario'] != "") {
		echo "Nome de usuario no centro IES Fernando Wirtz: " . htmlspecialchars(trim(strip_tags($_REQUEST['nomeUsuario'])), ENT_QUOTES, "ISO-8859-1") . "</br>";
	} else {
		echo "Non completou o seu nome de usuario e tamén e <b>obrigatorio</b>" . "</br>";
	}
	
	if ($_REQUEST['contrasinal'] != "") { //Seis caracteres o mas
		echo "O contrasinal do usuario é: " . htmlspecialchars(trim(strip_tags($_REQUEST['contrasinal'])), ENT_QUOTES, "ISO-8859-1") . "</br>";
	} else {
		echo "Non completou o campo do contrasinal e tamén e <b>obrigatorio</b>" . "</br>";
	}
	
	if ($_REQUEST['idade'] != "" && ((filter_var($_REQUEST['idade'], FILTER_VALIDATE_INT) >= 0) && (filter_var($_REQUEST['idade'], FILTER_VALIDATE_INT) <= 130))) {
		echo "A súa idade é de: " . $_REQUEST['idade'] . "</br>";
	} else {
		echo "Non completou o campo da idade" . "</br>";
	}
	
	if ($_REQUEST['dataNacemento'] != "" && checkdate($dataNacemento[1], $dataNacemento[0], $dataNacemento[2])) {
		echo "A data na que naceu foi: " . $_REQUEST['dataNacemento'] . "</br>";
	} else {
		echo "Non completou a data de nacemento" . "</br>";
	}
	
	if ($_REQUEST['emailUsuario'] != "" && filter_var($_REQUEST['emailUsuario'], FILTER_VALIDATE_EMAIL)) {
		echo "O seu correo electrónico é: " . htmlspecialchars(trim(strip_tags($_REQUEST['emailUsuario'])), ENT_QUOTES, "ISO-8859-1") . "</br>";
	} else {
		echo "Non completou o email persoal e tamén e <b>obrigatorio</b>" . "</br>";
	}
	
	if ($_REQUEST['URLPaxinaUsuario'] != "" && filter_var($_REQUEST['URLPaxinaUsuario'], FILTER_VALIDATE_URL)) {
		echo "A súa páxina de inicio é: " . $_REQUEST['URLPaxinaUsuario'] . "</br>";
	} else {
		echo "Non completou a páxina de inicio" . "</br>";
	}
	
	if ($_REQUEST['IPDoEquipo'] != "" && filter_var($_REQUEST['IPDoEquipo'], FILTER_VALIDATE_IP)) {
		echo "A este usuario correspóndelle o ordenador coa IP: " . $_REQUEST['IPDoEquipo'] . "</br>";
	} else {
		echo "Non estableceu unha IP do ordenador ou non é correcta" . "</br>";
	}
	
	if ($_REQUEST['descripcionHobbies'] != "") {
		echo "Esta persoa di que os seus hobbies son: " . $_REQUEST['descripcionHobbies'] . "</br>";
	} else {
		echo "Non estableceu hobbies" . "</br>";
	}
	
	if (isset($_REQUEST['recibirInformacion'])) {
		echo "Esta persoa desexa recibir información: " . $_REQUEST['recibirInformacion'] . "</br>";
	} else {
		echo "Esta persoa non desexa recibir información" . "</br>";
	}
	
	if ($genero) {
		echo "O seu xénero é: " . htmlspecialchars(trim(strip_tags($_REQUEST['genero'])), ENT_QUOTES, "ISO-8859-1") . "</br>";
	} else {
		echo "Non completou o xénero e tamén e <b>obrigatorio</b>" . "</br>";
	}
	
	if ($menuLinguas) {
		echo "Sabe falar estas linguas: " . $_REQUEST['menuLinguas'] . "</br>";
	} else {
		echo "Esta persoa non sabe falar" . "</br>";
	}
	
	move_uploaded_file($_FILES["curriculo"]["tmp_name"], "subidos/".$_FILES["curriculo"]["name"]);


	echo '</pre>';


// htmlspecialchars(trim(strip_tags($_REQUEST['nome'])), ENT_QUOTES, "ISO-8859-1")
?>