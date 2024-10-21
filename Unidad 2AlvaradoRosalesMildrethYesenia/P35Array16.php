<?php
/*CBTIS 89
P35Array16.php
Realiza operaciones aritméticas básicas (suma, resta, multiplicación y división)
entre dos arreglos numéricos predefinidos. Cada operación se ejecuta elemento a elemento, y
los resultados se almacenan en arreglos separadoS,también imprime los resultados
de cada operación.
Midreth Yesenia Alvarado Rosales
3°A Programación Matutino*/

$array1 = array(10, 20, 20, 40, 50);
$array2 = array(3, 7, 6, 15, 18);
$arraysuma = array();
$arrayresta = array();
$arraymultiplicacion = array();
$arraydivision = array();

$longitud = count($array1); 
for ($i = 0; $i < $longitud; $i++) {
    $arraysuma[$i] = $array1[$i] + $array2[$i];
    $arrayresta[$i] = $array1[$i] - $array2[$i];
    $arraymultiplicacion[$i] = $array1[$i] * $array2[$i];
    $arraydivision[$i] =$array1[$i] / $array2[$i];
}

echo "Suma entre arreglos <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $array1[$i] . " + " . $array2[$i] . " = " . $arraysuma[$i];
    echo "<br>";
}

echo "Resta entre arreglos <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $array1[$i] . " - " . $array2[$i] . " = " . $arrayresta[$i];
    echo "<br>";
}

echo "Multiplicación entre arreglos <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $array1[$i] . " x " . $array2[$i] . " = " . $arraymultiplicacion[$i];
    echo "<br>";
}

echo "División entre arreglos <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $array1[$i] . " / " . $array2[$i] . " = " . $arraydivision[$i];
    echo "<br>";
}
?>

