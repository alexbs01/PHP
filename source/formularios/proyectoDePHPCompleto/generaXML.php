<?php

   // function xerarURLFichXML() {
        
        require_once('sesion.inc.php');
        iniciarSesion();
        comprobarUsuario();
        comprobarAdministrador();                
        require_once("conexion.inc.php");
        $consulta="SELECT id, login, contrasinal, rol, nome, apelidos, idade, localidade FROM usuario";
        $cuentaTuplas="SELECT COUNT(login) FROM usuario"; // Cuenta el numero de tuplas de la tabla
        $idConex=conectarBdXeral();
        $result=mysqli_query($idConex,$consulta);
        $tuplas=mysqli_query($idConex, $cuentaTuplas);
        
        $nomeFicheiro = "datos.xml";
        $ficheiro = fopen($nomeFicheiro, "w");
        
        if($result){ 
            $i = 1;
            $fila = mysqli_fetch_array($result);
            $numeroTuplas=mysqli_fetch_array($tuplas);
            fwrite($ficheiro, "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n");
           for($i = 1; $i <= $numeroTuplas[0]; $i++) {
                    fwrite($ficheiro, "\t<usuario ID=".$i.">\n");
                    fwrite($ficheiro, "\t\t<login>".$fila["login"]."</login>\n");
                    fwrite($ficheiro, "\t\t<contrasinal>".$fila["contrasinal"]."</contrasinal>\n");
                    fwrite($ficheiro, "\t\t<rol>".$fila["rol"]."</rol>\n");
                    fwrite($ficheiro, "\t\t<nome>".$fila["nome"]."</nome>\n");
                    fwrite($ficheiro, "\t\t<apelidos>".$fila["apelidos"]."</apelidos>\n");
                    fwrite($ficheiro, "\t\t<idade>".$fila["idade"]."</idade>\n");
                    fwrite($ficheiro, "\t\t<localidade>".$fila["localidade"]."</localidade>\n");
                    fwrite($ficheiro, "\t<usuario>\n");

                    $fila = mysqli_fetch_array($result);
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
   // }

?>

