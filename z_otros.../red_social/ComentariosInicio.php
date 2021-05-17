<?php
session_start();
require_once '../Conexion.php';
/**
 * Description of ComentariosInicio
 *
 * @author desarrollador
 */
class ComentariosInicio {
    private $sql;
    private $resultado;
    private $obtenidos;

    public function
    comentario() {
        $publicacion = $_POST["publicacion"];
//        $comentar = $_POST["comentar"];
        
        $this->obtenidos = array();
        
        $sqlComentario = $GLOBALS["base"]->conexion->
        query("SELECT * FROM `Comentarios` WHERE publicacion = '" . $publicacion . "' ORDER BY id DESC");
        $comentarios = $sqlComentario ->fetch_all(MYSQLI_ASSOC);

        foreach ($comentarios as $comentario) {
            //            $this->sql = $GLOBALS["base"]->conexion->
//            query("SELECT id, nombre, foto FROM `Usuarios` WHERE id = '" . $valor["idUsuario"] . "'");
//            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
//
//        foreach ($this->resultado as $usuario) {
//            $this->sql = $GLOBALS["base"]->conexion->
//            query("SELECT * FROM `Publicaciones` WHERE id = '".$comentario."'");
//            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
//
//        foreach ($this->resultado as $valor) {
//            $this->sql = $GLOBALS["base"]->conexion->
//            query("SELECT imagen FROM `Imagenes` WHERE idPublicacion = '" . $valor["id"] . "'");
//            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
//
//            
//        foreach ($this->resultado as $imagen) {
            
            $fecha = DateTime::createFromFormat('Y-m-d H:i:s', $comentario['fecha']);
            
            array_push($this->obtenidos, array(
                "fecha"         => $fecha->format('d M Y'),
                "comentario"    => $comentario["comentario"]
            ));
//        }
//        }
//        }
        }
        
        exit(json_encode($this->obtenidos));
    }
}

$ejecutarComentariosInicio = new ComentariosInicio();
$comentarioInicio = $ejecutarComentariosInicio->comentario();
?>
