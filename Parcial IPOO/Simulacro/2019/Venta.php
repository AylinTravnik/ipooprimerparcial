<?php   
class Venta{
  
  
    private $numero;
    private $fecha;
    private $cliente;
    private $coleccionProductos= [];
    private $precioFinal;
    

    //Clase constructora con valores
    public function __construct($Numero, $Fecha, $Cliente, $ColeccionProductos,$PrecioFinal){
        $this->numero = $Numero;
        $this->fecha = $Fecha;
        $this->cliente = $Cliente;
        $this->coleccionProductos = $ColeccionProductos;
        $this->precioFinal = $PrecioFinal;
      
       
    }
    //Get`s de los atributos
    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCliente(){
        return $this->cliente;
    }    
    public function getColeccionProductos(){
        return $this->coleccionProductos;
    }  
    public function getPrecioFinal(){
        return $this->precioFinal;
    }  
   

    //Set`s de los atributos
    public function setNumero($nuevoNumero){
         $this->numero = $nuevoNumero;
    }
    public function setFecha($nuevoFecha){
          $this->fecha = $nuevoFecha;
    } 
    public function setCliente($nuevoCliente){
         $this->cliente = $nuevoCliente;
    }   
    public function setColeccionProductos($nuevoColeccionProductos){
        $this->coleccionProductos = $nuevoColeccionProductos;
   } 
    public function setPrecioFinal($nuevoPrecioFinal){
        $this->precioFinal = $nuevoPrecioFinal;
    } 
    
/*Implementar el método incorporarProducto(objProducto) que recibe por parámetro un objeto producto
y lo incorpora, si es posible la venta, a la colección de productos de la venta. El método cada vez que incorpora 
un producto a la venta, debe actualizar la variable instancia precio final de la venta. Utilizar el
método que calcula el precio de venta de un producto donde crea necesario.
*/
public function incorporarProducto($objProducto){
    $disponible= $objProducto->getDisponible();
    $array= $this->getColeccionProductos();
    $precioFinal= $this->getPrecioFinal();
    $precio=$objProducto->darPrecioVenta();

    if ($disponible==true){
        array_push($array, $objProducto);
        $this->setColeccionProductos($array);
        $precioFinal= $precioFinal+$precio;
        $this->setPrecioFinal($precioFinal);
        

    }

      


}





    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Numero: ".$this->getNumero().", Fecha: ".$this->getFecha().", 
       Cliente: ".$this->getCliente()."ColeccionProductos: ".$this->getColeccionProductos().", PrecioFinal: ".$this->getPrecioFinal();
   }
}
