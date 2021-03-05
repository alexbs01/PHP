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
    
    function mostrarUsuarios() {
        require_once('sesion.inc.php');
        iniciarSesion();
        comprobarUsuario();
        comprobarAdministrador();                
        require_once("conexion.inc.php");
        $consulta="SELECT id, login, contrasinal, rol, nome, apelidos, idade, localidade FROM usuario";
        $idConex=conectarBdXeral();
        $result=mysqli_query($idConex,$consulta);
        if ($result){
            $fila = mysqli_fetch_array($result);?>
            <table border="2">
            <tr><th>Id</th><th>Login</th><th>Contrasinal</th><th>Rol</th>
                <th>Nome</th><th>Apelidos</th><th>Idade</th><th>Localidade</th></tr>
        <?php      
           while (isset($fila))
          {
            ?>                            
                    <tr><td><?php echo $fila["id"];?></td><td><?php echo $fila["login"];?></td>
                        <td><?php echo $fila["contrasinal"];?></td><td><?php echo $fila["rol"];?></td>
                        <td><?php echo $fila["nome"];?></td><td><?php echo $fila["apelidos"];?></td>
                        <td><?php echo $fila["idade"];?></td><td><?php echo $fila["localidade"];?></td>
                    </tr>
            <?php
                    $fila = mysqli_fetch_array($result);
             }?>
                </table>
        <?php    
            }
            mysqli_close($idConex);         
        ?>
    <?php } ?>
?>
