<?php

require_once 'Conexion.php';

session_start();
session_unset();

class CerrarSesion extends Conexion {

    public function
    olvidar() {
        $this->conexion = CerrarSesion::olvidar();
        var_dump($this->conexion);
        CerrarSesion::session_unset($this->conexion);
        CerrarSesion::destroy($this->conexion);
    }

}

$ejecutar = new CerrarSesion();
$ejecutar->olvidar(header("location: http://localhost/AllInOne/index.php"));
?>