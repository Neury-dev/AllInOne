<?php
session_start();
require_once "../Conexion.php";
/**
 * Description of Gusta
 *
 * @author desarrollador
 */
class GustaSi {
//    private $sql;
    
    public function 
    si() {
        if(isset($_POST["gusta-si-boton"])) {
            $publicacionSi  = $_POST["publicacion-si"];
            $gustaSiTotal   = $_POST["gusta-si-total"];
//            $siTotal = intval(preg_replace('/[*0-9+]/', '', $gustaSiTotal), 10);
            
            $sqlGustaSi = $GLOBALS["base"]->conexion->
            query("SELECT `usuarioSi`, `publicacionSi` FROM `Gusta` "
                . "WHERE usuarioSi = '".$_SESSION['johnDoe']."' AND publicacionSi = '".$publicacionSi."'");

            $gustaSi = $sqlGustaSi->fetch_all(MYSQLI_ASSOC);
            
            $sqlGustaNo = $GLOBALS["base"]->conexion->
            query("SELECT `usuarioNo`, `publicacionNo` FROM `Gusta` "
                . "WHERE usuarioNo = '".$_SESSION['johnDoe']."' AND publicacionNo = '".$publicacionSi."'");

            $gustaNo = $sqlGustaNo->fetch_all(MYSQLI_ASSOC);

            if($gustaSi and $gustaNo) {
                $sqlActualizarEliminar = $GLOBALS["base"]->conexion->
                query("UPDATE `Gusta` SET "
                    . "`usuarioSi`= NULL, "
                    . "`publicacionSi`= NULL, "
                    . "`fechaSiFinalizada`= NOW() "
                    . "WHERE usuarioNo='".$_SESSION['johnDoe']."' AND publicacionNo='".$publicacionSi."'");

                echo !empty($sqlActualizarEliminar ) ? "Actualizado en blanco" : "<span>No actualizado en blanco.</span>";
                
                $actualizarEliminar = $GLOBALS["base"]->conexion-> 
                query("UPDATE `Publicaciones` SET `gustaSi`= `gustaSi` - 1 "
                    . "WHERE id = '".$publicacionSi."'");  

                echo !empty($actualizarEliminar) ? "Gusta Si acutalizado." : "<span>Gusta Si no actualizado.</span>";
            } elseif (!$gustaSi and $gustaNo) {
                $sqlAcualizarInsertar = $GLOBALS["base"]->conexion->
                query("UPDATE `Gusta` SET "
                    . "`usuarioSi`= '".$_SESSION['johnDoe']."', "
                    . "`publicacionSi`= '".$publicacionSi."', "
                    . "`fechaSiIniciada`= NOW() "
                    . "WHERE usuarioNo='".$_SESSION['johnDoe']."' AND publicacionNo='".$publicacionSi."'");

                echo !empty($sqlAcualizarInsertar) ? "Se ha actualizado" : "<span>No se ha actualizado.</span>"; 
                
                $acualizarInsertar = $GLOBALS["base"]->conexion-> 
                query("UPDATE `Publicaciones` SET `gustaSi`= '".($gustaSiTotal + 1)."' "
                    . "WHERE id = '".$publicacionSi."'");  

                echo !empty($acualizarInsertar) ? "Gusta Si acutalizado." : "<span>Gusta Si no actualizado.</span>";
            } elseif($gustaSi and !$gustaNo) {
                $eliminar = $GLOBALS["base"]->conexion-> 
                query("UPDATE `Publicaciones` SET `gustaSi`= `gustaSi` - 1 "
                    . "WHERE id = '".$publicacionSi."'");  

                echo !empty($eliminar) ? "Gusta Si acutalizado." : "<span>Gusta Si no actualizado.</span>";
                
                $sqlEliminar = $GLOBALS["base"]->conexion->
                query("DELETE FROM `Gusta` "
                    . "WHERE  usuarioSi='".$_SESSION['johnDoe']."' AND publicacionSi='".$publicacionSi."'");
                
                echo !empty($sqlEliminar) ? "Se ha borrado correctamente" : "<span>No se ha borrado.</span>"; 
            } elseif(!$gustaSi and !$gustaNo) {
                $sqlInsertar = $GLOBALS["base"]->conexion-> 
                    query("INSERT INTO `Gusta`(`usuarioSi`, `publicacionSi`, `fechaSiIniciada`) "
                        . "VALUES ('".$_SESSION['johnDoe']."', '".$publicacionSi."', NOW())");  
                
                echo !empty($sqlInsertar) ? "Creado con exito." : "<span>No se ha creado.</span>";

                $acualizar = $GLOBALS["base"]->conexion-> 
                query("UPDATE `Publicaciones` SET `gustaSi`= '".($gustaSiTotal + 1)."' "
                    . "WHERE id = '".$publicacionSi."'");  

                echo !empty($acualizar) ? "Gusta Si acutalizado." : "<span>Gusta Si no actualizado.</span>";
            }
            
        } else {
            echo 'Se ha producido un error';
        }
    }
} 
      
$ejecutarGustaSi  = new GustaSi();
$gustaSi  = $ejecutarGustaSi->si();
?>