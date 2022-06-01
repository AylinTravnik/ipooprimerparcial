<?php 

include 'Empresa.php';
include 'Cliente.php';
include 'Producto.php';
include 'Venta.php';

$objCliente1= new Cliente("Juan", "Perez",false,"DNI", "37482283");
$objCliente2= new Cliente("Roberto,", "Martinez", false, "DNI","33474837");

$cemento= new Producto(11,50000, 2018, "cemento Loma Negra",0.7, true);
$hierro= new Producto (12, 10000, 2019, "hierro del 12", 0.6, true);
$cal= new Producto (13, 10000, 2020, "cal santa Clara", 0.5, false); 

$empresa= new Empresa("Cosmos", "Av. Argentina 123",[$objCliente1,$objCliente2],[$cemento,$hierro,$cal],[] );
$colCodigosProducto=[11,12,13];
$primeraVenta=$empresa->registrarVenta($colCodigosProducto, $objCliente2);
 var_dump($primeraVenta);

//  $colCodigosProducto=[0];
//  $segundaVenta=$empresa->registrarVenta($colCodigosProducto, $objCliente2);
//  var_dump($segundaVenta);


//  $colCodigosProducto=[2];
//  $terceraVenta=$empresa->registrarVenta($colCodigosProducto, $objCliente2);
//  var_dump($segundaVenta);

//  $tipo="DNI";
//  $numDoc= "37482283";
//  $vtasCliente1= retornarVentasXCliente($tipo,$numDoc);
//  var_dump($vtasCliente1);

//  $tipo="DNI";
//  $numDoc= "33474837";
//  $vtasCliente2= retornarVentasXCliente($tipo,$numDoc);
//  var_dump($vtasCliente2);

 

?>