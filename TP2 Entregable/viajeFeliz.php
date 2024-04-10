
<?php

include_once "pasajero.php";

class Viaje{

    private int $codigoViaje;
    private string $destinoViaje;
    private int $cantMaximaPasajerosViaje;
    private array $pasajeros;


    public function __construct($codigo,$destino,$cantMaximaPasajeros){

        $this->codigoViaje = $codigo;
        $this->destinoViaje = $destino;
        $this->cantMaximaPasajerosViaje = $cantMaximaPasajeros;
        $this->pasajeros = [
            new Pasajero("juan", "perez", 25352398, "2995526423"),
            new Pasajero("pedro", "garcia", 35378954, "2994485632"),
            new Pasajero("majo", "sanchez", 3458793, "2944653218"),
        ];
    }


    /**
     * Get the value of codigoViaje
     */ 
    public function getCodigoViaje()
    {
        return $this->codigoViaje;
    }

    /**
     * Set the value of codigoViaje
     *
     * @return  self
     */ 
    public function setCodigoViaje($codigo)
    {
        $this->codigoViaje = $codigo;

        return $this;
    }

    /**
     * Get the value of destinoViaje
     */ 
    public function getDestinoViaje()
    {
        return $this->destinoViaje;
    }

    /**
     * Set the value of destinoViaje
     *
     * @return  self
     */ 
    public function setDestinoViaje($destino)
    {
        $this->destinoViaje = $destino;

        return $this;
    }

    /**
     * Get the value of cantMaximaPasajerosViaje
     */ 
    public function getCantMaximaPasajerosViaje()
    {
        return $this->cantMaximaPasajerosViaje;
    }

    /**
     * Set the value of cantMaximaPasajerosViaje
     *
     * @return  self
     */ 
    public function setCantMaximaPasajerosViaje($cantMaximaPasajeros)
    {
        $this->cantMaximaPasajerosViaje = $cantMaximaPasajeros;

        return $this;
    }

    /**
     * Get the value of cantPasajerosViaje
     */ 
    public function getCantPasajerosViaje()
    {
        return $this->pasajeros;
    }

    

    public function estaPasajero($pasajero){

        $esta = false;
        foreach($this->pasajeros as $persona){
            if ($persona->getDocumentoPasajero() == $pasajero->getDocumentoPasajero()){
                
                $esta = true;
            }
        }
        return $esta;
    }

    public function agregarPasajero($pasajero){

        $agrego = false;

        if (count($this->pasajeros)<$this->getCantMaximaPasajerosViaje()){
            if(!estaPasajero($pasajero)){

            $this->pasajeros[]= $pasajero;

            $agrego = true;
            }

        }
        return $agrego;
    }


    }