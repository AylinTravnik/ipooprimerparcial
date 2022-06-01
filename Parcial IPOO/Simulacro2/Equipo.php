<?php   
class Equipo{
  
  
    private $nombre;
    private $nombreCapitan;
    private $cantJugadores;
    private $catgoria;
  
   

    //Clase constructora con valores
    public function __construct($Nombre, $esNombreCapitan, $esCantJugadores, $esCategoria){
        $this->nombre = $Nombre;
        $this->nombreCapitan = $esNombreCapitan;
        $this->cantJugadores = $esCantJugadores;
        $this->categoria= $esCategoria;
  
       
    }
    //Get`s de los atributos
    public function getNombre(){
        return $this->nombre;
    }
    public function getNombreCapitan(){
        return $this->nombreCapitan;
    }
    public function getCantJugadores(){
        return $this->cantJugadores;
    }    
    public function getCategoria(){
        return $this->categoria;
    }
 

    //Set`s de los atributos
    public function setNombre($nuevoNombre){
         $this->nombre = $nuevoNombre;
    }
    public function setNombreCapitan($nuevoCapitan){
          $this->nombreCapitan = $nuevoCapitan;
    } 
    public function setCantJugadores($nuevaCantidad){
         $this->cantJugadores = $nuevaCantidad;
    }   
    public function setCategoria ($nuevaCategoria){
        $this->categoria=$nuevaCategoria;
    }
    

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Nombre: ".$this->getNombre().", esNombreCapitan: ".$this->getNombreCapitan().", 
       esCantJugadores: ".$this->getCantJugadores()." La categoria es:" . $this->getCategoria();
   }
}
