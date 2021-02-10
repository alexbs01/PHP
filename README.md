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

### Arrays
Son variables que permiten alamacenar más de un valor al mismo tiempo, se declaran como ```$nombreVariable = array();```. Existen tres tipos de arrays, indexados, asociativos y multidimensionales.  
Los **indexados** son aquellos que se almacenan con un número que funciona como índice.  

```php
<?php
$coches = array("Citroen", "BMW", "Ferrari");
echo "Tengo un triste " . $coches[0] . " Saxo de tres puertas, y me gustaría tener un " . $coches[2];
?>
```
 
Los arrays **asociativos** relacionan el índice con el valor, donde el índice no es un valor númerico como en el anterior caso.  
```php
<?php
$edad = array("Alex" => "19", "Jose" => "31", "Juan" => "13");
echo "El usuario Alex tiene actualmente " . $edad["Alex"];
?>
```


Un array **multidimensional** es un array que contiene arrays en su interior, ya sean indexados o asociativos.  
```php
<?php

// Array con dos dimensiones:
$familias = array(	
		"Vázquez"=>array("Carmen","Pilar","Juan"),
  		"García"=>array("Manuel"),
  		"López"=>array ("Nuria", "Patricia", "Alberto")
  	    ); 

echo "Es " . $familias['Vázquez'][2] . " parte de la familia Vázquez?";

// Resultado: Es Juan parte da familia Vázquez?

?>

```

Existe la función **count()**, que sirve para contar los elementos de un array, en los arrays multidimensionales se puede especificar en que array de los interiores queremos contar los elementos.  


### Condicionales
Los condicionales son para ejecutar ciertas partes del código si se cumple cierta condición. La sintaxis un condicional es ```if(condicion) {código}```, pero también se pueden anidar varios condicionales en la misma estructura.  
```php
<?php

$x = 10;

if($x < 9) {
	echo "El número que pusiste es menor a 9";
} else if($x == 9) {
	echo "El número es identico a 9";
} else {
	echo "El número que pusiste es superior a 9";
}

// El resultado será el último echo
?>
```

Los **switch** son sentencias en las que se pueden uno o varios bloques, donde más que un rango de condiciones como en el ejemplo de los *if* son condiciones más específicas.  

```php
<?php
$x = 3;

switch($x) {
	case 1:
		echo "Usted pulsó el numero uno";
	break;
	case 2:
		echo "Usted pulsó el número dos y entonces se acabará el programa";
	exit(); // Si $x vale 2 se terminará el programa en este paso
	case 3:
		echo "Usted pulsó el número tres";
	break;
	default:
		echo "No pulso una tecla válida";
	break;
}
?>
```

### Bucles
Los bucles son estructuras repetitivas que ejecutan ciertas partes del código un número determinado de veces, existen cuatro tipos de bucles **while**, **do-while**, **for** y **foreach**.  

