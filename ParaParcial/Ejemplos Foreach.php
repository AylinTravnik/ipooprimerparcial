<?php

function iguales($ISBNLibro,$pArreglo){

    foreach ($pArreglo as $key => $subArr)
    {
      if ($subArr->getISBN() ==  $ISBNLibro)
      {
        echo "Este libro ya se encuentra en la colección.";
        exit;
      }
    }
  }

  function librodeEditoriales($arregloAutor, $pEditorial){
    $arregloSalida = $arregloAutor;
    foreach ($arregloSalida as $key => $subArr)
    {
        if ($subArr->getEditorial() !==  $pEditorial)
        {
          unset($arregloSalida[$key]);
        }
    }
    return $arregloSalida;
  }