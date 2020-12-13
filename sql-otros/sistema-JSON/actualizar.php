<?php 
require_once 'EnPHP.php';

if (isset($_SESSION["CARRITO"])) {
    foreach ($_SESSION["CARRITO"] as $indiceDeSesion => $datoDeSesion) {
        if ($datoDeSesion["ID"] == $_POST["id"]) {
            exit(json_encode($_SESSION["CARRITO"]));
        }
    }
} 
