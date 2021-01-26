<?php function cabeceira() {?>

	<!-- Cabecera -->
		<div id="cabecera">

			<!-- Logo -->
			<h1 id="logo"><a href="/" title="Mi sitio web">O meu sitio web</a></h1>

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
<?php } ?>

<?php function menuPrincipal() { ?>
	<!-- Menú principal -->
     <div id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li class="seleccionado"><a href="#">Blog</a></li>
                <li><a href="#">Sobre min</a></li>
                <li><a href="#">Fotos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Enlaces</a></li>
            </ul>

        <div class="clear"></div>
     </div> <!-- /menú principal -->
<?php } ?>

<?php function contido() { ?>
	<!-- Contenido -->
     <div id="contenido">

		<!-- Principal -->
		<div id="principal">

            <!-- Articulo -->
            <div class="articulo">
                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                <p class="info">
                    <span class="fecha">dd-mm-aaaa 00:00</span>
                    <span class="categoria"><a href="#">deseño</a></span>
                    <span class="autor"><a href="#">Nome Apelido</a></span>
                    <span class="comentarios"><a href="#">Engadir comentario</a></span>
                </p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam pellentesque enim blandit enim bibendum blandit.
                Integer eu leo ac est aliquet imperdiet. Quisque nec justo id augue posuere malesuada. Nullam ac metus. Cras non leo
                ut est placerat condimentum.</p>

                <p class="btn-more"><a href="#">Seguir lendo...</a></p>
            </div> <!-- /articulo -->

            <div class="clear"></div>
            
            <!-- Articulo -->
            <div class="articulo">
                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                <p class="info">
                    <span class="fecha">dd-mm-aaaa 00:00</span>
                    <span class="categoria"><a href="#">deseño</a></span>
                    <span class="autor"><a href="#">Nome Apelido</a></span>
                    <span class="comentarios"><a href="#">Engadir comentario</a></span>
                </p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam pellentesque enim blandit enim bibendum blandit.
                Integer eu leo ac est aliquet imperdiet. Quisque nec justo id augue posuere malesuada. Nullam ac metus. Cras non leo
                ut est placerat condimentum.</p>

                <p class="btn-more"><a href="#">Seguir lendo...</a></p>
            </div> <!-- /articulo -->

            <div class="clear"></div>
            
            <!-- Articulo -->
            <div class="articulo">
                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                <p class="info">
                    <span class="fecha">dd-mm-aaaa 00:00</span>
                    <span class="categoria"><a href="#">deseño</a></span>
                    <span class="autor"><a href="#">Nome Apelido</a></span>
                    <span class="comentarios"><a href="#">Engadir comentario</a></span>
                </p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam pellentesque enim blandit enim bibendum blandit.
                Integer eu leo ac est aliquet imperdiet. Quisque nec justo id augue posuere malesuada. Nullam ac metus. Cras non leo
                ut est placerat condimentum.</p>

                <p class="btn-more"><a href="#">Seguir lendo...</a></p>
            </div> <!-- /articulo -->

            <div class="clear"></div>

        </div><!-- /principal -->

        <!-- Secundario -->
        <div id="secundario">

                <!-- Sobre mi -->
                <h3><a href="#">Sobre min</a></h3>

                <div id="sobremi">
                    <img src=".\imaxes\mifoto.gif" alt="Mi foto" />
                    <p><strong>Nome apelidos</strong><br />
                    Idade<br />
                    Cidade de residencia<br />
                    <a href="#">O meu perfil público</a></p>
                </div> <!-- /sobre mi -->

                <div class="clear"></div>

                <!-- Categorías -->
                <h3>Categorías</h3>

                <ul id="categorias">
                    <li class="seleccionado"><a href="#">Categoría 1</a></li>
                    <li><a href="#">Categoría 2</a></li>
                    <li><a href="#">Categoría 3</a></li>
                    <li><a href="#">Categoría 4</a></li>
                    <li><a href="#">Categoría 5</a></li>
                </ul>

                <div class="clear"></div>

                <!-- Archivo -->
                <h3>Arquivo</h3>

                <ul id="archivo">
                    <li class="seleccionado"><a href="#">Xaneiro 201X</a></li>
                    <li><a href="#">Decembro 201X</a></li>
                    <li><a href="#">Novembro 201X</a></li>
                    <li><a href="#">Outubro 201X</a></li>
                    <li><a href="#">Setembro 201X</a></li>
                </ul>

                <div class="clear"></div>

                <!-- Enlaces -->
                <h3>Enlaces</h3>

                <ul id="enlaces">
                    <li><a href="#">Enlace 1</a></li>
                    <li><a href="#">Enlace 2</a></li>
                    <li><a href="#">Enlace 3</a></li>
                    <li><a href="#">Enlace 4</a></li>
                    <li><a href="#">Enlace 5</a></li>
                </ul>

                <div class="clear"></div>

        </div> <!-- /secundario -->

	<div class="clear"></div>
    </div> <!-- /contenido -->
<?php } ?>

<?php function pe() { ?>
	  <!-- Pie de página -->
    <div id="pie">
        <p id="copyright">&copy; 201X Nome da empresa</p>
    </div> <!-- /pie de página -->
<?php } ?>
