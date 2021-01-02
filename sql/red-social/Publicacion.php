<?php
require_once '../Conexion.php';

class Publicacion {
//    private $sql;
//    private $resultado;

    public function
    publicada() {
        $sql = $GLOBALS["base"]->conexion->query("SELECT * FROM `Publicaciones` ORDER BY id DESC");
        $resultado = $sql->fetch_all(MYSQLI_ASSOC);
        
        
//        $this->articulosContados = count($_SESSION["JSONenPHP"]);
//                            
//        $this->sesionArticulos = array(
//            'ID' => $_POST["id"],
//            'FECHA' => $_POST["fecha"],
//            'MARCA' => $_POST["marca"],
//            'NOMBRE' => $_POST["nombre"],
//            'PRECIO' => $_POST["precio"]
//        );
//
//        is_array($_SESSION["JSONenPHP"][$this->articulosContados] = $this->sesionArticulos);
        
        foreach ($resultado as $valor) {
//            $sqlUsuario = $GLOBALS["base"]->conexion->query("SELECT * FROM `Usuarios` WHERE id = '".$valor["idUsuario"]."'");
//            $resultadoUsuario = $sqlUsuario->fetch_all(MYSQLI_ASSOC);
            
//            $obtenido = array(
////                "usuario" => array(
////                    "nombre"        => $resultadoUsuario["nombre"]
////                ),
//                "publicacion" => array(
//                    "id"            => $valor["id"], 
//                    "idUsuario"     => $valor["idUsuario"],
//                    "publicacion"   => $valor["publicacion"], 
//                    "fecha"         => $valor["fecha"]
//                ),
//            );
//            exit(json_encode($obtenido));
            $obtenido = array(
                $valor["id"], 
                $valor["idUsuario"],
//                "nombre"        => $resultadoUsuario["nombre"],
                $valor["publicacion"], 
                $valor["fecha"]
            );
//            
            exit(json_encode($obtenido));
        }



        if (empty($resultado)) { echo 'No hay publicaciones.'; exit(json_encode('No hay publicaciones.')); }

//        exit(json_encode($resultado));
//        exit(json_encode($this->resultado));
    }
}
$publicacion    = new Publicacion();
$publicada      = $publicacion->publicada();
?>
