<?php   
class Inmueble{
  
  
    private $codReferencia;
    private $piso;
    private $tipoInmueble;
    private $inquilino = null;
    private $costo;
 
    //Clase constructora con valores
    public function __construct($CodReferencia, $Piso, $TipoInmueble, $Inquilino,$Costo){
        $this->codReferencia = $CodReferencia;
        $this->piso = $Piso;
        $this->tipoInmueble = $TipoInmueble;
        $this->inquilino = $Inquilino;
        $this->costo = $Costo;
       
    }
    //Get`s de los atributos
    public function getCodReferencia(){
        return $this->codReferencia;
    }
    public function getPiso(){
        return $this->piso;
    }
    public function getTipoInmueble(){
        return $this->tipoInmueble;
    }    
    public function getInquilino(){
        return $this->inquilino;
    }  
    public function getCosto(){
        return $this->costo;
    }  

    

    //Set`s de los atributos
    public function setCodReferencia($nuevoCodReferencia){
         $this->codReferencia = $nuevoCodReferencia;
    }
    public function setPiso($nuevoPiso){
          $this->piso = $nuevoPiso;
    } 
    public function setTipoInmueble($nuevoTipoInmueble){
         $this->tipoInmueble = $nuevoTipoInmueble;
    }   
    public function setInquilino($nuevoInquilino){
        $this->inquilino = $nuevoInquilino;
   } 
    public function setCosto($nuevoCosto){
        $this->costo = $nuevoCosto;
    } 
     

    public function alquilarInmueble($objPersona){
    $alquilo=false;
        if ($this->getInquilino()==null){
            $this->setInquilino($objPersona);
            $alquilo=true;
        }
        return $alquilo; 
    }

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n CodReferencia: ".$this->getCodReferencia().", \nPiso: ".$this->getPiso().", 
       \nTipoInmueble: ".$this->getTipoInmueble()."\nInquilino: ".$this->getInquilino().", costo: ".$this->getCosto() 
       ;
   }
}
