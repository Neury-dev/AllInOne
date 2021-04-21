<?php
session_start();
require_once '../Conexion.php';

class Contactados {
    private $sql;
    private $resultado;
    private $obtenidos;
    private $ok;

    public function 
    porChat() {
        $this->obtenidos = array();
        
        $this->sql = $GLOBALS["base"]->conexion->
        query("SELECT DISTINCT `de`, `para` FROM `Chats` "
            . "WHERE `de` = '".$_SESSION['johnDoe']."' OR `para` = '".$_SESSION['johnDoe']."' ORDER BY id DESC");
        $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

        foreach ($this->resultado as $valor) {
//            if ($valor["de"] != $_SESSION['johnDoe']) {
//                $this->ok = $valor["de"];
//            } else if ($valor["para"] != $_SESSION['johnDoe']) {
//                $this->ok = $valor["para"];
//            }
            
            if ($valor["de"] === $_SESSION['johnDoe'] and $valor["para"] !== $_SESSION['johnDoe']) {
                $this->ok = $valor["para"];
            } else if ($valor["de"] !== $_SESSION['johnDoe'] and $valor["para"] === $_SESSION['johnDoe']) {
                $this->ok = $valor["de"];
            }
            
            $this->sql = $GLOBALS["base"]->conexion->
            query("SELECT DISTINCT `nombre`, `foto` FROM `Usuarios` WHERE `id` = '".$this->ok."' ORDER BY id DESC");
            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

        foreach ($this->resultado as $usuario) {
            array_push($this->obtenidos, array(
                "de"        => $valor["de"],
                "para"      => $valor["para"],
                "nombre"    => $usuario["nombre"],
                "foto"      => $usuario["foto"],
                
            ));
        }
        }
        exit(json_encode($this->obtenidos));
    }
}
$ejecutarContactados = new Contactados();
$contactados = $ejecutarContactados->porChat();
?>