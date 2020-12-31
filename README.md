# Programación con PHP
PHP es un lenguaje de programación de backend, por lo que se usa en el lado del servidor.  

## Como se crea un script de PHP

Los scripts de PHP se crean en un archivo .php, en el cual, el código de PHP insertado en el HTML tendrá esta composición.  

```php
<?php
	<codigoPHP>
?>
```

El código de PHP comienza con una etiqueta de apertura ```<?php``` y finaliza con ```?>```, teniendo en el medio todo el código que queramos que se ejecute.  

## Primeros pasos

### Comentario

Los comentarios en este lenguaje puede ser monolínea o multilínea, donde para la primera hay dos opciones y para la segunda una.  
- Comentarios monolínea: Se pueden hacer con ```// <comentario>``` o con una única ```# <comentario>```.
- Comentario multilínea: Este como en muchos lenguajes de programación es ```/* <comentario> */```.

### Hola mundo

La instrucción que sirve para mostrar texto es ```echo```. Y para hacer un "Hola mundo":

```php
<?php
	echo 'Hola mundo'; # Imprime la cadena de texto
?>
```

En PHP todas las instrucciones terminan con un **;** y las cadenas de texto van entre comillas simples.  

### Variables

Las variables en PHP no se declaran como string, entero, decimal o booleano, simplemente se inicia la variable con el símbolo de **$** de esta forma ```$<nombreVariable> = <valorDeLaVariable>;```. Donde *nombreVariable* es el nombre que le queramos darle a la variable, también es importante recordar que es sensible a mayúsculas y minúsculas, por lo que $numero y $Numero serían distintos. Y *nombreVariable* será el valor que se almacenará, los número se pondrán tal cual y las cadenas de texto irán con comillas simples.  

```php
<?php
	$num1 = 10;
	$num2 = 15;
	$resultado = $num1 + $num2;
	echo "El resultados es: $resultado"; # Imprime la cadena de texto y el resultado, pero las "" hacen que la variable se ejecute como lo que es
	
	# Si en vez de poner "" pusieramos '', la variable tomaría no tomaría el valor que deberia tomar, si no que se imprimiría *El resultados es: $resultado* tomando la variable como cadena
	
	echo 'El resultados es:' . $resultado; # Pero si queremos poner '' para concatenar se usará el punto **.**
?>
```

### Constantes

Las contantes son valores que definimos y se mantienen invariables durante todo el periodo de ejecución del script. Una constate tiene la sintaxis de ```define("<NOMBRECONSTANTE>", "<valorConstante>");```, donde *NOMBRECONSTANTE* es el nombre que le atribuiremos a la constante esta es pondrá en mayúsculas para ver a simple vista que es una constante.

```php
<?php
	define("DICEHOLA", "Hola mundo");
	echo DICEHOLA; # Dirá "Hola mundo"
?>
```