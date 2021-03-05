<?php

	function incForm($contrasinal, $curriculo) {?>
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" method="post">    
				
			<p>Nome completo:<input type="text" name="nomeCompleto"/>
			<p>Nome de usuario:<input type="text" name="nomeUsuario"/>*</p>
			
			<p>Contrasinal:<input type="password" name="contrasinal" value="<?php echo $contrasinal;?>"/>*</p>
			
			<p>Idade:<input type="text" name="idade"/></p>
			
			<p>Poña a súa data de nacemento:<input type="date" name="dataNacemento"/></p>
			
			<p>EMail:<input type="text" name="emailUsuario"/>*</p>
			<p>URL da páxina:<input type="text" name="URLPaxinaUsuario"/></p>
			<p>Poña a IP do seu equipo persoal: <input type="text" name="IPDoEquipo"/></p>
			
			<p>Descripción de hobbies:<textarea rows="4" cols="40" name="descripcionHobbies"></textarea></p>
			
			<p>Desexa recibir información? <input type="checkbox" name="recibirInformacion"/></p>
			<p>Home <input type="radio" name="genero" value="home"/>  
			ou muller <input type="radio" name="genero" value="muller"/>*</p>
			
			<select name="menuLinguas[]" size="5" multiple="multiple">
				<option selected="selected" disabled="disabled">Escolla as linguas que sepa falar</option>
				<option>Castelán</option>
				<option>Galego</option>
				<option>Francés</option>
				<option>Inglés</option>
				<option>Alemán</option>
			</select>
			<p><input type="file" name="curriculo" value="<?php echo $curriculo;?>"/></p>
			<p><input type="submit" value="Submit" /></p>
					
		</form>
	<?php
	}
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
	<?php
		if (count($_POST)==0){
			incForm("", "", "", "", "", "", "", "", "", "", "", array());
		} else{
			
			$cadeaErros = "";
			$contrasinal=htmlspecialchars(trim(strip_tags($_POST["contrasinal"])), ENT_QUOTES, "ISO-8859-1");
			if ($contrasinal=="") {
				$cadeaErros = "O campo \"Contrasinal\" non pode estar valerio. ";
			}
			
			$curriculo = "";
			if(!isset($curriculo)) {
				$cadeaErros = "É obligatorio poñer un curriculo";
			}
				
			
			if ($cadeaErros != ""){
				incForm($contrasinal, $curriculo);
				echo "<strong><em>$cadeaErros</em></strong>";
			}else{
				echo "<p>O formulario encheuse correctamente. Os datos recibidos son:</p>";        
				echo "<p>nomeCompleto: ".$_POST["nomeCompleto"]."</p>";
				echo "<p>nomeUsuario: ".$_POST["nomeUsuario"]."</p>";
				echo "<p>contrasinal: ".$_POST["contrasinal"]."</p>";
				echo "<p>idade: ".$_POST["idade"]."</p>";
				echo "<p>dataNacemento: ".$_POST["dataNacemento"]."</p>";
				echo "<p>O email do usuario: ".$_POST["emailUsuario"]."</p>";
				echo "<p>A URL da páxina persoal: ".$_POST["URLPaxinaUsuario"]."</p>";
				echo "<p>A IP do equipo: ".$_POST["IPDoEquipo"]."</p>";
				echo "<p>Desexa recibir informacion: ".$_POST["recibirInformacion"]."</p>";
				echo "<p>O xénero é: ".$_POST["genero"]."</p>";
				echo "<p>Linguas que fala: ";
				for ($i=0; $i<count($_POST["menuLinguas"]); $i++){
					echo $_POST["menuLinguas"][$i];
					if ($i==(count($_POST["menuLinguas"])-1)) {
						echo ".";
					} else {
						echo ", ";
					}
				}
				move_uploaded_file($_FILES["curriculo"]["tmp_name"], "subidos/".$_FILES["curriculo"]["name"]);
				echo "</p>"; 
				echo '<p>IP do servidor: ' . $_SERVER["SERVER_ADDR"] . '</p>';
				echo '<p>IP do cliente: ' . $_SERVER["REMOTE_ADDR"] . '</p>';
				echo '<p>Localización do script PHP: ' . $_SERVER["PHP_SELF"] . '</p>'; 

        }
		}
	?>
		
	</body>
</html>