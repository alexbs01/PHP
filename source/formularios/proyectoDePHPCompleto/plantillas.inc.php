<?php function cabeceira(){ ?>
 <!-- Cabecera -->
    <div id="cabecera">

        <!-- Logo -->
        <h1 id="logo"><a href="./" title="Mi sitio web">O meu sitio web</a></h1>

        <!-- Buscador -->
        <div id="buscador">
            <form action="" method="get">
                <fieldset>
                	<legend>Buscador</legend>
                    <input type="text" name="busqueda" size="30" />
                    <input type="submit" name="botonbuscar" value="Buscar" />
                </fieldset>
            </form>
        </div> <!-- /buscador -->

		<div class="clear"></div>
    </div> <!-- /cabecera -->
<?php };

function menuPrincipal() { ?>

     <!-- Menú principal -->
     <div id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li class="seleccionado"><a href="#">Blog</a></li>
                <li><a href="#">Sobre min</a></li>
                <li><a href="#">Fotos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Enlaces</a></li>
                <?php if ($_SESSION["rol"]=="administrador"){?>
                    <li><a id="usuarios" href="#">Usuarios</a></li>
                <?php }?>
                <li><a href="sair.php">Sair</a></li>
            </ul>

        <div class="clear"></div>
     </div> <!-- /menú principal -->

<?php } ?>



<?php function contido() { 

    $subcategoria= (isset($_GET['subcategoria']))
           ? $_GET['subcategoria']
           : "Windows";   
?>

     <!-- Contenido -->
     <div id="contenido">

		<!-- Principal -->
        <div id="principal">

            
    <?php                
    require_once("conexion.inc.php");
    $consulta="SELECT * FROM nova WHERE subcategoria='$subcategoria' ORDER BY data";
    $idConex=conectarBdInformacion();
    $result=mysqli_query($idConex,$consulta);
    if ($result){
        $fila = mysqli_fetch_array($result);
        while (isset($fila)){
    ?>                            
            <!-- Articulo -->
            <div class="articulo">
                <h2><a href="#"><?php echo $fila["titulo"];?></a></h2>
                <p class="info">
                    <span class="fecha"><?php echo $fila["data"];?></span>
                    <span class="categoria"><a href="#"><?php echo $fila["subcategoria"];?></a></span>
                    <span class="autor"><a href="#"><?php echo $fila["autor"];?></a></span>
                    <span class="comentarios"><a href="#">Engadir comentario</a></span>
                </p>

                <p><?php echo $fila["contido"];?></p>

                <p class="btn-more"><a href="#">Seguir lendo...</a></p>
            </div> <!-- /articulo -->                                   
    <?php
            $fila = mysqli_fetch_array($result);
        }
        echo "</ul>";
    }
    mysqli_close($idConex);            
    ?>

            <div class="clear"></div>           
            
        </div><!-- /principal -->

        <!-- Secundario -->
        <div id="secundario">

                <!-- Sobre mi -->
                <h3><a href="#">Sobre min</a></h3>

                <div id="sobremi">
                    <img src="imaxes/mifoto.gif" alt="Mi foto" />
                    <p><strong>Usuario: </strong><?php echo $_SESSION["login"];?><p/>
                    <p><strong>Nome: </strong><?php echo $_SESSION["nome"];?><p/>
                    <p><strong>Apelidos: </strong><?php echo $_SESSION["apelidos"];?><p/>
                    <p><strong>Idade: </strong><?php echo $_SESSION["idade"];?><p/>
                    <p><strong>Localidade: </strong><?php echo $_SESSION["localidade"];?><p/>
                    <p><a href="#">O meu perfil público</a></p>
                </div> <!-- /sobre mi -->

                <div class="clear"></div>

                <!-- Categorías -->
                <?php                
                require_once("conexion.inc.php");
                $consulta="SELECT * FROM cat_subcat ORDER BY categoria, subcategoria";
                $idConex=conectarBdInformacion();
                $result=mysqli_query($idConex,$consulta);
                if ($result){
                    $fila = mysqli_fetch_array($result);
                    $cat="";
                    while (isset($fila)){
                        if ($cat!=$fila["categoria"]){
                            if ($cat!="")
                                echo "</ul>";
                            $cat=$fila["categoria"];
                            echo "<h3>$cat</h3>";
                            echo "<ul id=\"categorias\">";
                        }
                ?>                            
                            <li <?php if ($subcategoria==$fila["subcategoria"]) echo "class=\"seleccionado\"";?>>
                                <a href="index.php?subcategoria=<?php echo urlencode($fila["subcategoria"]);?>"><?php echo $fila["subcategoria"];?></a>
                            </li>                                      
                <?php
                        $fila = mysqli_fetch_array($result);
                    }
                    echo "</ul>";
                }
                mysqli_close($idConex);            
                ?> <!-- Categorías -->
                            
                <div class="clear"></div>            

        </div> <!-- /secundario -->

	<div class="clear"></div>
    </div> <!-- /contenido -->

<?php } ?>

<?php
function pe() { ?>
       <!-- Pie de página -->
    <div id="pie">
        <p id="copyright">&copy; 201X Nome da empresa</p>
    </div> <!-- /pie de página -->
    
<?php } ?>