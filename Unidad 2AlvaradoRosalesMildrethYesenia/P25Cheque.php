<?php
/* CBTIS 89
P25Cheque.php
Programa que calcula la cantidad de billetes y monedas de diferentes denominaciones
que componen una cantidad total, en este caso, un cheque de 5793. Utiliza la función 
floor() para determinar cuántos billetes y monedas de cada valor son necesarios para 
saldar la cantidad indicada. Luego, imprime la cantidad de cada billete y moneda en un 
formato legible.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino */

$Cheque = 5793; 
$B1000 = $B500 = $B200 = $B100 = $B50 = $B20 = $M10 = $M5 = $M2 = $M1 = 0;
$B1000 = floor($Cheque / 1000);
$Cheque%=1000;
$B500=floor($Cheque / 500);
$Cheque%=500;
$B200=floor($Cheque / 200);
$Cheque%=200;
$B100=floor($Cheque / 100);
$Cheque %= 100;
$B50=floor($Cheque / 50);
$Cheque %= 50;
$B20=floor($Cheque / 20);
$Cheque %= 20;
$M10=floor($Cheque / 10);
$Cheque%=10;
$M5=floor($Cheque / 5);
$Cheque%= 5;
$M2=floor($Cheque / 2);
$Cheque%=2;
$M1=floor($Cheque / 1);
$Cheque%=1;
echo "La cantidad del cheque es: ". $Cheque;
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
