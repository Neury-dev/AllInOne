<?php
session_start();
require_once '../Conexion.php';

class PublicacionInicio {

    private $sql;
    private $resultado;
    private $obtenidos;

    public function
    publicada() {
        $this->obtenidos = array();
        
        $this->sql = $GLOBALS["base"]->conexion->query("SELECT * FROM `Publicaciones` ORDER BY id DESC");
        $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

        foreach ($this->resultado as $valor) {
            $this->sql = $GLOBALS["base"]->conexion->query("SELECT id, nombre, foto FROM `Usuarios` WHERE id = '" . $valor["idUsuario"] . "'");
            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

            foreach ($this->resultado as $usuario) {
                
                $this->sql = $GLOBALS["base"]->conexion->query("SELECT imagen FROM `Imagenes` WHERE idPublicacion = '" . $valor["id"] . "'");
                $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

                foreach ($this->resultado as $imagen) {
                    $fecha = DateTime::createFromFormat('Y-m-d H:i:s', $valor['fecha']);
                    array_push($this->obtenidos, array(
                        "id"            => $valor["id"],
//                        "idUsuario"     => $valor["idUsuario"],
                        "idUsuario"     => $usuario["id"],
                        "nombre"        => $usuario["nombre"],
                        "foto"          => $usuario["foto"],
                        "publicacion"   => $valor["publicacion"],
                        "imagen"        => $imagen["imagen"],
                        "fecha"         => $fecha->format('d M Y'),
                        "gustaSi"       => $valor["gustaSi"],
                        "gustaNo"       => $valor["gustaNo"],
                        "compartida"    => $valor["compartida"]
                    ));
                }
            }
        }
        
        exit(json_encode($this->obtenidos));
    }
}

$publicacion = new PublicacionInicio();
$publicada = $publicacion->publicada();
?>
