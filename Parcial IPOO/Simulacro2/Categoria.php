<?php   
class Categoria{
  
  
    private $IDCategoria;
    private $descripcion;
   

    //Clase constructora con valores
    public function __construct($idCate, $esDescripcion){
        $this->IDCategoria = $idCate;
        $this->descripcion = $esDescripcion;
     
       
       
    }
    //Get`s de los atributos
    public function getIdCategoria(){
        return $this->IDCategoria;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
   
 

    //Set`s de los atributos
    public function setCatgoria($nuevaCategoria){
         $this->IDCategoria = $nuevaCategoria;
    }
    public function setDescripcion($nuevaDescripcion){
          $this->descripcion = $nuevaDescripcion;
    } 
   
    

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n idCate: ".$this->getIdCategoria().", \nesDescripcion: ".$this->getDescripcion()."\n";
   }
}
