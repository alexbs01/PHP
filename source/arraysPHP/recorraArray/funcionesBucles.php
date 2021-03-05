<?php	
	/* Creación de funciones */
	
	function bucleWhile($numeros, $contador) {
		while($contador <= count($numeros)-1) {
			echo $numeros[$contador] . "<br/>";
			$contador++;
		}
	}

	function bucleDoWhile($numeros, $contador) {
		do {
			echo $numeros[$contador] . "<br/>";
			$contador++;
		} while($contador <= count($numeros)-1);
	}

	function bucleFor($numeros) {
		for($i = 0; $i <= count($numeros)-1; $i++) {
			echo $numeros[$i] . "<br/>";
		}
	}

	function bucleForeach($numeros) {
		foreach($numeros as $x) {
			echo $x . "<br/>";
		}
	}
?>