<?php   
class Producto{
  
  
    private $codigo;
    private $costo;
    private $añoFabricacion;
    private $descripcion;
    private $porcentajeIncremento;
    private $disponible;
   
    //Clase constructora con valores
    public function __construct($Codigo, $Costo, $AñoFabricacion, $Descripcion,$PorcentajeIncremento, $Disponible, ){
        $this->codigo = $Codigo;
        $this->costo = $Costo;
        $this->añoFabricacion = $AñoFabricacion;
        $this->descripcion = $Descripcion;
        $this->porcentajeIncremento = $PorcentajeIncremento;
        $this->disponible = $Disponible;
       
       
    }
    //Get`s de los atributos
    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAñoFabricacion(){
        return $this->añoFabricacion;
    }    
    public function getDescripcion(){
        return $this->descripcion;
    }  
    public function getPorcentajeIncremento(){
        return $this->porcentajeIncremento;
    }  
    public function getDisponible(){
        return $this->disponible;
    }  
  
    //Set`s de los atributos
    public function setCodigo($nuevoCodigo){
         $this->codigo = $nuevoCodigo;
    }
    public function setCosto($nuevoCosto){
          $this->costo = $nuevoCosto;
    } 
    public function setAñoFabricacion($nuevoAñoFabricacion){
         $this->añoFabricacion = $nuevoAñoFabricacion;
    }   
    public function setDescripcion($nuevoDescripcion){
        $this->descripcion = $nuevoDescripcion;
   } 
    public function setPorcentajeIncremento($nuevoPorcentajeIncremento){
        $this->porcentajeIncremento = $nuevoPorcentajeIncremento;
    } 
    public function setDisponible($nuevoDisponible){
        $this->disponible = $nuevoDisponible;
    } 
 


/*Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendido el producto.
Si el producto no se encuentra disponible para la venta retorna un valor < 0. Si el producto esta disponible para la venta, el método realiza el siguiente cálculo:
$_venta = $_compra + $_compra * (anio * por_inc_anual)
donde $_compra: es el costo del producto.
 anio: cantidad de años trascurridos desde que se fabrico el producto.
 por_inc_anual: porcentaje incremento anual del producto.
*/

public function darPrecioVenta(){
$precioVenta;
$compra= $this->getCosto();
$anio= $this->getAñoFabricacion();
$por_inc_anual= $this->getPorcentajeIncremento();
$disponible= $this->getDisponible();
    if ($disponible==true){
        $precioVenta= $compra + $compra * ($anio* $por_inc_anual);
    }
    else{
        $precioVenta= -1;
    }
    return $precioVenta;



}

    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Codigo: ".$this->getCodigo().", Costo: ".$this->getCosto().", 
       AñoFabricacion: ".$this->getAñoFabricacion()."Descripcion: ".$this->getDescripcion().", PorcentajeIncremento: ".$this->getPorcentajeIncremento().", 
       Disponible: ".$this->getDisponible();
   }
}
