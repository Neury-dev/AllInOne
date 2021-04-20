<?php
session_start();
require_once '../Conexion.php';

class Chat {
    public function 
    mensaje() {
//        if (isset($_POST["mensaje"])) {
//            $usuario        = $_POST["usuario"];
            $mensaje        = $_POST["mensaje"];

            $sql = $GLOBALS["base"]->conexion-> 
            query("INSERT INTO `Chats`(`de`, `para`, `mensaje`, `fecha`) "
                . "VALUES ('".$_SESSION["johnDoe"]."', '".$_SESSION["usuario"]."', '".$mensaje."', NOW())"); 
            
            if ($sql === true) {
                echo "Ha sido enviado. usuario No. ".$_SESSION["usuario"];
            } else {
                echo "No................Yo > ".$_SESSION["johnDoe"].".........Usuario > ".$_SESSION["usuario"];
            }
//        }    
    }
}
$ejecutarChat = new Chat();
$chat = $ejecutarChat->mensaje();
?>