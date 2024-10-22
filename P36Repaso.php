<?php
/* CBTIS 89
P36Repaso.php
Programa para gestionar la información de un cliente y realizar cálculos relacionados con una compra, 
guarda datos personales, los precios de los 3 artículos y realiza descuentos, así como cuántas monedas y billetes recibió de esa venta.
Midreth Yesenia Alvarado Rosales
3°A Programación Matutino */

// Datos personales
echo "Datos personales: ";
echo "<br>";
$nombre = "Allison";
$apellido1 = "Gurrola";
$apellido2 = "Gume";
echo "El nombre del cliente es: " . $nombre . " " . $apellido1 . " " . $apellido2;
echo "<br>";
$edad = 18;
echo "Tiene: " . $edad . " Años";
echo "<br>";
if ($edad >= 18) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}
echo "<br>","<br>";

echo "La venta de los 3 artículos:";
echo "<br>";

// Artículos y descuentos
$articulo1 = 2000; 
$articulo2 = 300; 
$articulo3 = 500; 
$sumaprecios = $articulo1 + $articulo2 + $articulo3;

if ($sumaprecios < 1000) {
    $descuento = 0.07; // 7% de descuento
} else {
    $descuento = 0.05; // 5% de descuento
}

$montodescuento = $sumaprecios * $descuento;
$totalapagar = $sumaprecios - $montodescuento;
echo "Suma de los precios de los artículos: $" . $sumaprecios;
echo "<br>";
echo "Monto del descuento: $" . $montodescuento;
echo "<br>"; 
echo "Total a pagar después del descuento: $" . $totalapagar;
echo "<br>","<br>";

echo "Los que realizaron la venta: ";
echo "<br>";
$array = array("Maria Sanchez", "Luis Antonio", "Carlos Hernandez");

// Se obtiene el número de elementos
$longitud = count($array);

// Recorre todos los elementos
for ($i = 0; $i < $longitud; $i++) {
    echo $array[$i];
   echo "<br>";
}
echo "<br>","<br>";
echo "Cuántos billetes y monedas recibió de esa venta: ";
echo "<br>";

// Cálculo de billetes y monedas
$Cheque = $totalapagar; // Utilizamos el total a pagar como monto del cheque
$B1000 = floor($Cheque / 1000);
$Cheque %= 1000;
$B500 = floor($Cheque / 500);
$Cheque %= 500;
$B200 = floor($Cheque / 200);
$Cheque %= 200;
$B100 = floor($Cheque / 100);
$Cheque %= 100;
$B50 = floor($Cheque / 50);
$Cheque %= 50;
$B20 = floor($Cheque / 20);
$Cheque %= 20;
$M10 = floor($Cheque / 10);
$Cheque %= 10;
$M5 = floor($Cheque / 5);
$Cheque %= 5;
$M2 = floor($Cheque / 2);
$Cheque %= 2;
$M1 = floor($Cheque / 1);
$Cheque %= 1;

echo "La cantidad del cheque es: " . $totalapagar;
echo "<br>";
echo "La cantidad de billetes de 1000 es: " . $B1000;
echo "<br>";
echo "La cantidad de billetes de 500 es: " . $B500;
echo "<br>";
echo "La cantidad de billetes de 200 es: " . $B200;
echo "<br>";
echo "La cantidad de billetes de 100 es: " . $B100;
echo "<br>";
echo "La cantidad de billetes de 50 es: " . $B50;
echo "<br>";
echo "La cantidad de billetes de 20 es: " . $B20;
echo "<br>";
echo "La cantidad de monedas de 10 es: " . $M10;
echo "<br>";
echo "La cantidad de monedas de 5 es: " . $M5;
echo "<br>";
echo "La cantidad de monedas de 2 es: " . $M2;
echo "<br>";
echo "La cantidad de monedas de 1 es: " . $M1;
echo "<br>";
?>
