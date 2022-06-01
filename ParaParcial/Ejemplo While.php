<?php 

public function responsableViaje($numeroViaje){
        $i=0;
        $existe = false;
        $responsable = null;
        $empresas = $this->getColeccion_empresas();
        while($i<count($empresas) && !$existe){
            $viajes = $empresas[$i]-> getColeccion_viajes();
            while($i<count($viajes) && !$existe){
                if($viajes[$i]->getNumero() == $numeroViaje){
                    $responsable = $viajes[$i]->getConductorResponsable();
                    $existe= true;
                }
                $i++;
            }
            $i++;
        }
        return $responsable;
    }


    public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa){
        $i=0;
        $vendio=false;
        $fechaDisponible = null;
        $empresas= $this->getColeccion_empresas();
        while($i<count($empresas) && !$vendio){
            if($empresas[$i]==$empresa){
                $viajes = $empresa[$i]-> getColeccion_viajes();
                $fechaDisponible = $this->fechaDisponible($viajes, $fecha);
                if($fechaDisponible != null)
                    $vendio = $empresas[$i]->venderViajeADestino($cantAsientos, $destino);
            }
            $i++;
        }
    }

    public function encontrarPasajero($dni){
        $esElPasajero= -1;
        $posicion=-1;
        $i=0;
        $encontro=false;
        $array_pasajeros = $this->getColeccionPasajeros();
        $largo=count($array_pasajeros);
        while ($i<$largo && !$encontro) {  //mientras que $i sea Menor que Tamaño arreglo Y $encontro= false
        $pasajero = $array_pasajeros[$i]; //pasajero = EL OBJETO PASAJERO en posicion $i del array.

      if ($pasajero->getDNI()==$dni) { //SI el N de documento de $Pasajero es Igual a $dni que puso usuario

         $encontro=true;
          $posicion=$i; //guardamos la posicion!!! LA USAMOS DESPUES.
          $esElPasajero= $posicion;
          echo $esElPasajero;

      }
            $i++;//Si NO es igual, $i+1 y de nuevo el bucle
        }
        return $esElPasajero;
    }
