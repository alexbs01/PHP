<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $num1 = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199);
			$num2 = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199);
			$resultado = array();
			$k=0;
			$ordendao = array();

			for($i = 0; $i <= count($num1) - 1; $i++) {	
				
				for($j = 0; $j <= count($num2) - 1; $j++) {
					$resultado[$k] = $num1[$i] * $num2[$j];
					$k++;
				}
			}
			echo "En total se calcularon: " . count($resultado) . " elementos. <br/>";
			//sort($resultado);
			//array_unique($resultado);
			/*
			for($i = 0; $i <= 2116 - 1; $i++) {
				echo "$resultado[$i] <br/>";
			}*/
			
			foreach($resultado as $ordenado) {
				
				array_unique($resultado);
			}
			sort($resuldtado);
			for($i = 0; $i <= 2116 - 1; $i++) {
				echo "$resultado[$i] <br/>";
			}
        ?>
    </body>
</html>
