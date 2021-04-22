<?php
session_start();
require_once '../Conexion.php';

class ChatCon {
    private $sql;
    private $de;
    private $para;
    
    public function 
    reMensaje() {
        if (!empty(isset($_POST["chat-con"]))) {
            $this->de   = $_SESSION['johnDoe'];
            $this->para = $_POST["chat-con"]; 
            $mensaje    = $_POST["re-mensaje"];

            $this->sql = $GLOBALS["base"]->conexion-> 
            query("INSERT INTO `Chats`(`de`, `para`, `mensaje`, `fecha`) "
                . "VALUES ('".$this->de."', '".$this->para."', '".$mensaje."', NOW())");
            echo !empty($this->sql) ? $this->para : "No.. ha sido enviado.";    
        }    
    }
}
$ejecutarChatActivo = new ChatCon();
$chatActivo = $ejecutarChatActivo->reMensaje();
?>