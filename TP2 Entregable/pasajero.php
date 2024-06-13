<?php



class Pasajero{

    private $nombrePasajero;
    private $apellidoPasajero;
    private  $documentoPasajero;
    private  $numeroTelefono;

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

        
    }

    public function __toString(){

        $cadena  ="Nombre y apellido del pasajero: ".$this->getNombrePasajero()." ".$this->getApellidoPasajero()."\n";
        $cadena .="Numero de documento: ".$this->getDocumentoPasajero()."\n";
        $cadena .="Telefono: ".$this->getNumeroTelefono()."\n";

        return $cadena;
    }

}


