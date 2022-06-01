<?php   
class Empresa{
  
  
    private $identificacion;
    private $nombre;
    private $coleccionViajes= [];
   
    //Clase constructora con valores
    public function __construct($Identificacion, $Nombre, $coleccionViajes){
        $this->identificacion = $Identificacion;
        $this->nombre = $Nombre;
        $this->coleccionViajes = $coleccionViajes;
     
       
    }
    //Get`s de los atributos
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getcoleccionViajes(){
        return $this->coleccionViajes;
    }    
    

    //Set`s de los atributos
    public function setIdentificacion($nuevoIdentificacion){
         $this->identificacion = $nuevoIdentificacion;
    }
    public function setNombre($nuevoNombre){
          $this->nombre = $nuevoNombre;
    } 
    public function setcoleccionViajes($nuevocoleccionViajes){
         $this->coleccionViajes = $nuevocoleccionViajes;
    }   
       

    /*Implementar el método darViajeADestino($elDestino) que recibe por parámetro un destino junto a una
cantidad de asientos y retorna una colección con todos los viajes disponibles a ese destino. */

   public function darViajeADestino($elDestino,$laCantidad){
        $losViajes= $this->getcoleccionViajes();
        $largo= count($losViajes);
        $i= 0;
        $viajesDisponibles= [];
       for ($i = 0; $i < $largo; $i++) {
         $vuelta=$losViajes[$i];
         $destinoSolicitado= $vuelta->getDestino();
         $asientosDisponibles= $vuelta->getCantAsientosDis();
         if ($elDestino==$destinoSolicitado && $laCantidad<=$asientosDisponibles) {
             array_push ($viajesDisponibles, $vuelta);
           
         }
       }
       return $viajesDisponibles;
      
   }

   /*Implementar el método incorporarViaje($objViaje) que recibe como parámetro un viaje, verifica que no
se encuentre registrado ningún otro viaje al mismo destino, en la misma fecha y con el mismo horario de
partida. El método retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso
contrario.*/
public function incorporarViaje($objViaje){
      $esteDestino=$objViaje->getDestino();
      $estaFecha=$objViaje->getFecha();  
      $esteHorario= $objViaje->getHoraPartida();
      $losViajes= $this->getcoleccionViajes();
      $largo= count($losViajes);
      $i= 0;
      $seIncorporo;
      for ($i = 0; $i < $largo; $i++) {
        $vuelta=$losViajes[$i];
        $destinoSolicitado= $vuelta->getDestino();
        $fecha=$vuelta->getFecha();
        $horario= $vuelta->getHoraPartida();

        if ($esteDestino==$destinoSolicitado && $estaFecha==$fecha && $esteHorario==$horario) {
            $seIncorporo = false;
        }
        else {
            $seIncorporo = true; 
            array_push($losViajes, $objViaje);
            $this->setcoleccionViajes($losViajes);
        }
    }  
    return $seIncorporo;
}


/*Implementar el método venderViajeADestino($canAsientos, $destino) método que recibe por parámetro la cantidad de asientos 
y el destino y se registra la asignación del viaje en caso de ser posible. (invocar
al método asignarAsientosDisponibles ). El método retorna la instancia del viaje asignado o null en caso
contrario.*/
public function venderViajeADestino($canAsientos, $fechaViaje, $destino){
        $losViajes= $this->getcoleccionViajes();
        $largo= count($losViajes);
        $i= 0;
        $asigno=false;
        $viajeAsignado=null;
        while (($i <= $largo) && ($asigno=false)) {
         $vuelta=$losViajes[$i];
         $destinoSolicitado= $vuelta->getDestino();
         $fechaSolicitada=$vuelta->getFecha();
           if ($destinoSolicitado==$destino && $fechaSolicitada==$fechaViaje) {
               $hayAsientos= $vuelta->asignarAsientosDisponibles($catAsientos);

               if ($hayAsientos==true){
               $viajeAsignado=$vuelta;
               $asigno=true;
               }   
            $asientosEnViaje=$vuelta->getCantAsientosDisp();
            $nuevaCant=$asientosEnViaje- $canAsientos;
            $vuelta->setCantAsientosDisp($nuevaCant);
           }
        return $viajeAsignado;
    
            # code...
        }
    }


/*Implementar el método montoRecaudado que retorna el monto recaudado por la Empresa.
( tener en cuenta los asientos vendidos y el importe del viaje)*/
public function montoRecaudado(){
    $losViajes= $this->getcoleccionViajes();
    $largo= count($losViajes);
    $i= 0;
    $recaudado;
    for ($i = 0; $i < $largo; $i++) {
       $vuelta=$losViajes[$i];
       $totales= $vuelta->getCantAsientosTot();
       $disponibles=$vuelta->getCantAsientosDis();
       $asientosVendidos= $totales - $disponibles;
       $precio=$vuelta->getImporte();
       $recaudacionViaje= $asientosVendidos*$precio;
       $recaudado= $recaudado + $recaudacionViaje;
    }   
    return $recaudado;



    
}





    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Identificacion: ".$this->getIdentificacion().", Nombre: ".$this->getNombre().", 
       coleccionViajes: ".$this->getcoleccionViajes();
   }
}
