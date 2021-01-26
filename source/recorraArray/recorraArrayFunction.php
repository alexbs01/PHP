<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
			/* Inicialización de variables */
            $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
			$contador = 0;
				
			require_once('funcionesBucles.php');
			
			if (!empty($numeros)) {
				echo "Recorrer con bucle while<br/>";
				bucleWhile($numeros, $contador);
			}
			
			if (!empty($numeros)) {
				$contador = 0;
				echo "<br/>Recorre con bucle do-while<br/>";
				bucleDoWhile($numeros, $contador);
			}
			
			if (!empty($numeros)) {
				echo "<br/>Recorre con bucle for<br/>";
				bucleFor($numeros);
			}
			
			if (!empty($numeros)) {
				echo "<br/>Recorre con bucle foreach<br/>";
				bucleForeach($numeros);
			}
		
        ?>
    </body>
</html>

