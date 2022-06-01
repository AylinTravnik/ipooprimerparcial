<?php   
class Persona{
  
  
    private $tipoDocumanto;
    private $nDocumento;
    private $nombre;
    private $apellido;
    private $telefono;
  

    //Clase constructora con valores
    public function __construct($TipoDocumento, $NDocumento, $Nompre, $Apellido,$Telefono){
        $this->tipoDocumanto = $TipoDocumento;
        $this->nDocumento = $NDocumento;
        $this->nombre = $Nompre;
        $this->apellido = $Apellido;
        $this->telefono = $Telefono;
       
       
    }
    //Get`s de los atributos
    public function getTipoDocumento(){
        return $this->tipoDocumanto;
    }
    public function getNDocumento(){
        return $this->nDocumento;
    }
    public function getNompre(){
        return $this->nombre;
    }    
    public function getApellido(){
        return $this->apellido;
    }  
    public function getTelefono(){
        return $this->telefono;
    }  
  

    //Set`s de los atributos
    public function setTipoDocumento($nuevoTipoDocumento){
         $this->tipoDocumanto = $nuevoTipoDocumento;
    }
    public function setNDocumento($nuevoNDocumento){
          $this->nDocumento = $nuevoNDocumento;
    } 
    public function setNompre($nuevoNompre){
         $this->nombre = $nuevoNompre;
    }   
    public function setApellido($nuevoApellido){
        $this->apellido = $nuevoApellido;
   } 
    public function setTelefono($nuevoTelefono){
        $this->telefono = $nuevoTelefono;
    } 
   

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n TipoDocumento: ".$this->getTipoDocumento().",\n NDocumento: ".$this->getNDocumento().", 
       \nNombre: ".$this->getNompre()."\nApellido: ".$this->getApellido().", \nTelefono: ".$this->getTelefono();
   }
}
