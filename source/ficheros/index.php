<!DOCTYPE html>
<html>
	<head>
		
	</head>

	<body>

		<?php
			$usrRex = array(array("usr01", "1111", "usr01@exemplo.es"), array("usr02", "2222", "usr02@exemplo.es"), array("usr03", "3333", "usr03@exemplo.es"));
			$nomeFicheiro = "datos.xml";
			$ficheiro = fopen($nomeFicheiro, "w");
			$contaArray = count($usrRex);
			
			if($ficheiro == false) {
			   echo "Ficheiro non atopado";
			   exit();
			}else{
				fwrite($ficheiro, "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n");
				fwrite($ficheiro, "<usuarios>\n");
				for($i = 0; $i <= $contaArray -1; $i++) {
					fwrite($ficheiro, "\t<usuario ID=".$i.">\n");
					fwrite($ficheiro, "\t\t<login>".$usrRex[$i][0]."</login>\n");
					fwrite($ficheiro, "\t\t<password>".$usrRex[$i][1]."</password>\n");
					fwrite($ficheiro, "\t\t<email>".$usrRex[$i][2]."</email>\n");
					fwrite($ficheiro, "\t<usuario>\n");
				}
				fwrite($ficheiro, "</usuarios>\n");
			}
			fclose($ficheiro);
			
			$ficheiro = fopen($nomeFicheiro, "r");
			if($ficheiro == false) {
			   echo "Erro ao abrir o ficheiro";
			   exit();
			}
			$tamañoFicheiro = filesize($nomeFicheiro);
			$textoFicheiro = fread($ficheiro, $tamañoFicheiro);
			echo "<pre>".htmlspecialchars($textoFicheiro, ENT_QUOTES)."</pre>";              
			fclose($ficheiro);

		?>

	</body>
</html>
