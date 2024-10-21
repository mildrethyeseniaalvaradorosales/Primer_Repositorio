<?php
/*CBTIS 89
P26Array7.php
Progrma quedefine un arreglo bidimensional que almacena números. Utiliza dos 
bucles foreach anidados para recorrer cada elemento del arreglo y los imprime en la 
pantalla. Cada fila del arreglo se imprime en una nueva línea.

Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>