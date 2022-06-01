<?php   
class Cliente{
  
  
    private $nombre;
    private $apellido;
    private $baja;
    private $tipoDoc;
    private $nDoc;
    

    //Clase constructora con valores
    public function __construct($Nombre, $Apellido, $Baja, $TipoDoc,$NDoc){
        $this->nombre = $Nombre;
        $this->apellido = $Apellido;
        $this->baja = $Baja;
        $this->tipoDoc = $TipoDoc;
        $this->nDoc = $NDoc;
       
       
    }
    //Get`s de los atributos
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getBaja(){
        return $this->baja;
    }    
    public function getTipoDoc(){
        return $this->tipoDoc;
    }  
    public function getNDoc(){
        return $this->nDoc;
    }  
    

    //Set`s de los atributos
    public function setNombre($nuevoNombre){
         $this->nombre = $nuevoNombre;
    }
    public function setApellido($nuevoApellido){
          $this->apellido = $nuevoApellido;
    } 
    public function setBaja($nuevoBaja){
         $this->baja = $nuevoBaja;
    }   
    public function setTipoDoc($nuevoTipoDoc){
        $this->tipoDoc = $nuevoTipoDoc;
   } 
    public function setNDoc($nuevoNDoc){
        $this->nDoc = $nuevoNDoc;
    } 
    

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Nombre: ".$this->getNombre().", Apellido: ".$this->getApellido().", 
       Baja: ".$this->getBaja()."TipoDoc: ".$this->getTipoDoc().", NDoc: ".$this->getNDoc();
   }
}
