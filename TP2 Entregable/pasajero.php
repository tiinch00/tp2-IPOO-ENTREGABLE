<?php



class Pasajero{

    private string $nombrePasajero;
    private string $apellidoPasajero;
    private int $documentoPasajero;
    private int $numeroTelefono;

    public function __construct($nombre,$apellido,$dni,$numTelefono){

        $this->nombrePasajero = $nombre;
        $this->apellidoPasajero = $apellido;
        $this->documentoPasajero = $dni;
        $this->numeroTelefono = $numTelefono;


    }

    /**
     * Get the value of nombrePasajero
     */ 
    public function getNombrePasajero()
    {
        return $this->nombrePasajero;
    }

    /**
     * Set the value of nombrePasajero
     *
     * @return  self
     */ 
    public function setNombrePasajero($nombre)
    {
        $this->nombrePasajero = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidoPasajero
     */ 
    public function getApellidoPasajero()
    {
        return $this->apellidoPasajero;
    }

    /**
     * Set the value of apellidoPasajero
     *
     * @return  self
     */ 
    public function setApellidoPasajero($apellido)
    {
        $this->apellidoPasajero = $apellido;

        return $this;
    }

    /**
     * Get the value of documentoPasajero
     */ 
    public function getDocumentoPasajero()
    {
        return $this->documentoPasajero;
    }

    /**
     * Set the value of documentoPasajero
     *
     * @return  self
     */ 
    public function setDocumentoPasajero($dni)
    {
        $this->documentoPasajero = $dni;

        return $this;
    }

    /**
     * Get the value of numeroTelefono
     */ 
    public function getNumeroTelefono()
    {
        return $this->numeroTelefono;
    }

    /**
     * Set the value of numeroTelefono
     *
     * @return  self
     */ 
    public function setNumeroTelefono($numTelefono)
    {
        $this->numeroTelefono = $numTelefono;

        return $this;
    }

    public function __toString(){

        return "(".$this->getNombrePasajero()." ".$this->getApellidoPasajero()." ".$this->getDocumentoPasajero()." ".$this->getNumeroTelefono().")\n";
    }
}


