<?php
/*
CBTIS89
Mildreth Yesenia Alvarado Rosales
Programa que me da una serie de números positivos y negativos y da la suma de ambos
Programación 3°A T.M
*/

$arrayNumeros = array(-5, 12, -8, 9, -2, 16, -14, 3, 21, -19, 30, -22);
$arrayPositivos = array();
$arrayNegativos = array();
$SumaPositivos = 0;
$SumaNegativos = 0;
for ($i = 0; $i < count($arrayNumeros); $i++) {
    $numeros = $arrayNumeros[$i];  
    if ($numeros > 0) {
        $arrayPositivos[] = $numeros; 
        $SumaPositivos = $SumaPositivos + $numeros;
    } elseif ($numeros < 0) {
        $arrayNegativos[] = $numeros;  
        $SumaNegativos = $SumaNegativos + $numeros; 
    }
}
echo "POSITIVOS<br>";
for ($i = 0; $i < count($arrayPositivos); $i++) {
    echo $arrayPositivos[$i] . "<br>";
}
echo "La suma de los positivos es: " . $SumaPositivos;
echo"<br><br>";

echo "NEGATIVOS<br>";
for ($i = 0; $i < count($arrayNegativos); $i++) {
    echo $arrayNegativos[$i] . "<br>"; 
}
echo "La suma de los negativos es: " . $SumaNegativos ;
echo "<br><br>";
?>