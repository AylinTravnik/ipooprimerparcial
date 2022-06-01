<?php   
class ViajeAereo extends Viaje {

    private $numeroVuelo;
    private $catAsiento;
    private $nombreAerolinea;
    private $cantEscalas;
    
public function __construct($codigo, $desti, $capacidad,$colPasajeros,$esResponsable,$esImporte, $esTramos, $nuevoNumeroVuelo,$esCatAsiento,$esNombreAerolinea,$esCantEscalas)
{
    parent:: __construct($codigo, $desti, $capacidad,$colPasajeros,$esResponsable,$esImporte, $esTramos);
    $this->numeroVuelo = $nuevoNumeroVuelo;
    $this->catAsiento = $esCatAsiento;
    $this->nombreAerolinea = $esNombreAerolinea;
    $this->cantEscalas = $esCantEscalas;
} 
public function getNumeroVuelo(){
    return $this->numeroVuelo;
}
public function getCatAsiento(){
    return $this->catAsiento;
}
public function getNombreAerolinea(){
    return $this->nombreAerolinea;
}
public function getCantEscalas(){
    return $this->cantEscalas;
}

//sets de los atributos
public function setNumeroVuelo($nuevoNumeroVuelo){
    $this->numeroVuelo = $nuevoNumeroVuelo;
}
public function setCatAsiento($nuevaCatAsiento){
    $this->catAsiento = $nuevaCatAsiento;
}
public function setNombreAerolinea($nuevoNombreAerolinea){
    $this->nombreAerolinea = $nuevoNombreAerolinea;
}
public function setCantEscalas($nuevaCantEscalas){
    $this->cantEscalas = $nuevaCantEscalas;
}


public function  venderPasaje($pasajero){
    $hayLugar= parent::hayPasajeDisponible();
    $importePasaje;

    if ($hayLugar ==false) {
    
    $importePasaje= null;
}
    else    {
     $nuevoPasajero=parent:: agregarPasajeroAcoleccion($pasajero);
     if ($nuevoPasajero == true){
         $cantPasajeros= parent:: getCantPasajeros(); 
         $nuevaCantidad= $cantPasajeros +1;
         parent:: setCantPasajeros($nuevaCantidad);
         $valorOriginal=parent:: getImporte();
        if ($this->getCatAsiento() =="Primera Clase" && $this->getCantEscalas() == 0){
        $importePasaje = $valorOriginal * (40/100);
         }
        elseif($this->getCatAsiento() =="”Primera Clase" && $this->getCantEscalas() <0){
        $importePasaje = $valorOriginal*(60/100);
        }
        else{
          $importePasaje = parent::getImporte();
        }
        if (parent:: getTramo() == "ida y vuelta"){
        $importePasaje = $importePasaje*2;
        }
     }
    }
    return $importePasaje;
}
   
 
    





    public function __toString() {
    $cadena= parent:: __toString();
    $cadena.= " El Numero de vuelo es: ".$this->getNumeroVuelo()." La Categoria de Asiento es: ".$this->getCatAsiento().
    " El Nombre de la aerolinea es: ".$this->getNombreAerolinea(). " La Cantidad de Escalas es: ".$this->getCantEscalas();
    return $cadena;
}





    }