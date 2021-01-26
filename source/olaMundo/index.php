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
			$num4 = 11;

			$resultado = array();
			
			$resultado[0] = $num1 + $num1;
			$resultado[1] = $num2 ** $num2;
			$resultado[2] = $num3 % $num3;
			
			$resultado[3] = $num1++;
			$resultado[4] = $num2--;
			
			$resultado[5] = $num3 == $num1;
			$resultado[6] = $num1 <= $num2;
			
			$resultado[7] = $num1 && $num2;
			$resultado[8] = $num1 || $num2;
			$resultado[9] = $num1 + $num2;
			
			echo "$resultado[0]";
			echo "$resultado[1]";
			echo "$resultado[2]";
			echo "$resultado[3]";
			echo "$resultado[4]";
			echo "$resultado[5]";
			echo "$resultado[6]";
			echo "$resultado[7]";
			echo "$resultado[8]";
			echo "$resultado[9]";
		?>
    </body>
</html>
