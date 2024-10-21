<?php
/*CBTIS 89
P29Array10.php
Programa que utiliza un bucle foreach para recorrer el arreglo y verifica si el nombre buscado 
existe. Si se encuentra el nombre, imprime un mensaje indicando que el nombre está presente 
en el arreglo.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
$nombres = array("Ana", "leo", "Carlos", "Yesenia", "Sofia", "Samuel", "Mia", "Jose");
$nombre = "Samuel"; 
foreach ($nombres as $nom) {
    if ($nom === $nombre) {
        echo "Este nombre está en el Array.";
    }
}
?>