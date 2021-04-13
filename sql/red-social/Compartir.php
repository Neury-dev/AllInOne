<?php
session_start();
require_once "../Conexion.php";
/**
 * Description of Compartir
 *
 * @author desarrollador
 */
class Compartir {
    private $sql;
    private $sqlCompartidas;
    private $ok;

    public function 
    publicacion() {
        if(isset($_POST["compartir-boton"])) {
            $this->ok   = $_POST["compartido"];
            $usuario    = $_POST["usuario"];
 
            $sqlCompartida = $GLOBALS["base"]->conexion->
            query("SELECT `usuario`, `publicacion` FROM `Compartidas` "
                . "WHERE `usuario` = '".$usuario."' AND `publicacion` = '".$this->ok."'");

            $compartida = $sqlCompartida->fetch_all(MYSQLI_ASSOC);

            if(!empty($compartida)) {
                $this->sql = $GLOBALS["base"]->conexion-> 
                query("UPDATE `Publicaciones` SET `compartida` = `compartida` - 1 "
                    . "WHERE id = '".$this->ok."'");  

                echo !empty($this->sql) ? "Compartida acutalizado." : "Compartida no actualizado.";
                
                $this->sqlCompartidas = $GLOBALS["base"]->conexion->
                query("DELETE FROM `Compartidas` "
                    . "WHERE `usuario` = '".$usuario."' AND `publicacion` = '".$this->ok."'");
                
                echo !empty($this->sqlCompartidas) ? "Se ha borrado correctamente" : "No se ha borrado."; 
            } elseif(empty($compartida)) {
                $this->sqlCompartidas = $GLOBALS["base"]->conexion-> 
                query("INSERT INTO `Compartidas`(`yo`, `usuario`, `publicacion`, `fecha`) "
                    . "VALUES ('".$_SESSION['johnDoe']."', '".$usuario."', '".$this->ok."', NOW())");  
                
                echo !empty($this->sqlCompartidas) ? "Creado con exito." : "No se ha creado.";

                $this->sql = $GLOBALS["base"]->conexion-> 
                query("UPDATE `Publicaciones` SET `compartida` = `compartida` + 1 "
                    . "WHERE id = '".$this->ok."'");  

                echo !empty($this->sql) ? "Compartida acutalizado." : "Compartida no actualizado.";
            }
        } else {
            echo 'Se ha producido un error';
        }
    }
} 
      
$ejecutarCompartir = new Compartir();
$compartir = $ejecutarCompartir->publicacion();
?>
