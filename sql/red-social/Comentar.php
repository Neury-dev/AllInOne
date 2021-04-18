<?php
session_start();
require_once '../Conexion.php';
/**
 * Description of Comentar
 *
 * @author desarrollador
 */
class Comentar {
    public function 
    comentario() {
        if (isset($_POST["comentar"])) {
            $usuario        = $_POST["usuario"];
            $publicacion    = $_POST["publicacion"];
            $comentario     = $_POST["comentario"];

            $sql = $GLOBALS["base"]->conexion-> 
            query("INSERT INTO `Comentarios`(`yo`, `usuario`, `publicacion`, `comentario`, `fecha`) "
                . "VALUES ('".$_SESSION["johnDoe"]."', '".$usuario."', '".$publicacion."', '".$comentario."', NOW())");
        }    
    }
}
$ejecutarComentario = new Comentar();
$comentario = $ejecutarComentario->comentario();