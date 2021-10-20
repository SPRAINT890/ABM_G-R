<?php
class Persona{
    private $ID;
    private $Cedula;
    private $Nombre;
    private $Apellido;
    private $Direccion;
    private $Telefono;
    private $Email;

    public function listarPersona(){
        $con = new Conexion;
        $sql = 'SELECT * FROM clientes';
        $query = $con->query($sql);
        return $query->fetchAll();
    }

    /**
     * Getters
     */ 
    public function getID()
    {
        return $this->ID;
    }

    public function getCedula()
    {
        return $this->Cedula;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }

    public function getDireccion()
    {
        return $this->Direccion;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Setters
     */ 
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    public function setCedula($Cedula)
    {
        $this->Cedula = $Cedula;

        return $this;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;

        return $this;
    }

    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }
}
?>