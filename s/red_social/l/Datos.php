<?php
session_start();
require_once "../../Conexion.php";

class Datos {
    public function 
    deEdicion() {
        if(isset($_SESSION['johnDoe'])) {
            $sql = $GLOBALS["base"]->conexion->query("SELECT * FROM `Usuarios` WHERE id = '".$_SESSION['johnDoe']."'");
            $resultado = $sql->fetch_all(MYSQLI_ASSOC);

            exit(json_encode($resultado));
        }
    }
}

$ejecutarDatos = new Datos();
$datos = $ejecutarDatos->deEdicion();
?>