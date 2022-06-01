<?php
class PartidoBasquet extends Partido
{
    private $cantInfracciones;
 
    
    public function __construct($esEquipo1, $esEquipo2, $esFecha,$esGoles1,$esGoles2,$esInfracciones )
    {
        parent::__construct($esEquipo1, $esEquipo2, $esFecha,$esGoles1,$esGoles2);
        $this->cantInfracciones = $esInfracciones;
       
    }
    public function getCantInfracciones()
    {
        return $this->cantInfracciones;
    }
    

    //sets de los atributos
    public function setCantInfracciones($esCantInfracciones)
    {
        $this->cantInfracciones = $esCantInfracciones;
    }
    

    //Recibe un pasajero, lo agrega a la Cantidad de pasajeros, A
    public function coeficientePartido()
    {
        

        $coefBase= parent::coeficientePartido();
        $perdidaInfracciones = 0.75 * $this->getCantInfracciones();
        $coefFinal= $coefBase - $perdidaInfracciones;




        return $coefFinal;
    }
   
 
    





    public function __toString()
    {
        $cadena= parent::__toString();
        $cadena.= " \n LaCantidad de infracciones fue".$this->getCantInfracciones(); 
        return $cadena;
    }
}
