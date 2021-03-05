<?php 
    require_once('sesion.inc.php');
    iniciarSesion();
    $usuarioOk = false;
    $hayDatos = isset($_POST["usuario"]);
    if ($hayDatos) {
        $login = $_POST["usuario"];
        $contrasinal = $_POST["contrasinal"];

        require_once("conexion.inc.php");
        $idConex=conectarBdXeral();

        $consulta="SELECT * FROM usuario WHERE login='$login' and contrasinal=MD5('$contrasinal')";
        $result=mysqli_query($idConex,$consulta);

        if ($result){
            $fila = mysqli_fetch_array($result);
            if (isset($fila)){
                $usuarioOk = true;                
                $_SESSION["login"] = $fila['login'];
                $_SESSION["nome"] = $fila['nome'];
                $_SESSION["rol"] = $fila['rol'];
                $_SESSION["apelidos"] = $fila['apelidos'];
                $_SESSION["idade"] = $fila['idade'];
                $_SESSION["localidade"] = $fila['localidade'];
                mysqli_close($idConex);
                header("Location: ./index.php");
                die();              
            }
        }        
    }
?>

<?php require_once('plantillas.inc.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <!-- Este deseño baséase nun deseño web libre chamado CrystalX e que se pode descargar desde
         a dirección http://www.oswd.org/design/preview/id/3465 -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="es" />

    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>O meu sitio web</title>
    <meta name="description" content="O meu sitio web" />
    <meta name="keywords" content="sitio, web" />
    
    <link rel="shortcut icon" href="imaxes/Icono.ico"/>
    <link rel="index" href="/" title="Inicio" />
	
    <link rel="stylesheet" media="screen,projection" type="text/css" href="exercicio.css" />
</head>

<body>

<!-- Contenedor -->
<div id="contenedor">

    <?php cabeceira();?>
    
    <div id="contenido">
            <fieldset><legend>Identificaci&oacute;n del usuario</legend>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <?php if ($hayDatos && !$usuarioOk) { ?>
                    <p>Usuario o contraseña incorrecto</p>
                    <?php } ?>
                            <p>Para el acceso a esta aplicaci&oacute;n introduzca su nombre de usuario y contraseña.</p>
                            <br/><label class="etiqueta">Usuario:</label><br/>
                            <input name="usuario" size="10" value="" type="text" id="LoginUsuario"/>
                            <br/><label class="etiqueta">Contraseña:</label><br/>
                            <input name="contrasinal" size="10" value="" type="password" id="LoginPass"/>
                        <input type="submit" class="botazul" value="Entrar" />
                    </form>
            </fieldset>
    </div>
    
    <?php pe(); ?>
</div>
</body>
</html>


