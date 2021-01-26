<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $indexado = array("Jose", "María", "Alejandro", "Kevin");
            $asociativo = array("Jose" => "Ramírez", "María" => "Campos", "Alejandro" => "Becerra", "Kevin" => "Gabarri");
            $multidimensional = array( 
                "nome" => array("Juan", "Tania", "Carlos", "Fernando"),
                "apelido" => array("Pérez", "Pena", "Otero", "Caballero")
            );
            
            echo "El string del la segunda posición del array indexado es: " . $indexado[1] . "<br/>";
            echo "El apellido de Alejandro en el array asociativo es: " . $asociativo['Alejandro'] . "<br/>";
            echo "El nombre y apellido de la segunda posición del array multidimensional son: " . $multidimensional['nome'][1] . " " . $multidimensional['apelido'][1] . "<br/>";
            
            echo "La logintud del primer array es: " . count($indexado) . "<br/>";
            echo "La logintud del segundo array es: " . count($asociativo) . "<br/>";
            echo "La logintud del tercer array es: " . count($multidimensional) . "<br/>";
            echo "La longitud del primer array del multidimensional es: " . count($multidimensional["nome"]) . "<br/>";
			echo "<br/>";
			
			$indexado[] =  "Paco";
			echo $indexado[4];
        ?>
    </body>
</html>
