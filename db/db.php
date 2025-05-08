<?php
class db{
    public static function conexion(){
        $conn = new mysqli("localhost","root","root","mvc") or 
        die("Error al escribir la base de datos");
        $conn->query("SET NAME 'utf8'");
        return $conn;
    }
}
?>