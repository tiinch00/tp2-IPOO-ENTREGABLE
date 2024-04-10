<?php

include_once "viajeFeliz.php";
include_once "responsableV.php";
include_once "pasajero.php";

function seleccionarOpcion(){
    do {
        
        echo "Menu de opciones\n";
        echo "1) Cargar informacion del viaje\n";
        echo "2) Agregar pasajero\n";
        echo "3) Ver informacion de un pasajero\n";
        echo "4) Modificar pasajero\n";
        echo "5) Ver datos del viaje\n";
        echo "6) Salir\n";
       

        echo "Ingrese su opcion deseada: ";
        $opcion = trim(fgets(STDIN));

        $condicion = false;

        if ($opcion < 1 || $opcion > 6 ){
            
            echo  "\e[1;37;41m Por favor vuelva a ingresar una opcion del 1 al 6\e[0m\n";
        } else {
            $condicion = true;
        }  

     }while($condicion == false);

     return $opcion;
}

do {
    $opcion = seleccionarOpcion();

    $viaje = null;
    $pasajero = null;
    $responsable = null;

    switch($opcion){
        case 1:

            $viajes = [];
            $viajes[] = $viaje;


            // Cargar información del viaje
            echo "Ingrese el código del viaje: ";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese el destino del viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese la cantidad máxima de pasajeros: ";
            $cantidadMaximaPasajeros = intval(trim(fgets(STDIN)));

            // Datos del responsable
            echo "Ingrese el número de empleado del responsable: ";
            $numeroEmpleado = trim(fgets(STDIN));
            echo "Ingrese el número de licencia del responsable: ";
            $numeroLicencia = trim(fgets(STDIN));
            echo "Ingrese el nombre del responsable: ";
            $nombreResponsable = trim(fgets(STDIN));
            echo "Ingrese el apellido del responsable: ";
            $apellidoResponsable = trim(fgets(STDIN));

            $responsable = new ResponsableV($numeroEmpleado, $numeroLicencia, $nombreResponsable, $apellidoResponsable);


            $viaje = new Viaje($codigo, $destino, $cantidadMaximaPasajeros, $responsable);




            break;
        
            

        case 2:
            
            //cargar info del pasajero
            if($viaje != null){
                
                echo "Ingrese nombre del pasajero: ";
                $nombrePasajero = trim(fgets(STDIN));
                echo "Ingrese apellido del pasajero: ";
                $apellidoPasajero = trim(fgets(STDIN));
                echo "Ingrese Dni del pasajero: ";
                $dniPasajero = trim(fgets(STDIN));
                echo "Ingrese numero de telefono del pasajero: ";
                $numTelefono = trim(fgets(STDIN));
            

                $pasajero = new Pasajero($nombrePasajero,$apellidoPasajero,$dniPasajero,$numTelefono);
                if ($viaje->agregarPasajero($pasajero)) {
                echo "Pasajero agregado al viaje correctamente.\n";
            } else {
                echo "No se pudo agregar al pasajero al viaje. El pasajero ya está en el viaje o el viaje está completo.\n";
            }
        } else {
            echo "Primero debes cargar la información del viaje.\n";
        }

            break;
        
        case 3:
            //mostrar datos de un pasajero en particular
            echo "Ingrese numero de documento del pasajero: ";
            $documentoPasajero = trim(fgets(STDIN));

            function mostrarPasajero($documentoPasajero){

                $encontrado = false;

                if ($documentoPasajero != null){
        
                    foreach($this->pasajeros as $pasajero){
        
                        if ($pasajero->getDocumentoPasajero() === $documentoPasajero) {
                            echo "Datos del pasajero:\n";
                            echo "Nombre: " . $pasajero->getNombrePasajero() . "\n";
                            echo "Apellido: " . $pasajero->getApellidoPasajero() . "\n";
                            echo "Documento: " . $pasajero->getDocumentoPasajero() . "\n";
                            echo "Teléfono: " . $pasajero->getNumeroTelefono() . "\n";
                            return; // Salir del bucle una vez que se encuentre el pasajero
                            $encontrado = true;
                        }
                    }
                } 
                if ($encontrado = false){
                    echo "\n";
                    echo "\n";
                    echo "Pasajero con documento $documentoPasajero no encontrado en este viaje.\n";
                    echo "\n";
                    echo "\n";
                }
             }


            break;

        case 4:
            
            

            break;




        case 5:
            //mostar datos del viaje
            if ($viaje == null){
                echo "\n";
                echo "\n";
                echo  "Todavia no hay viajes agregados\n";
                echo "\n";
                echo "\n";

            }else{
                echo $viaje;
            }
            
            


            break;


    }
} while ($opcion != 6);