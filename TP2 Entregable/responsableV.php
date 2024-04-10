<?php

class  ResponsableV {

    private int $numeroEmpleado;
    private int $numeroLicencia;
    private string $nombreEmpleado;
    private string $apellidoEmpleado;

    public function __construct($numEpleado,$numLicencia,$nombre,$apellido){

        $this->numeroEmpleado = $numEpleado;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
    }

    public function __toString(){

        return "(".$this->getNumeroEmpleado()." ".$this->getNumeroLicencia()." ".$this->getNombreEmpleado()." ".$this->getApellidoEmpleado().")\n";
    }
}