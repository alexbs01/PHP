<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
			$contador = 0;
			if (!empty($numeros)) {
				echo "<br/>Recorrer con bucle while<br/>";
				while($contador <= 8) {
					echo $numeros[$contador] . "<br/>";
					$contador++;
				}
			}
			
			if (!empty($numeros)) {
				$contador = 0;
				echo "<br/>Recorre con bucle do-while<br/>";
				do {
					echo $numeros[$contador] . "<br/>";
					$contador++;
				} while($contador <= 8);
			}
			
			if (!empty($numeros)) {
				echo "<br/>Recorre con bucle for<br/>";
				for($i = 0; $i <= 8; $i++) {
					echo $numeros[$i] . "<br/>";
				}
			}
			
			if (!empty($numeros)) {
				echo "<br/>Recorre con bucle foreach<br/>";
				foreach($numeros as $x) {
					echo $x . "<br/>";
				}
			}
			
        ?>
    </body>
</html>
