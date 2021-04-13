<?php
require_once "../Conexion.php";
/**
 * Description of Gustas
 *
 * @author desarrollador
 */
class Gustas {
    public function 
    total() {
        $sql = $GLOBALS["base"]->conexion->query("SELECT gustaSi FROM `Publicaciones` ORDER BY id DESC");
        $resultado = $sql->fetch_all(MYSQLI_ASSOC);
        
        exit(json_encode($resultado));
    }
}
$ejecutarGustas = new Gustas();
$gustas = $ejecutarGustas->total();