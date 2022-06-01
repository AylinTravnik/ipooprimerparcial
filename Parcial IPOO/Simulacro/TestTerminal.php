<?php 

include "Empresa.php";
include "Responsable.php";
include "Terminal.php";
include "viaje.php";

$responsable1=new Responsable("juan","peres", "334556655","Pampa 123", "juan@gmail","154234432" );
$responsable2=new Responsable("Pedro","peres", "334222222","Pampa 0000", "Pedro@gmail","154000000" );
$responsable3=new Responsable("Lucas","pato", "3341111111","Peru 0000", "Lucas@gmail","15411111" );
$viaje1=new Viaje("EEUU", "14:00", "19:00", 23,5000, "3/04", 100, 50,$responsable1);
$viaje2=new Viaje("China","16:00","10:00",16753,15000,"26/5",70,23,$responsable1);
$viaje3 = new Viaje(" Chile","18:00","22:00",342,8000,"13/5/",75,34,$responsable2);
$viaje4 = new Viaje("Austria","13:00","24:00",45,35000,"13/6",89,11,$responsable3);
//var_dump($viaje1);

//Se crea una colección con un mínimo de 2 empresas, ejemplo Seabourn Cruise Line, Princess Cruises//
$empresa1=new Empresa("ID333", "Seabourn Cruise Line", [$viaje1,$viaje2]);
$empresa2=new Empresa("ID111", "Princess Cruises", [$viaje3,$viaje4]);

$terminal = new Terminal("Chileeo","HuaHum123",[$empresa1,$empresa2]);

//$terminal->ventaAutomatica(3,"3/04","EEUU","Seabourn Cruise Line");

//$terminal->empresaMayorRecaudacion();

$terminal->responsableViaje(23);












?>