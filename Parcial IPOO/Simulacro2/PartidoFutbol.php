<?php
class PartidoFutbol extends Partido
{
  
    
    public function __construct($esEquipo1, $esEquipo2, $esFecha,$esGoles1,$esGoles2){
        parent::__construct($esEquipo1, $esEquipo2, $esFecha,$esGoles1,$esGoles2);
    }
    //Recibe un pasajero, lo agrega a la Cantidad de pasajeros, A
    public function coeficientePartido()
    {
        
        $coefCategoria= 0;
        $coefBase= parent::coeficientePartido();
        $unEquipo= $this->getEquipo1();
        $categoria= $unEquipo->getCategoria(); 

        if ($categoria = "Menores"){
            $coefCategoria = 0.11;
        }
        elseif ($categoria = "Juveniles"){
            $coefCategoria=0.17;
        }
        else{
            $coefCategoria=0.23;
        }

        $coefFinal= $coefBase + $coefBase* $coefCategoria;



        return $coefFinal;
    }
   
   
 
    





    public function __toString()
    {
        $cadena= parent::__toString();
       
        return $cadena;
    }
}
