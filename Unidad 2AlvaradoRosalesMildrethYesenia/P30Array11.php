<?php
/*CBTIS 89
P31Array12.php
Programa que maneja un arreglo indexado que contiene una mezcla de números e 
strings representando mascotas. Utiliza un bucle foreach para imprimir cada elemento del 
arreglo. Luego, se agregan más elementos al arreglo utilizando la función array_push() 
y se imprime nuevamente el contenido del arreglo actualizado.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>
