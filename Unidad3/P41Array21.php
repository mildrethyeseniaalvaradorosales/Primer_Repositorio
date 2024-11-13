<?php
/* CBTIS 89
   P41Array21.php
   Programa que almacena en un arreglo llamado $compras el valor de 6 compras, posteriormente en otros arreglos se debe posteriormente en otros arreglos se debe almacenar información de acuerdo a las siguientes condiciones:
   El contenido del arreglo $descuentos se llenara de la siguiente manera:
   Compra menor 300 = 0
   Compra mayor 300 y menor o igual 1000 = 10%
   Compra mayor 1000 y menor o igual 2500 = 15%
   Compra mayor 2500 y menor o igual 5000 = 20%
   Compra mayor 5000 = 25%
   Mildreth Yesenia Alvarado Rosales
   3ªA Programaciòn Matutino
*/
   $Compras=array(800,2700,1900,150,7600,1000);
$Descuentos=array();
$Total=array();
$Porcentaje=array();

foreach ($Compras as $Compra) {

if ($Compra<300){
   $PorcentajeDescuento=0;
}
elseif ($Compra>=300 && $Compra<=1000) {
   $PorcentajeDescuento=10;
}
elseif ($Compra>=1000 && $Compra<=2500){
   $PorcentajeDescuento=15;
}
elseif ($Compra>=2500 && $Compra<=5000){
   $PorcentajeDescuento=20;
}
elseif ($Compra>=5000){
   $PorcentajeDescuento=25;
}

$MontoDescuento=($Compra*$PorcentajeDescuento/100);

$Descuentos[]=$MontoDescuento;
$Total[]=$Compra-$MontoDescuento;
$Porcentaje[]=$PorcentajeDescuento;
}

echo "Compras " . "&nbsp " . "Descuentos " . "Total " . "Porcentaje" . "<br>";
for ($j=0; $j<count($Compras); $j++){ 
   echo "".$Compras[$j]." ...... ". $Descuentos[$j]." ...... ". $Total[$j]."...... ". $Porcentaje[$j]."%"."<br>";
}
?>