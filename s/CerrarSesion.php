<?php

require_once 'Conexion.php';

session_start();
//session_unset();
//session_destroy();

class CerrarSesion extends Conexion {

    public function
    olvidar() {
        $this->conexion = CerrarSesion::olvidar();
        var_dump($this->conexion);
        CerrarSesion::session_unset($this->conexion);
        CerrarSesion::session_destroy($_SESSION["johnDoe"]);//$_SESSION["johnDoe"] = '';
    }

}

$ejecutar = new CerrarSesion();
$ejecutar->olvidar(header("location: http://localhost/AllInOne/index.php"));
?>