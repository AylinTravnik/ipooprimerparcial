<?php

//REEMPLAZADOR//
// Copiar el código entero de base.php a salida.php.
// Luego, copiar y pegar la línea 14 la cantidad de veces necesaria.
// En la línea 14, cambiamos la palabra private por la palabra asado.
// En cada copia de esta línea, cambiar la palabra que busco reemplazar con su reemplazo.
// Guardar, y ejecutar.

$archivoEntrada = './BaseParcial.php';
$archivoSalida = './Terminal.php';

$contenido = file_get_contents($archivoEntrada);
$contenido = str_replace("EjemploClase", "Termina", $contenido);//entre "  " poner el nombre de la clase
$contenido = str_replace("arandano", "denominacion", $contenido);//entre "  " poner el atributo 1
$contenido = str_replace("Arandano", "Denominacion", $contenido);//entre "  " poner el atributo 1 con Mayuscula
$contenido = str_replace("banana", "direccion", $contenido);//entre "  " poner el atributo 2
$contenido = str_replace("Banana", "direccion", $contenido);//entre "  " poner el atributo 2 con Mayuscula
$contenido = str_replace("coco", "coleccionEmpresas", $contenido);//entre "  " poner el atributo 3
$contenido = str_replace("Coco", "coleccionEmpresas", $contenido);//entre "  " poner el atributo 3 con Mayuscula


file_put_contents($archivoSalida, $contenido);

?>