<?php
/*CBTIS 89
P28Array7.php
Progrma que genera un arreglo que contiene los números del 1 al 100. Luego, 
utiliza un bucle foreach para imprimir los números pares del arreglo. También se pretende 
calcular y mostrar la suma de los números pares e impares, aunque esto no está implementado 
correctamente en el código actual.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
$numeros = array();
$np = 0; // Suma de números pares
$ni = 0; // Suma de números impares

for ($i = 1; $i <= 100; $i++) { 
    $numeros[] = $i;
}

foreach ($numeros as $valor) {
    if ($valor % 2 == 0) {
        echo $valor . " ";
        $np += $valor; // Acumula la suma de números pares
    } else {
        $ni += $valor; // Acumula la suma de números impares
    }
}

echo "<br>La suma de los números PARES es: " . $np . "<br>";
echo "La suma de los números IMPARES es: " . $ni . "<br>";
?>