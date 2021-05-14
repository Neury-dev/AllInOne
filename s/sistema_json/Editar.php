<?php
require_once 'EnPHP.php';

class Actualizar {
    public $indiceDeSesion;
    
    public function fila() {//if (isset($_SESSION["JSONenPHP"])) {
        foreach ($_SESSION["JSONenPHP"] as $this->indiceDeSesion => $datoDeSesion) {
            if ($datoDeSesion["ID"] == $_POST["id"]) {
                exit(json_encode($_SESSION["JSONenPHP"]));
            }
        }//} 
    }
}
$ejecutarActualizar = new Actualizar();
$fila = $ejecutarActualizar->fila();
?>