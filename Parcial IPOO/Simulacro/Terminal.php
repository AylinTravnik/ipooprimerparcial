<?php   
class TerminaL{
  
  
    private $denominacion;
    private $direccion;
    private $coleccionEmpresas= [];
  

    //Clase constructora con valores
    public function __construct($Denominacion, $direccion, $coleccionEmpresas,){
        $this->denominacion = $Denominacion;
        $this->direccion = $direccion;
        $this->coleccionEmpresas = $coleccionEmpresas;
       
       
    }
    //Get`s de los atributos
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function getcoleccionEmpresas(){
        return $this->coleccionEmpresas;
    }    
   

    //Set`s de los atributos
    public function setDenominacion($nuevoDenominacion){
         $this->denominacion = $nuevoDenominacion;
    }
    public function setdireccion($nuevodireccion){
          $this->direccion = $nuevodireccion;
    } 
    public function setcoleccionEmpresas($nuevocoleccionEmpresas){
         $this->coleccionEmpresas = $nuevocoleccionEmpresas;
    }   
    

    /*Implementar el método ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) que recibe por
parámetro la cantidad de asientos que se requieren, una fecha, un destino y la empresa con la que se
desea viajar. Automáticamente se registra la venta del viaje. (Para la implementación de este método
debe utilizarse uno de los métodos implementados en la clase Viaje).*/
    public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) {
        
        $lasEmpresas= $this->getcoleccionEmpresas();
        $largo= count($lasEmpresas);
        $i= 0;
        $encontro=false;
        while (($i <= $largo) && ($encontro=false)) {
         $vuelta=$lasEmpresas[$i];
         $nombreEmpresa=$vuelta->getNombre();
         if($nombreEmpresa==$empresa){

         $venta= $vuelta->venderViajeADestino($canAsientos, $fecha, $destino);

        }
    }
    }

    /*Implementar el método empresaMayorRecaudacion retorna un objeto de la clase empresa que se corresponde con la de mayor recaudación.*/

    public function empresaMayorRecaudacion(){
        $lasEmpresas= $this->getcoleccionEmpresas();
        $largo= count($lasEmpresas);
        $i= 0;
        $montoEmpresa;
        $mayorRecaudacion;
        $esLaEmpresa;
        $cualEs;
         for ($i = 0; $i < $largo; $i++) {
           $vuelta=$lasEmpresas[$i];
           $montoEmpresa=$vuelta->montoRecaudado();
           if ($montoEmpresa>$mayorRecaudacion){
               $mayorRecaudacion= $montoEmpresa;
               $cualEs = $vuelta;
             


           }
          }
          return $cualEs;
}

   /*Implementar el método responsableViaje($numeroViaje) que recibe por parámetro un numero de viaje
y retorna al responsable del viaje.*/
 public function responsableViaje($numeroViaje){
    $lasEmpresas= $this->getcoleccionEmpresas();
    $largo= count($lasEmpresas);
    $i= 0;
    $responsable;
     for ($i = 0; $i < $largo; $i++) {
       $vuelta=$lasEmpresas[$i];
       $losViajes=$vuelta->getcoleccionViajes();
       $largoViajes= count($losViajes);
       $j=0;
       $es=true;
       while (($i <= $largoViajes) && ($es=true)) {
           $vueltaViaje=$losViajes[$i];
           $numero=$vueltaViaje->getNumero();
           if($numeroViaje==$numero){
             $responsable=$vueltaViaje->getEsResponsable();
             $es=true;
             }
         }
    }      
    return $responsable;


    
 }


    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Denominacion: ".$this->getDenominacion().", direccion: ".$this->getdireccion().", 
       coleccionEmpresas: ".$this->getcoleccionEmpresas();
   }
}
