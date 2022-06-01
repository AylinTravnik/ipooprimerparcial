<?php 
include "Persona.php";
include "Inmueble.php";
include "Edificio.php";

$responsable= new Persona ("DNI", 27432561,"Carlos","Martinez",154321233);

$inquilino1=new Persona ("DNI", 12333456, "Pepe","Suarez",4456722);
$inquilino2=new Persona ("DNI", 12333422, "Pedro","Suarez",446678);
$inmueble1= new Inmueble (11, 1, "local comercial", $inquilino1,50000);
$inmueble2= new Inmueble (12, 1, "local comercial", null,50000);
$inmueble3= new Inmueble (13, 2, "departamento", $inquilino2,35000);
$inmueble4= new Inmueble (14, 2, "departamento", null,35000);
$inmueble5= new Inmueble (15, 3, "departamento", null,35000);

// punto 1 y 3
$edificio= new Edificio ("Juab B. Justo 3456", $responsable, [$inmueble1, $inmueble2, $inmueble3, $inmueble4, $inmueble5] );


//punto 4
$disponibles= $edificio->darInmueblesDisponiblesParaAlquiler("local comercial",4000);
var_dump($disponibles);



$nuevaPersona= new Persona  ("DNI", 28765436, "Mariela","Suarez",25543562); 

//punto 5
$consulta= $edificio->registrarAlquilerInmueble($inmueble5, $nuevaPersona);
$mensaje= consu($consulta);
//var_dump($edificio->getInmueble());

//punto 6
$consulta= $edificio->registrarAlquilerInmueble($inmueble4, $nuevaPersona);
$mensaje= consu($consulta);
//var_dump($edificio->getInmueble());


//punto 7 
$costo= $edificio->calcularCostoEdificio();
echo $costo;

//punto 8;
echo $edificio; 

function consu($elcoso){

   if ($elcoso){
    echo "El registro fue Exitoso \n";
   }
   else {
    echo "Es imposible Alquilar Este Inmueble \n";
    }
}









