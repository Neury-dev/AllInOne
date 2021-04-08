<?php
require_once 'conexion.php';

class Historial extends Conexion {
    private $mySQLi;
    private $resultado;
    private $buscar = null;

    public function 
    infoDeHistorial() {
        if(isset($_REQUEST["nSearch"]) && !empty($_REQUEST["nSearch"])) {
            $this->buscar = htmlspecialchars($_REQUEST["nSearch"]);

//            $this->mySQLi = $this->conexion->query("SELECT * FROM nHistorial WHERE "
//                . "nID LIKE '%$this->buscar%' OR nFecha LIKE '%$this->buscar%' OR "
//                . "nSorteo LIKE '%$this->buscar%' OR nLoto LIKE '%$this->buscar%' OR "
//                . "nLotoMas LIKE '%$this->buscar%' OR nSupermas LIKE '%$this->buscar%' ORDER BY nID DESC LIMIT 100");
            $this->mySQLi = $this->conexion->query("SELECT * FROM nHistorial "
                . "WHERE nLoto LIKE '%$this->buscar%' ORDER BY nID DESC");
            $this->resultado = $this->mySQLi->fetch_all(MYSQLI_ASSOC);

            if(empty($this->resultado)) {
                echo "<p>No hay resultado de: <span style='color: red;'>".$_GET["nSearch"]."</span></p>";   
            }
            return $this->resultado;
        } else {
            $this->mySQLi = $this->conexion->query("SELECT * FROM nHistorial ORDER BY nID DESC LIMIT 100");
            $this->resultado = $this->mySQLi->fetch_all(MYSQLI_ASSOC);
            return $this->resultado;
        }
    }
}
?>
<table>
    <tr>
        <th width="7.801418439%" >ID</th>
        <th width="21.27659574%">Fecha</th>
        <th width="19.148936166">Sorteo</th>
        <th width="36.170212758%">Loto</th>
        <th width="7.801418439%">LotoMas</th>
        <th width="7.801418439%">SuperMas</th>
    </tr>
<?php
    $historialObject = new Historial();
    $infoDeHistorialObject = $historialObject->infoDeHistorial();

    foreach ($infoDeHistorialObject as $datoDeHistorial) { 
?>
    <tr>
        <td colspan="1" style="text-align: right;"><?php    echo $datoDeHistorial["nID"]; ?></td>
        <td colspan="1" style="text-align: center;"><?php   echo $datoDeHistorial["nFecha"]; ?></td>                
        <td colspan="1" style="text-align: right;"><?php    echo $datoDeHistorial["nSorteo"]; ?></td>              
        <td colspan="1" style="text-align: center;"><?php   echo $datoDeHistorial["nLoto"]; ?></td>             
        <td colspan="1" style="text-align: center;"><?php   echo $datoDeHistorial["nLotoMas"]; ?></td>
        <td colspan="1" style="text-align: center;"><?php   echo $datoDeHistorial["nSuperMas"]; ?></td>
    </tr>
<?php
    }                
?>  
</table>