<?php
/* 
CBTIS89
Mildreth Yesenia Alvarado Rosales
P38Array18.php
3°A Programación T.M
Programa que almacena datos en un arreglo multidimensional y posteriormente los imprime en diferentes posiciones.
*/
$datos = array( array(10, 20, 30),array(40, 50, 60),array(70, 80, 90)
);
echo "NORMAL";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "FILAS A COLUMNAS";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$j][$i] . " ";
    }
    echo "<br>";
}
echo "COLUMNAS INVERSAS";
echo "<br>";
for ($i = 0; $i < 3; $i++) { 
    for ($j = 2; $j >= 0; $j--) {  
        echo $datos[$j][$i] . " ";  
    }
    echo "<br>";
}
echo "FILAS INVERSAS";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";  
    }
    echo "<br>";
}
echo "ESPEJO INVERSO";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 2; $j >= 0; $j--) {  
        echo $datos[$i][$j] . " ";  
    }
    echo "<br>";
}
?>

