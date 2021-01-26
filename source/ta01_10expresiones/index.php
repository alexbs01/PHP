<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<?php
			$num1 = 3;
			$num2 = 5;
			$num3 = 7;
			$num4 = "4";

			$resultado = array();
			
			# Operadores aritméticos
			$resultado[0] = $num1 + $num1; # de suma
			$resultado[1] = $num2 ** $num2; # de potencia
			$resultado[2] = $num3 % $num1; # de módulo
			
			# Operadores de incremento y disminución
			$resultado[3] = ++$num1; # de incremento
			$resultado[4] = --$num2; # de decremento
			
			# Operadores de comparación
			$resultado[5] = $num3 == $num1; # dc comparación (si es falso no muestra nada)
			$resultado[6] = $num1 <= $num2; 
			$resultado[7] = $num3 > $num1;
			$resultado[8] = $num1 === $num4;
			
			# Operador lógico
			$resultado[9] = !($num1 === $num4); # dc negación a un operador de comparación
			
			
			echo "Los valores de las variables son" . "<br/>";
			echo '$num1 = 3' . "<br/>";
			echo '$num2 = 5' . "<br/>";
			echo '$num3 = 7' . "<br/>";
			echo '$num4 = "4"' . "<br/>" . "<br/>";;
			
			echo "Si es falso no se muestra nada" . "<br/>" . "<br/>";
			
			echo "Numero1 + numero1 = $resultado[0]" . "<br/>";
			echo "Numero2 elevado a numero2 = $resultado[1]" . "<br/>";
			echo "El módulo de numero3 entre numero1 = $resultado[2]" . "<br/>" . "<br/>";
			
			echo "A numero1 le suma 1 = $resultado[3]" . "<br/>";
			echo "A numero2 le resta 1 = $resultado[4]" . "<br/>" . "<br/>";
			
			echo "Compara numero3 con numero1 y dice si es igual = $resultado[5]" . "<br/>";
			echo "Compara numero1 con numero2 mirando si es menor o igual = $resultado[6]" . "<br/>";
			echo "Mira si numero1 es distinto a numero4 y es = $resultado[7]" . "<br/>";
			echo "Hace una comparacion de === y es = $resultado[8]" . "<br/>" . "<br/>";
			
			echo "Niega el resultado de la línea de arriba (arriba al ser FALSE no muestra nada) y es = $resultado[9]" . "<br/>";
			
			$x = -4;
			$x = -$x;
			echo $x;
		?>
    </body>
</html>