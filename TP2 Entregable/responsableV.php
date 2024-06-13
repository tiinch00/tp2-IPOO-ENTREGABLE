<?php

class  ResponsableV {

    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombreEmpleado;
    private $apellidoEmpleado;

    public function __construct($numEmpleado,$numLicencia,$nombre,$apellido){

        $this->numeroEmpleado = $numEmpleado;
        $this->numeroLicencia = $numLicencia;
        $this->nombreEmpleado = $nombre;
        $this->apellidoEmpleado = $apellido;

    }

    /**
     * Get the value of numeroEmpleado
     */ 
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    /**
     * Set the value of numeroEmpleado
     *
     * @return  self
     */ 
    public function setNumeroEmpleado($numEmpleado)
    {
        $this->numeroEmpleado = $numEmpleado;

        
    }

    /**
     * Get the value of numeroLicencia
     */ 
    public function getNumeroLicencia()
    {
        return $this->numeroLicencia;
    }

    /**
     * Set the value of numeroLicencia
     *
     * @return  self
     */ 
    public function setNumeroLicencia($numLicencia)
    {
        $this->numeroLicencia = $numLicencia;

       
    }

    /**
     * Get the value of nombreEmpleado
     */ 
    public function getNombreEmpleado()
    {
        return $this->nombreEmpleado;
    }

    /**
     * Set the value of nombreEmpleado
     *
     * @return  self
     */ 
    public function setNombreEmpleado($nombre)
    {
        $this->nombreEmpleado = $nombre;

        
    }

    /**
     * Get the value of apellidoEmpleado
     */ 
    public function getApellidoEmpleado()
    {
        return $this->apellidoEmpleado;
    }

    /**
     * Set the value of apellidoEmpleado
     *
     * @return  self
     */ 
    public function setApellidoEmpleado($apellido)
    {
        $this->apellidoEmpleado = $apellido;

       
    }

    public function __toString(){

        $cadena = "Numero de empleado: ".$this->getNumeroEmpleado()."\n";
        $cadena .= "Numero de lincencia: ".$this->getNumeroLicencia()."\n"; 
        $cadena .= "El nombre y apellido del Responsable es: ".$this->getNombreEmpleado()." ".$this->getApellidoEmpleado()."\n";

        return $cadena;
    }
}