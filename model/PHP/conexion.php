<?php
class Conexion extends PDO
{

   /*Genera la Conexion con la base de datos*/
   public function __CONSTRUCT()
   {
      try {
         $user = "root";
         $pass = "";
         $db = "gyr";
         $host = "localhost";
         $dsn = "mysql:host=" . $host . ";dbname=" . $db . ";charset=utf8";
         parent::__CONSTRUCT($dsn, $user, $pass);
      } catch (PDOException $e) {
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   }
}
?>