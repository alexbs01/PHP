<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>

		<form action="exemplo.php" enctype="multipart/form-data" method="post">    
		
			<input type="file" name="arquivo1" />    
			<input type="file" name="arquivo2" />    
			
			<p><input type="submit" value="Submit" /></p>
			<p><input type="submit" value="Enviar" name="boton2" /></p>
			<p><button type="submit">Submit</button></p>
			<button type="submit" name="boton3" value="enviado">Enviar</button>
			<button type="submit" name="boton4" value="enviado">Enviar</button>

			<p><input type="text" name="caixaTexto1" /></p>
			<p><input type="text" name="caixaTexto2" value="Texto e elixir" /></p>
			<p><input type="password" name="caixaPassword1" /></p>
			<p><input type="password" name="caixaPassword2" value="ollomol" /></p>
			<p><textarea rows="4" cols="20" name="areaDeTexto1"></textarea></p>
			<p><textarea rows="4" cols="20" name="areaDeTexto2">Calquera texto</textarea></p>
			<p><input type="submit" value="Submit" /></p>

			<p><input type="checkbox" name="casiña1" /></p>
			<p><input type="checkbox" name="casiña2" /></p>
			<p><input type="checkbox" name="casiña3" value="Tres" /></p>
			<p><input type="submit" value="Submit" /></p>

			<p><input type="radio" name="radio1" /> <input type="radio" name="radio1" /></p>
			<p><input type="radio" name="radio2" /> <input type="radio" name="radio2" /></p>
			<p><input type="radio" name="radio3" /> <input type="radio" name="radio3" /></p>
			<p><input type="radio" name="radio4" value="Un" /> <input type="radio" name="radio4" value="Dous" /></p>
			<p><input type="radio" name="radio5" value="Un" /> <input type="radio" name="radio5" value="Dous" /></p>
			<p><input type="submit" value="Submit" /></p>

			<select name="menu1">
				<option selected="selected">1</option>
				<option>2</option>
			</select>
			<br/>
			<select name="menu2">
				<option selected="selected">Opción 1</option>
				<option>Opción 2</option>
			</select>
			<br/>
			<select name="menu3">
				<option selected="selected" value="Un">Opción 1</option>
				<option value="Dous">Opción 2</option>
			</select>
			<br/>
			<select name="menu4[]" size="3" multiple="multiple">
				<option selected="selected">Opción 1</option>
				<option>Opción 2</option>
				<option>Opción 3</option>
			</select>
			
			<input type="hidden" name="oculto1" />
			<input type="hidden" name="oculto2" value="Calquera cousa" />
			
			

		</form>

	</body>
</html>
