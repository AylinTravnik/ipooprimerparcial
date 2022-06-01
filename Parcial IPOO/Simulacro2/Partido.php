<?php   
class Partido{
  
  
    private $idPartido; //hayQue modificar
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;
    private $equipo1;
    private $equipo2;
 
   

    //Clase constructora con valores
    public function __construct( $esEquipo1, $esEquipo2, $esFecha,$esGoles1,$esGoles2 ){
        $this->idPartido = 0;
        $this->fecha = $esFecha;
        $this->cantGolesE1 =$esGoles1; //igualar a 0
        $this->cantGolesE2 = $esGoles2;
        $this->equipo1 = $esEquipo1;
        $this->equipo2 = $esEquipo2;
      
       
       
    }
    //Get`s de los atributos
    public function getIDPartido(){
        return $this->idPartido;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getGoles1(){
        return $this->cantGolesE1;
    }    
    public function getGoles2(){
        return $this->cantGolesE2;
    }  
    public function getEquipo1(){
        return $this->equipo1;
    }    
    public function getEquipo2(){
        return $this->equipo2;
    }  
 
 

    //Set`s de los atributos
    public function setIDPartido($nuevoIDPartido){
         $this->idPartido = $nuevoIDPartido;
    }
    public function setFecha($NuevaFecha){
          $this->fecha = $NuevaFecha;
    } 
    public function setGoles1($nuevosGoles1){
         $this->cantGolesE1 = $nuevosGoles1;
    }   
    public function setGoles2($nuevosGoles2){
        $this->cantGolesE2 = $nuevosGoles2;
   } 
   public function setEquipo1($nuevoEquipo1){
    $this->equipo11 = $nuevoEquipo1;
}   
public function setEquipo2($nuevoEquipo2){
   $this->equipo2 = $nuevoEquipo2;
} 
// //En cada partido se calcula un coeficiente base que es de 0,5 que es aplicado a la cantidad de goles y a la
// cantidad de jugadores de cada equipo. Es decir:
// coef = 0,5 * cantG * cantJ donde cantG: es la cantidad de goles; cantJ: es la cantidad de jugadores.
public function coeficientePartido(){
    $coef= 0;
    $cantG1= $this->getGoles1();
    $equipo1= $this->getEquipo1();
    $cantJugadores1= $equipo1->getCantJugadores(); 
    $cantG2= $this->getGoles2();
    $equipo2= $this->getEquipo2();
    $cantJugadores2= $equipo2->getCantJugadores(); 
    $golesTotales= $cantG1 +$cantG2;
    $jugadoresTotales= $cantJugadores1 + $cantJugadores2;

    $coef= 0.5* $golesTotales* $jugadoresTotales;
    return $coef;



}


  
    //Funcion to string de la clase
   public function __toString()
   {
       return " \n IDPartido: ".$this->getIDPartido().", Fecha: ".$this->getFecha().", 
       Goles1: ".$this->getGoles1()."Goles2: ".$this->getGoles2()."Equipo 1: ".$this->getEquipo1()."Equipo 2: ".$this->getEquipo2();
   }
}
