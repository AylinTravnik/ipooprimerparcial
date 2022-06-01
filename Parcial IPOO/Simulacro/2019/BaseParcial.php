<?php   
class EjemploClase{
  
  
    private $arandano;
    private $banana;
    private $coco;
    private $durazno;
    private $esparrago;
    private $frutilla;
    private $guinda;
    private $nombreArreglo= [];

    //Clase constructora con valores
    public function __construct($Arandano, $Banana, $Coco, $Durazno,$Esparrago, $Frutilla, $Guinda){
        $this->arandano = $Arandano;
        $this->banana = $Banana;
        $this->coco = $Coco;
        $this->durazno = $Durazno;
        $this->esparrago = $Esparrago;
        $this->frutilla = $Frutilla;
        $this->guinda = $Guinda;
       
    }
    //Get`s de los atributos
    public function getArandano(){
        return $this->arandano;
    }
    public function getBanana(){
        return $this->banana;
    }
    public function getCoco(){
        return $this->coco;
    }    
    public function getDurazno(){
        return $this->durazno;
    }  
    public function getEsparrago(){
        return $this->esparrago;
    }  
    public function getFrutilla(){
        return $this->frutilla;
    }  
    public function getGuinda(){
        return $this->guinda;
    } 
    public function getArreglo(){
        return $this->nombreArreglo;
    }

    //Set`s de los atributos
    public function setArandano($nuevoArandano){
         $this->arandano = $nuevoArandano;
    }
    public function setBanana($nuevoBanana){
          $this->banana = $nuevoBanana;
    } 
    public function setCoco($nuevoCoco){
         $this->coco = $nuevoCoco;
    }   
    public function setDurazno($nuevoDurazno){
        $this->durazno = $nuevoDurazno;
   } 
    public function setEsparrago($nuevoEsparrago){
        $this->esparrago = $nuevoEsparrago;
    } 
    public function setFrutilla($nuevoFrutilla){
        $this->frutilla = $nuevoFrutilla;
    } 
    public function setGuinda($nuevoGuinda){
        $this->guinda = $nuevoGuinda;
    } 
    public function setArreglo($nuevoArreglo){
        $this->nombreArreglo = $nuevoArreglo;
    }

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Arandano: ".$this->getArandano().", Banana: ".$this->getBanana().", 
       Coco: ".$this->getCoco()."Durazno: ".$this->getDurazno().", Esparrago: ".$this->getEsparrago().", 
       Frutilla: ".$this->getFrutilla().", Guinda: ".$this->getGuinda()."Arreglo\n".$this->nombreArreglo();
   }
}
