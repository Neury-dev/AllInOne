<?php
session_start();
require_once '../../Conexion.php';

class Publicacion {

    private $sql;
    private $resultado;
    private $obtenidos;

    public static function 
    tiempoTranscurrido($fecha) {
        $transcurrido = time() - $fecha;

        if ($transcurrido < 1) {
            return 'Justo ahora';
        }

        $periodo = array(
            12 * 30 * 24 * 60 * 60  => 'año',
            30 * 24 * 60 * 60       => 'me',
            24 * 60 * 60            => 'dia',
            60 * 60                 => 'hora',
            60                      => 'minuto',
            1                       => 'segundo',
        );
        
        foreach ($periodo as $pasado => $indice) {
            $redondear = $transcurrido / $pasado;

            if ($redondear >= 1) {
                $tiempo = round($redondear);
                return 'Hace ' . $tiempo . ' ' . $indice . ($tiempo > 1 ? 's' : '');
            }
        }
    }
    public function
    publicada() {
        $this->obtenidos = array();
        
        $this->sql = $GLOBALS["base"]->conexion->
            query("SELECT * FROM `Publicaciones` WHERE yo = '".$_SESSION["johnDoe"]."' ORDER BY id DESC");
        $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

        foreach ($this->resultado as $valor) {
            $this->sql = $GLOBALS["base"]->conexion->
                query("SELECT * FROM `Usuarios` WHERE id = '".$valor["yo"]."' ");
            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

            foreach ($this->resultado as $yo) {
                
                $this->sql = $GLOBALS["base"]->conexion->
                    query("SELECT imagen FROM `Imagenes` WHERE publicacion = '".$valor["id"]."' ");
                $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

                foreach ($this->resultado as $imagen) {
                    array_push($this->obtenidos, array(
                        "nombre"        => $yo["nombre"],
                        "foto"          => $yo["foto"],
                        "publicacion"   => $valor["publicacion"],
                        "imagen"        => $imagen["imagen"],
                        "fecha"         => self::tiempoTranscurrido(strtotime($valor['fecha'])),
                        "gustaSi"       => $valor["gustaSi"],
                        "gustaNo"       => $valor["gustaNo"],
                        "comentarios"   => $valor["comentarios"],
                        "compartida"    => $valor["compartida"]
                    ));
                }
            }
        }
        
        exit(json_encode($this->obtenidos));
    }

}

$publicacion = new Publicacion();
$publicada = $publicacion->publicada();
?>
