<?php
session_start();
require_once "../Conexion.php";
/**
 * Description of GustaNo
 *
 * @author desarrollador
 */
class GustaNo {
    private $sql;
    private $resultado;
    
    public function 
    no() {
        if(isset($_POST["gusta-no-boton"])) {
            $publicacionNo = $_POST["publicacion-no"];

            $this->sql = $GLOBALS["base"]->conexion->
            query("SELECT `usuarioNo`, `publicacionNo` FROM `Gusta` "
                . "WHERE usuarioNo = '".$_SESSION['johnDoe']."' AND publicacionNo = '".$publicacionNO."'");

            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

            if ($this->resultado) {
                $this->sql = $GLOBALS["base"]->conexion->
                query("DELETE FROM `Gusta` "
                    . "WHERE  usuarioNo = '".$_SESSION['johnDoe']."' AND publicacionNo = '".$publicacionNo."'");

                echo !empty($this->sql) ? "Se ha borrado correctamente" : "<span>No se ha borrado.</span>";
            } else {
                $this->sql = $GLOBALS["base"]->conexion-> 
                query("INSERT INTO `Gusta`(`usuarioNo`, `publicacionNo`, `fechaNoIniciada`) "
                    . "VALUES ('".$_SESSION['johnDoe']."', '".$publicacionNo."', NOW())");                 

                echo !empty($this->sql) ? "Creado con exito." : "<span>No se ha creado.</span>";
            } 
        }
    }
} 
      
$ejecutarGustaNo  = new GustaNo();
$gustaNo  = $ejecutarGustaNo->no();
?>
