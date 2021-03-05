<?php
    function conectarBdXeral() {
        $servidor="localhost";
        $usuario="usrapweb";
        $contrasinal="abc123.";
        $bd="xeral";
        $charset="utf8";

        $idConex=@mysqli_connect($servidor, $usuario, $contrasinal);  // El @ suprime lo mensajes de errores o advertencias, se considera mala práctica
        if (mysqli_connect_errno($idConex)){
            echo "Erro na conexión coa base de datos: ".mysqli_connect_error();
            die();
        }
        if (!mysqli_select_db($idConex, $bd)){
            echo "Erro ao seleccionar a basee de datos: ".mysqli_error();
            die();
        }
        mysqli_query($idConex,"SET CHARACTER SET '$charset'");
        mysqli_query($idConex,"SET NAMES '$charset'");
        return $idConex;
    }	
?>
