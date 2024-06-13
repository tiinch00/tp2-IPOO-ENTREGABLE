<?php

include_once "Viaje.php";
include_once "ResponsableV.php";
include_once "Pasajero.php";

//menú que permita cargar la información del viaje, modificar y ver sus datos.

/**Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
 * Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. 
 * Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. 
 * De la misma forma cargue la información del responsable del viaje. */

function seleccionarOpcion(){
    do {
        
        echo "Menu de opciones\n";
        echo "1) Cargar informacion del viaje\n";
        echo "2) Agregar pasajero\n";
        echo "3) Ver informacion de un pasajero\n";
        echo "4) Modificar pasajero\n";
        echo "5) Ver datos del viaje\n";
        echo "0) Salir\n";
       

        echo "Ingrese su opcion deseada: ";
        $opcion = trim(fgets(STDIN));

       

        if ($opcion >= 0 && $opcion <= 5){

            return $opcion;
           
        } else {
            echo  "\e[1;37;41m Por favor vuelva a ingresar una opcion del 0 al 5\e[0m\n";
        }  

     }  while(true);

}
//menú que permita cargar la información del viaje, modificar y ver sus datos.
$viajes = [];
$pasajeros = [];
$viaje = null;
$pasajero = null;
$responsable = null;
$sumaCostos = null;
do {
    $opcion = seleccionarOpcion();
 
    switch($opcion){
        case 1:
            


            // Cargar información del viaje
            echo "Ingrese el código del viaje: ";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese el destino del viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese la cantidad máxima de pasajeros: ";
            $cantidadMaximaPasajeros = intval(trim(fgets(STDIN)));
            echo "Ingrese costo del viaje: " ;
            $costoViaje = trim(fgets(STDIN));

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


            $viaje = new Viaje($codigo, $destino, $cantidadMaximaPasajeros,$pasajeros, $responsable,$costoViaje, $sumaCostos);
            if ($viaje != null){

                echo"----------------------\n" . 
                    "----------------------\n".
                    "Viaje cargado con exito!\n".
                    "----------------------\n" . 
                    "----------------------\n";

            }
            
            $viajes[] = $viaje;




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
                    echo "\n";
                    echo "\n".
                         "----------------------\n". 
                         "----------------------\n";
                    echo "Pasajero agregado al viaje correctamente.\n".
                         "----------------------\n". 
                         "----------------------\n";
                    echo $viaje->retornarCadena($viaje->getColPasajeros());
                    echo "\n";
                    echo "\n";
                } else {
                     echo "\n";
                     echo "\n";
                     echo "No se pudo agregar al pasajero al viaje. El pasajero ya está en el viaje o el viaje está completo.\n";
                     echo "\n";
                     echo "\n";
            }
        } else {
            echo "\n";
            echo "\n";
            echo "Primero debes cargar la información del viaje.\n";
            echo "\n";
            echo "\n";
        }

            break;
        
        case 3:
            //mostrar datos de un pasajero en particular
            
             if($viaje != null){

                echo "Ingrese numero de documento del pasajero: ";
                $documentoPasajero = trim(fgets(STDIN));
                $pasajero = $viaje->mostrarPasajero($documentoPasajero);

                if ($pasajero != null) {

                    echo "\n".
                         "----------------------\n". 
                         "----------------------\n".
                         "----------------------\n".
                         "----------------------\n"; 
                    echo "Datos del pasajero:\n";
                    echo "Nombre: " . $pasajero->getNombrePasajero() . "\n";
                    echo "Apellido: " . $pasajero->getApellidoPasajero() . "\n";
                    echo "Documento: " . $pasajero->getDocumentoPasajero() . "\n";
                    echo "Teléfono: " . $pasajero->getNumeroTelefono() . "\n".
                         "----------------------\n". 
                         "----------------------\n".
                         "----------------------\n".
                         "----------------------\n";
                    echo "\n";
                    echo "\n";
                    echo "\n";
                } else {
                    echo "\n";
                    echo "\n";
                    echo "\n";
                    echo "No hay pasajeros cargados...";
                    echo "\n";
                    echo "\n";
                    echo "\n";

                }
              } else {
                echo "\n";
                echo "\n";
                echo "\n";
                echo "Primero debes cargar la información del viaje.\n";
                echo "\n";
                echo "\n";
                echo "\n";
            }

            break;

        case 4:
            //Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero
            
            
            if ($viaje != null) {
                echo "Ingrese numero de documento del pasajero: ";
                $documentoPasajero = trim(fgets(STDIN));
                $pasajero = $viaje->mostrarPasajero($documentoPasajero);

                if ($pasajero != null) {
                    echo "Datos del pasajero:\n";
                    echo "1) Nombre\n";
                    echo "2) Apellido\n";
                    echo "3) Teléfono\n";
                    echo "Seleccione el dato a modificar: ";
                    $opcionMod = intval(trim(fgets(STDIN)));
                switch ($opcionMod){
                    case 1 : 
                        echo "Ingrese el nuevo nombre: ";
                        $nombre=trim(fgets(STDIN));
                        $pasajero->setNombrePasajero($nombre);
                        echo "Nombre modificado exitosamente.".
                             "----------------------\n". 
                             "----------------------\n".
                             "----------------------\n".
                             "----------------------\n";
                        break;
                    case 2 :
                        echo "ingrese el nuevo apellido: ";
                        $apellido=trim(fgets(STDIN));
                        $pasajero->setApellidoPasajero($apellido);
                        echo "Apellido modificado exitosamente.\n".
                             "----------------------\n". 
                             "----------------------\n".
                             "----------------------\n".
                             "----------------------\n";
                        break;
                     case 3:
                        echo "Ingrese el nuevo telefono: ";
                        $telefono = trim(fgets(STDIN));
                        $pasajero->setNumeroTelefono($telefono);
                        echo "Telefono modificado exitosamente.\n".
                             "----------------------\n". 
                             "----------------------\n".
                             "----------------------\n".
                             "----------------------\n";
                        break;

                     default:
                        echo "\n";
                        echo "\n";   
                        echo "Opción no válida.\n";
                        echo "\n";
                        echo "\n";
                            break;

                } 

             }else {
                echo "\n";
                echo "\n";
                echo  "No hay pasajeros con ese documento para modificar ";
                echo "\n";
                echo "\n";
            }
        }else {
            echo "\n";
                echo "\n";
                echo  "Todavia no hay viajes agregados\n";
                echo "\n";
                echo "\n";

        }

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
} while ($opcion != 0);