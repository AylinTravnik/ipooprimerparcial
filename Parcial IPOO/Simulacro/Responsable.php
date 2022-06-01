<?php   
class Responsable{
  
  
    private $nombre;
    private $apellido;
    private $nroDoc;
    private $direccion;
    private $mail;
    private $telefono;
   

    //Clase constructora con valores
    public function __construct($Nombre, $Apellido, $NroDoc, $Direccion,$Mail, $Telfono){
        $this->nombre = $Nombre;
        $this->apellido = $Apellido;
        $this->nroDoc = $NroDoc;
        $this->direccion = $Direccion;
        $this->mail = $Mail;
        $this->telefono = $Telfono;
       
       
    }
    //Get`s de los atributos
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNroDoc(){
        return $this->nroDoc;
    }    
    public function getDireccion(){
        return $this->direccion;
    }  
    public function getMail(){
        return $this->mail;
    }  
    public function getTelfono(){
        return $this->telefono;
    }  
 

    //Set`s de los atributos
    public function setNombre($nuevoNombre){
         $this->nombre = $nuevoNombre;
    }
    public function setApellido($nuevoApellido){
          $this->apellido = $nuevoApellido;
    } 
    public function setNroDoc($nuevoNroDoc){
         $this->nroDoc = $nuevoNroDoc;
    }   
    public function setDireccion($nuevoDireccion){
        $this->direccion = $nuevoDireccion;
   } 
    public function setMail($nuevoMail){
        $this->mail = $nuevoMail;
    } 
    public function setTelfono($nuevoTelfono){
        $this->telefono = $nuevoTelfono;
    } 
    

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Nombre: ".$this->getNombre().", Apellido: ".$this->getApellido().", 
       NroDoc: ".$this->getNroDoc()."Direccion: ".$this->getDireccion().", Mail: ".$this->getMail().", 
       Telfono: ".$this->getTelfono();
   }
}
