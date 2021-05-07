<?php

class Globales {

    public static function
    probarEntrada($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

}

//Globales::probarEntrada($datos);
?>