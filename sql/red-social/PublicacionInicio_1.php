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
        
        $this->sql = $GLOBALS["base"]->conexion->
        query("SELECT Publicaciones.*, Imagenes.imagen FROM Publicaciones RIGHT JOIN Imagenes "
            . "ON Publicaciones.id = Imagenes.publicacion ORDER BY Publicaciones.id DESC");
        
        $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

        foreach ($this->resultado as $valor) {
//            $this->sql = $GLOBALS["base"]->conexion->query("SELECT imagen FROM `Imagenes` WHERE idPublicacion = '" . $valor["Publicaciones.id"] . "'");
//            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
//
//            foreach ($this->resultado as $imagen) {
                $fecha = DateTime::createFromFormat('Y-m-d H:i:s', $valor['Publicaciones.fecha']);
                
                array_push($this->obtenidos, array(
                    "id"            => $valor["Publicaciones.id"],
                    "por"           => $valor["Publicaciones.por"],
                    "autor"         => $valor["Publicaciones.autor"],
                    "idUsuario"     => $valor["Publicaciones.idUsuario"],
//                        "idUsuario"     => $usuario["Usuarios.id"],
//                    "nombre"        => $usuario["Usuarios.nombre"],
//                    "foto"          => $usuario["Usuarios.foto"],
                    "publicacion"   => $valor["Publicaciones.publicacion"],
                    "imagen"        => $valor["Imagenes.imagen"],
                    "fecha"         => $fecha->format('d M Y'),
                    "gustaSi"       => $valor["Publicaciones.gustaSi"],
                    "gustaNo"       => $valor["Publicaciones.gustaNo"],
//                    "comentarios"   => $valor["Publicaciones.comentarios"],
                    "compartida"    => $valor["Publicaciones.compartida"]
                ));
//            }
        }
        exit(json_encode($this->obtenidos));
    }
}

$publicacion = new PublicacionInicio();
$publicada = $publicacion->publicada();
?>
