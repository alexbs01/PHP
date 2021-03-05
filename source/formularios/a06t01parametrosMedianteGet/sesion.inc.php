<?php
    $nomeSesion = 'OMeuSitioWeb';

    function iniciarSesion() {
        global $nomeSesion;
        if (!isset($_SESSION)) {
                session_name($nomeSesion);
                session_start();
        }
    }	

    function finalizarSesion() {
        global $nomeSesion;
        session_name($nomeSesion);
        session_start();
        $_SESSION = array();        
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }        
        session_destroy();
    }

    function comprobarUsuario() {
        if (!isset($_SESSION["login"])){
            header("Location: ./login.php");
            die();
        }
    }
    
    function comprobarAdministrador() {
        if ($_SESSION["rol"]!="administrador"){
            header("Location: ./index.php");
            die();
        }
    }    
?>
