<?php 

public function imprimirPasajeros()
    {
        $listaPasajeros=$this->getColeccionPasajeros();
        $largo= count($listaPasajeros);
        for ($i=0; $i<$largo; $i++) {
            $pasajero=$listaPasajeros[$i];
            echo $pasajero;
        }
    }