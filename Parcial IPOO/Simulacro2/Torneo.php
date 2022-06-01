<?php   
class Torneo{
  
  
    private $coleccion_partidosF;
    private $coleccion_partidosB;
    private $importe;
    private $identificacion;
   
   

    //Clase constructora con valores
    public function __construct($esImporte, $esIdentificacion, $esColeccionF, $esColeccionB ){
        $this->coleccion_partidosF = $esColeccionF;
        $this->coleccion_partidosB = $esColeccionB;
        $this->importe = $esImporte;
        $this->identificacion = $esIdentificacion;
      
     
       
       
    }
    //Get`s de los atributos
    public function getColeccionPartidosF(){
        return $this->coleccion_partidosF;
    }
    public function getColeccionPartidosB(){
        return $this->coleccion_partidosB;
    }
    public function getImporte(){
        return $this->importe;
    }
 
 

    //Set`s de los atributos
    public function setColeccionPartidosF($nuevaColeccion){
         $this->coleccion_partidosF = $nuevaColeccion;
    }
    public function setColeccionPartidosB($nuevaColeccion){
        $this->coleccion_partidosB = $nuevaColeccion;
   }
 
    public function setImporte($nuevoImporte){
        $this->importe = $nuevoImporte;
   }
    
   /*Implementar el método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo) en la clase
Torneo el cual recibe por parámetro 2 equipos, la fecha en la que se realizará el partido y si se trata de
un partido de futbol o basquetbol. El método debe crear y retornar una instancia de la clase Partido que
corresponda y almacenarla en la colección. Se debe chequear que los 2 equipos tengan la misma
categoría y cantidad de jugadores.*/

 public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo){
     $cat1= $OBJEquipo1->getCategoria();
     $cat2= $OBJEquipo2->getCategoria();
     $jugadores1= $OBJEquipo1->getCantJugadores();
     $jugadores2= $OBJEquipo2->getCantJugadores();
    
    if ($cat1 == $cat2 && $jugadores1 ==$jugadores2){
        
        if ($tipo= "Futbol"){
            $partido= new PartidoFutbol($OBJEquipo1, $OBJEquipo2,$fecha, 0, 0 ); 
            $coleccion= $this->getColeccionPartidosF();
            array_push($coleccion,$partido);
            $this->setColeccionPartidosF($coleccion);
        } 
        else{
            $partido= new PartidoBasquet($OBJEquipo1, $OBJEquipo2,$fecha,0, 0, 0) ;   
            $coleccion= $this->getColeccionPartidosB();
            array_push($coleccion,$partido);
            $this->setColeccionPartidosB($coleccion);
        }
     
     

    }
    return $partido; 
 }

 /*Implementar el método darGanadores($deporte) en la clase Torneo que recibe por parámetro si se trata
de un partido de futbol o de basquetbol y en base al parámetro busca entre esos partidos los equipos
ganadores (equipo con mayor cantidad de goles). El método retorna una colección con los objetos de los
equipos encontrados.*/
public function darGanadores($deporte){
    $coleccionGanadores=[];
    echo $deporte;
    if ($deporte == "Futbol"){
        $coleccion= $this->getColeccionPartidosF();
        $largo= count($coleccion); 
     }
    else {
        $coleccion= $this->getColeccionPartidosB();
        $largo= count($coleccion); 

    }
    for ($i=0; $i<$largo; $i++){
        $partidoActual = $coleccion[$i];
        $goles1=$partidoActual->getGoles1(); 
        $goles2=$partidoActual->getGoles2(); 
        if ($goles1>$goles2){
            $equipoGanador= $partidoActual->getEquipo1();
            array_push ($coleccionGanadores, $equipoGanador);
        }
        elseif($goles1<$goles2){
            $equipoGanador= $partidoActual->getEquipo2();
            array_push ($coleccionGanadores, $equipoGanador);
        }

    }
    return $coleccionGanadores;

}

/*Implementar el método calcularPremioPartido($OBJPartido) que debe retornar un arreglo asociativo
donde una de sus claves es ‘equipoGanador’ y contiene la referencia al equipo ganador; y la otra clave
es ‘premioPartido’ que contiene el valor obtenido del coeficiente del Partido por el importe configurado
para el torneo.*/

public function calcularPremioPartido($OBJPartido) {
    $equipoGanador;
    $premio=0;
    $coefPartido=$OBJPartido->coeficientePartido();
    $goles1=$OBJPartido->getGoles1(); 
    $goles2=$OBJPartido->getGoles2();
    if ($goles1>$goles2) {
        $equipoGanador= $OBJPartido->getEquipo1();
    }
    elseif($goles1<$goles2){
    $equipoGanador= $OBJPartido->getEquipo2();     
    }
    $premioPartido= $this->getImporte()*$coefPartido; 

    $resultado = array("equipoGanador"=>$equipoGanador, "premioPartido"=>$premioPartido);

    return $resultado; 


}


    //Funcion to string de la clase
   public function __toString()
   {
       return " \n ColPartidos Futbol: ".$this->getColeccionPartidosF()." \n ColPartidos Basket: ".$this->getColeccionPartidosB()."Importe: ".$this->getImporte()."Identificacion: ".$this->getIdentificacion();
   }
}
