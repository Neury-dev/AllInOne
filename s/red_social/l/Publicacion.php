<?php
session_start();
require_once '../../Conexion.php';

class Publicacion {

    private $sql;
    private $resultado;
    private $obtenidos;

    public function time_ago($f) {
        $diferencia = time() - $f;

        if ($diferencia < 1) {
            return 'Justo ahora';
        }

        $condicion = array(
            12 * 30 * 24 * 60 * 60  => 'año',
            30 * 24 * 60 * 60       => 'mes',
            24 * 60 * 60            => 'dia',
            60 * 60                 => 'horas',
            60                      => 'minutos',
            1                       => 'segundos',
        );
        foreach ($condicion as $secs => $str) {
            $d = $diferencia / $secs;

            if ($d >= 1) {
                //redondear
                $t = round($d);
                return 'hace ' . $t . '' . $str . ($t > 1 ? 's' : '');
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
//                    $fecha = DateTime::createFromFormat('Y-m-d H:i:s', $valor['fecha']);
                    
                    array_push($this->obtenidos, array(
//                        "id"            => $valor["id"],
//                        "yo"            => $valor["yo"],
                        "nombre"        => $yo["nombre"],
                        "foto"          => $yo["foto"],
                        "publicacion"   => $valor["publicacion"],
                        "imagen"        => $imagen["imagen"],
//                        "fecha"         => $fecha->format('d M Y'),
                        "fecha"         => time_ago(strtotime($valor['fecha'])),
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
