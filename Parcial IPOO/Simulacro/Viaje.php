<?php   
class Viaje{
  
  
    private $destino;
    private $horaPartida;
    private $horaLlegada;
    private $numero;
    private $importe;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;
    private $esResponsable;

    //Clase constructora con valores
    public function __construct($Destino, $HoraPartida, $HoraLlegada, $Numero,$Importe,
     $Fecha, $cantAsientosTotales, $CantAsientosDisponibles,$EsResponsable ){
        $this->destino = $Destino;
        $this->horaPartida = $HoraPartida;
        $this->horaLlegada = $HoraLlegada;
        $this->numero = $Numero;
        $this->importe = $Importe;
        $this->fecha = $Fecha;
        $this->cantAsientosTotales = $cantAsientosTotales;
        $this->cantAsientosDisponibles = $CantAsientosDisponibles;
        $this->esResponsable= $EsResponsable;
       
    }
    //Get`s de los atributos
    public function getDestino(){
        return $this->destino;
    }
    public function getHoraPartida(){
        return $this->horaPartida;
    }
    public function getHoraLlegada(){
        return $this->horaLlegada;
    }    
    public function getNumero(){
        return $this->numero;
    }  
    public function getImporte(){
        return $this->importe;
    }  
    public function getFecha(){
        return $this->fecha;
    }  
    public function getCantAsientosTot(){
        return $this->cantAsientosTotales;
    } 
    public function getCantAsientosDis(){
        return $this->cantAsientosDisponibles;
    } 
    public function getEsResponsable(){
        return $this->esResponsable;
    }

    //Set`s de los atributos
    public function setDestino($nuevoDestino){
         $this->destino = $nuevoDestino;
    }
    public function setHoraPArtida($nuevoHoraPArtida){
          $this->horaPartida = $nuevoHoraPArtida;
    } 
    public function setHoraLlegada($nuevoHoraLlegada){
         $this->horaLlegada = $nuevoHoraLlegada;
    }   
    public function setNumero($nuevoNumero){
        $this->numero = $nuevoNumero;
   } 
    public function setImporte($nuevoImporte){
        $this->importe = $nuevoImporte;
    } 
    public function setFecha($nuevoFecha){
        $this->fecha = $nuevoFecha;
    } 
    public function setCantAsientosTot($nuevoCantAsientos){
        $this-$cantAsientosTotales = $nuevoCantAsientos;
    } 
    public function setCantAsientosDis($nuevoCantAsientos){
        $this-$cantAsientosDisponibles = $nuevoCantAsientos;
    } 
    public function setEsResponsable($nuevoEsResponsable){
        $this->esResponsable = $nuevoEsResponsable;
    }


    /*Implementar el método asignarAsientosDisponibles($catAsientos) que recibe por parámetros la 
    cantidad de asientos que desean asignarse. El método retorna verdadero en caso que la asignación pueda
concretarse y falso en caso contrario.*/

    public function asignarAsientosDisponibles($catAsientos){
        $disponibles= $this->getCantAsientosDis();
        $esPosible=false;
       if ($catAsientos <= $disponibles) {
           $esPosible= true;
       }
       return $esPosible;

    }

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Destino: ".$this->getDestino().", HoraPartida: ".$this->getHoraPArtida().", 
       HoraLlegada: ".$this->getHoraLlegada()."Numero: ".$this->getNumero().", Importe: ".$this->getImporte().", 
       Fecha: ".$this->getFecha().", CantAsientosTotales: ".$this->getCantAsientosTot().", CantAsientosDisponibles: ".$this->getCantAsientosDisp()."EsResponsable\n".$this->esResponsable();
   }
}
