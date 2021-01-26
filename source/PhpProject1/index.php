<?php
/* ***************************************************
 * el ordenador adivina el número que piensa el jugador
 * versión: con botones para las opciones
 */
$msgacierto="";
if (!isset ($_POST["mayor"]) and !isset ($_POST["menor"]) and !isset ($_POST["correcto"])) {
	// estoy en 1ª ejecución
	$min=0;
	$max=100;
	$n=(int)(($min + $max)/2);
} else { 
	// estoy en 2ª ejecución
	$min=$_POST["min"];
	$max=$_POST["max"];
	$n=(int)(($min + $max)/2);
	if ($min<$max) {
		if (isset($_POST["correcto"])) {
			// han pulsado el botón "correcto"
			$msgacierto=". OLÉ!!!";
		} else {
			// han pulsado el botón mayor o menor
			if (isset($_POST["mayor"])) {
				$min=$n+1;
			} else {
				$max=$n-1;
			} 
			$n=(int)(($min + $max)/2);
		}
	} else {
		$msgacierto=" !!! ERES un MENTIROSO !!!";
	}
}
?>

<html>
<head>
	<title>Encontrar número</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<div>
		<h1>El Ordenador adivina N&uacute;mero </h1>
	
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<fieldset>
				<legend>Piensa en un numero entre 1 y 100 y a ver si lo adivino.</legend>

				El n&uacute;mero es ..... <b><?php echo $n; echo $msgacierto; ?></b> ?<p/>
				
				<!--<input type="radio" name="opcion" value="menor" />Menor 
				<input type="radio" name="opcion" value="mayor" />Mayor 
				<input type="radio" name="opcion" value="correcto" checked="checked"/>Has acertado! 
				-->

				<input type="hidden" name="min" value="<?php echo $min;  ?>" />
				<input type="hidden" name="max" value="<?php echo $max; ?>" />

				<p/>
				<input type="submit" name="menor" value="Es Menor"/>
				<input type="submit" name="correcto" value="Acert&eacute;"/>
				<input type="submit" name="mayor" value="Es Mayor"/>
				<p/>
				<input type="submit" value="Iniciar otra partida"/>			
			</fieldset>
		</form>
	</div>
</body>
</html>