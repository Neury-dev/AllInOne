<?php
require_once '../../sql/sistema-JSON/EnPHP.php';

if (!empty($_SESSION["CARRITO"])) {
    foreach ($_SESSION["CARRITO"] as $indiceDeSesion => $datoDeSesion) {
        ?> 
            <tr>
                <td><?php echo $datoDeSesion["ID"]; ?></td>
                <td><?php echo $datoDeSesion["FECHA"]; ?></td>
                <td><?php echo $datoDeSesion["FECHA"]; ?></td>
                <td><?php echo $datoDeSesion["MARCA"]; ?></td>
                <td><?php echo $datoDeSesion["NOMBRE"]; ?></td>
                <td><?php echo $datoDeSesion["PRECIO"]; ?></td>
                <td>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
                    name="actualizar<?php echo $datoDeSesion["ID"]; ?>" id="actualizar<?php echo $datoDeSesion["ID"]; ?>">
                        <input type="hidden" name="id" value="<?php echo $datoDeSesion["ID"]; ?>">
                        <button type="submit" name="crud" value="Actualizar" onclick="actualizar(<?php echo $datoDeSesion["ID"]; ?>)">
                            Actualizar
                        </button>
                    </form>
                </td> 
                <td>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" 
                    name="borrar<?php echo $datoDeSesion["ID"]; ?>" id="borrar<?php echo $datoDeSesion["ID"]; ?>">
                        <input type="hidden" name="id" value="<?php echo $datoDeSesion["ID"]; ?>">
                        <button type="submit" name="crud" value="Borrar" onclick="borrar(<?php echo $datoDeSesion["ID"]; ?>)">
                            Borrar
                        </button>
                    </form>
                </td>  
            </tr>
        <?php
       
    }
} else {
    ?>  
    <!--<p>No has escogido ningun artículos.</p>-->
    <?php
}
?>     