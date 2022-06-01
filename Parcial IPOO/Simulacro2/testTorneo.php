<?php   {
include "Torneo.php";
include "Partido.php";
include "Categoria.php";
include "Equipo.php";
include "PartidoFutbol.php";
include "PartidoBasquet.php";



$cat1= new Categoria("Juveniles", "aaaaaaa");
$cat2= new Categoria("Menores", "bbbbbbbb");
$cat3= new Categoria("Adultos", "cccccccc"); 

$objE1= New Equipo("Los Zorzales", "Juan Perez", 11, $cat3); 
$objE2= New Equipo("Los Ponies", "Julian Martines", 11, $cat3); 
$objE3= New Equipo("Los Dinosaurios", "Amiro Rozas", 11, $cat3); 
$objE4= New Equipo("Los Murcielagos", "Leopoldo Peres", 11, $cat3); 
$objE5= New Equipo("Los Elefantes", "Titan Camon", 11, $cat3); 
$objE6= New Equipo("Los Gatos", "Marcos Paz", 11, $cat3); 
$objE7= New Equipo("Los Galgos", "Lucas Sole", 11, $cat3); 
$objE8= New Equipo("Los Caballos", "Juan Railes", 11, $cat3); 
$objE9= New Equipo("Los Gallos", "Jorge Dias", 11, $cat3); 
$objE10= New Equipo("Los Toros", "Mariano Cruz", 11, $cat3); 
$objE11= New Equipo("Los Sapos", "Tete Perez", 11, $cat3); 
$objE12= New Equipo("Las Cabras", "Claudio Martin", 11, $cat3); 

$objPart1 = new PartidoBasquet($objE7 ,$objE8,'2020-10-10',80,120,75);
$objPart2 = new PartidoBasquet($objE9 ,$objE10,'2020-10-25',81,110,70);
$objPart3 = new PartidoBasquet($objE11 ,$objE12,'2020-11-25',115,85,110);
$objPart4 = new PartidoFutbol($objE1 ,$objE2,'2020-10-25',3,2);
$objPart5 = new PartidoFutbol($objE3 ,$objE4,'2020-11-13',0,1);
$objPart6 = new PartidoFutbol($objE5 ,$objE6,'2020-11-30',2,3);

$nuevoTorneo= new Torneo (10000,[$objPart4,$objPart5, $objPart6], [$objPart1,$objPart2,$objPart3]);


/*Invocar al método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo) donde OBJEquipo1 y
OBJEquipo2 son objE7 y objE11 respectivamente. La fecha es 10-11-20 y el tipo de partido es
basquetbol. Visualice el resultado.*/

$agregarPartido= $nuevoTorneo->ingresarPartido($objE7, $objE11, '2020-11-10', "BasketBall"); 
//echo $agregarPartido; 


// $ganadores= $nuevoTorneo->darGanadores("Basket"); 
// var_dump($ganadores);
// $ganadores= $nuevoTorneo->darGanadores("Futbol"); 
// var_dump($ganadores);

$losPremios1= $nuevoTorneo->calcularPremioPartido($objPart1); 
var_dump($losPremios1); 







}