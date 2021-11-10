<?php
class Persona{
    private $ID;
    private $Cedula;
    private $Nombre;
    private $Apellido;
    private $Direccion;
    private $Telefono;
    private $Email;

    public function añadirPersona(){
        $con = new Conexion;
        $sql = 'INSERT INTO Clientes(Cedula, Nombre, Apellido, Direccion, Telefono, Email) VALUES (?, ?, ?, ?, ?, ?);';
        $query = $con->prepare($sql);
        $query->execute([
            $this->Cedula, $this->Nombre, $this->Apellido, $this->Direccion, $this->Telefono, $this->Email
        ]);
    }

    public function listarPersona(){
        $con = new Conexion;
        $sql = 'SELECT * FROM Clientes';
        $query = $con->query($sql);
        return $query->fetchAll();
    }

    public function eliminarPersona(){
        $con = new Conexion;
        $sql = 'DELETE FROM Clientes WHERE ID = ?';
        $query = $con->prepare($sql);
        $query->execute([
            $this->ID
        ]);
    }

    public function modificarPersona(){
        $con = new Conexion;
        $sql = "UPDATE Clientes 
                SET Cedula = ?, Nombre = ?, Apellido = ?, Direccion = ?, Telefono = ?, Email = ?
                WHERE ID= ?";
        $query = $con->prepare($sql);
        $query->execute([
            $this->Cedula, $this->Nombre, $this->Apellido, $this->Direccion, $this->Telefono, $this->Email, $this->ID
        ]);
    }

    public function obtenerPersona(){
        $con = new Conexion;
        $sql = 'SELECT * FROM Clientes WHERE ID = ?';
        $query = $con->prepare($sql);
        $query->execute([
            $this->ID
        ]);
        return $query->fetchAll()[0];
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