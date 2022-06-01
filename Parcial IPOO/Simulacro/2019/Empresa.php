<?php   
class Empresa{
  
  
    private $denominacion;
    private $direccion;
    private $coleccionCliente= [];
    private $coleccionProductos= [];
    private $coleccionVentas= [];
    

    //Clase constructora con valores
    public function __construct($Denominacion, $direccion, $ColeccionCliente, $ColeccionProductos,$coleccionVentas){
        $this->denominacion = $Denominacion;
        $this->direccion = $direccion;
        $this->coleccionCliente = $ColeccionCliente;
        $this->coleccionProductos = $ColeccionProductos;
        $this->coleccionVentas = $coleccionVentas;
        
    }
    //Get`s de los atributos
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function getColeccionCliente(){
        return $this->coleccionCliente;
    }    
    public function getColeccionProductos(){
        return $this->coleccionProductos;
    }  
    public function getcoleccionVentas(){
        return $this->coleccionVentas;
    }  
    

    //Set`s de los atributos
    public function setDenominacion($nuevoDenominacion){
         $this->denominacion = $nuevoDenominacion;
    }
    public function setdireccion($nuevodireccion){
          $this->direccion = $nuevodireccion;
    } 
    public function setColeccionCliente($nuevoColeccionCliente){
         $this->coleccionCliente = $nuevoColeccionCliente;
    }   
    public function setColeccionProductos($nuevoColeccionProductos){
        $this->coleccionProductos = $nuevoColeccionProductos;
   } 
    public function setcoleccionVentas($nuevocoleccionVentas){
        $this->coleccionVentas = $nuevocoleccionVentas;
    } 
    

    /*Implementar el método retornarVeículo($codigoProducto) que recorre la colección de productos de la
Empresa y retorna la referencia al objeto producto cuyo código coincide con el recibido por parámetro.*/

public function retornarVeículo($codigoProducto){
    $arreglo= $this->getColeccionProductos();
    var_dump($arreglo);
    $parar=false;
    $contar= count($arreglo);
    $i=0;
    $producto;
    while ($i<$contar /*&& $parar=false*/){
        $codProducto=$arreglo[$i]->getCodigo();
        if ($codProducto==$codigoProducto){
          $producto=$arreglo[$i];
          $parar=true;
          break;}
        $i++;
    }
    return $producto;


}




/*Implementar el método registrarVenta($colCodigosProductos, $objCliente) método que recibe por
parámetro una colección de códigos de productos, la cual es recorrida, se busca el objeto producto 
correspondiente al código y se incorpora a la colección de productos de la instancia Venta que debe ser creada.
Recordar que no todos los clientes ni todas los productos, están disponibles para registrar una venta en
un momento determinado.
El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
venta. */
public function registrarVenta($colCodigosProductos, $objCliente) {
    $cProductos=$this->getColeccionProductos();
    $largo=count($colCodigosProductos);
    $i=0;
    $colVentas= $this->getcoleccionVentas();
    //$arregloProductos=[];
    $statusCliente=$objCliente->getBaja();
    $fecha=getDate();
    if ($statusCliente==false){
        $venta=new Venta("", $fecha,$objCliente,[],0 );

    
     for ($i; $i<$largo; $i++){
       $codigoProducto=$colCodigosProductos[$i];
       $productoAgregar= $this->retornarVeículo($codigoProducto);
       var_dump($productoAgregar);
       $estaDisponible=$productoAgregar->getDisponible();
         if ($estaDisponible= true){
            $venta->incorporarProducto($productoAgregar);
          }
    }
    array_push($colVentas,$venta);
    $this->setcoleccionVentas($colVentas);
}
}

/*Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por párametro el tipo y
número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente. */

 public function retornarVentasXCliente($tipo,$numDoc){
    $colVentas= $this->getcoleccionVentas();
    $largo=count($colVentas);
    $arregloCliente= [];
    for ($i; $i<$largo; $i++){
     $ventaARevisar=$colVentas[$i];
     $cliente=$ventaARevisar->getCliente();
     $tipoDoc= $cliente->getTipoDoc();
     $nDoc=$cliente->getNDoc();
       if($tipoDoc==$tipo &&$nDoc==$numDoc){
        array_push($arregloCliente,$ventaARevisar);
       }
    }   
    return $arregloCliente;
}





    //Funcion to string de la clase
   public function __toString()
   {
       return " \n Denominacion: ".$this->getDenominacion().", direccion: ".$this->getdireccion().", 
       ColeccionCliente: ".$this->getColeccionCliente()."ColeccionProductos: ".$this->getColeccionProductos().", coleccionVentas: ".$this->getcoleccionVentas();
   }
}
