<?php   
class Edificio{
  
  
    private $direccion;
    private $encargado; //Persona
    private $inmueble =[]; //coleccion de inmuebles
   

    //Clase constructora con valores
    public function __construct($Direccion, $Encargado, $Inmueble){
        $this->direccion = $Direccion;
        $this->encargado = $Encargado;
        $this->inmueble = $Inmueble;
        
       
    }
    //Get`s de los atributos
    public function getDireccion(){
        return $this->direccion;
    }
    public function getEncargado(){
        return $this->encargado;
    }
    public function getInmueble(){
        return $this->inmueble;
    }    
 
    //Set`s de los atributos
    public function setDireccion($nuevoDireccion){
         $this->direccion = $nuevoDireccion;
    }
    public function setEncargado($nuevoEncargado){
          $this->encargado = $nuevoEncargado;
    } 
    public function setInmueble($nuevoInmueble){
         $this->inmueble = $nuevoInmueble;
    }   
 
/*método que retorna una colección de todos los departamentos del tipo recibido por parámetro (unTipoInmueble) que se encuentran
disponibles para ser alquilados y cuyo costo mensual no supera el valor recibido en el parámetro costoMensual.*/
public function darInmueblesDisponiblesParaAlquiler($unTipoInmueble,$costoMensual){
    $arreglo= $this->getInmueble();
    $largo=count($arreglo);
    $i=0;
    $arregloDisponibles= [];
    for($i=0; $i<$largo; $i++){
      if ($arreglo[$i]->getTipoInmueble()==$unTipoInmueble && $arreglo[$i]->getCosto()<=$costoMensual && $arreglo[$i]->getInquilino()==Null){
      array_push($arregloDisponibles,$arreglo[$i]);
      }
      

    }
    return $arregloDisponibles;
}
    /*recibe por parámetro una referencia al inmueble que se desea alquilar y la referencia a la persona que se desea alquilar. Tener en cuenta que solo
se va a poder realizar el alquiler de dicho inmueble si verifica la política de alquiler de la empresa. El método debe
retornar verdadero en caso de poder registrar el alquiler o falso en caso contrario*/
public function  registrarAlquilerInmueble($objInmueble, $objPersona){
    $alquilable;
    $arreglo= $this->getInmueble();
    $largo=count($arreglo);
    $tipo=$objInmueble->getTipoInmueble();
    $piso=$objInmueble->getPiso();
    
    $i=0;
    //var_dump($arreglo);
    while ($i<$largo /*&& $encontro=false*/){
        
        if($arreglo[$i]->getTipoInmueble()==$tipo && $arreglo[$i]->getInquilino()==null && $arreglo[$i]->getPiso()<$piso){
        
          $alquilable= false;
          break;
          
          
        }
        elseif($arreglo[$i]->getTipoInmueble()==$tipo && $arreglo[$i]->getInquilino()==null && $arreglo[$i]->getPiso()==$piso){
          $alquilable=true;
          $arreglo[$i]->setInquilino($objPersona);
          $this->setInmueble($arreglo);
         
          break;
        
        }
       
        $i++;



       
    }
    
    return $alquilable;
}

/*Implementar el método calculaCostoEdificio() método que retorna el valor correspondiente a la suma de los costos
de cada uno de los inmuebles que se encuentran alquilados.*/
public function calcularCostoEdificio(){
    $arreglo= $this->getInmueble();
    $largo=count($arreglo);
    $i=0;
    $costoEdificio=0;
    $contar=0;

    //var_dump($arreglo);
    for($i=0; $i<$largo; $i++){
        $hayInquilino=$arreglo[$i]->getInquilino();

        if ($hayInquilino == !null){
            $costoInmueble=$arreglo[$i]->getCosto();
            $contar= $contar +1;
           
            $costoEdificio= $costoEdificio +$costoInmueble ;
            
        }
    }
    return $costoEdificio;
}






    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Direccion: ".$this->getDireccion().", \n Encargado: ".$this->getEncargado().", 
       \n Inmueble: ".$this->getInmueble();
   }
}
