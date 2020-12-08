<?php
require_once '../../sql/Conexion.php';

if (!empty($_SESSION["CARRITO"])) {
    
    is_numeric($subtotal = NULL);
    
    foreach ($_SESSION["CARRITO"] as $indiceDeSesion => $datoDeSesion) {
        ?> 
        <section class="n-elegido">
            <?php
            $sql = $GLOBALS["base"]->conexion->query("SELECT imagen FROM Articulos WHERE id LIKE '%" . $datoDeSesion["ID"] . "%' ");

            foreach ($sql as $infoImg) {
                ?>
                <section class="area-1">
                    <img src="../../multi/tienda/img/<?php echo $infoImg["imagen"] ?>" alt="" loading="lazy">
                </section>
                <?php
            }
            ?> 
            <section class="area-2">
                <ul>
                    <li>Marca: <span><?php echo $datoDeSesion["MARCA"]; ?></span></li>
                    <li>Nombre: <span><?php echo $datoDeSesion["NOMBRE"]; ?></span></li>
                    <li>Color: <span><?php echo $datoDeSesion["COLOR"]; ?></span></li>
                    <li>Talla: <span><?php echo $datoDeSesion["TALLA"]; ?></span></li>
                    <li>Descripción: <span><?php echo $datoDeSesion["DESCRIPCION"]; ?></span></li>
                    <li>Cantidad: <span><?php echo number_format($datoDeSesion['CANTIDAD'], 0); ?></span></li>
                    <li>Precio: <span><?php echo number_format($datoDeSesion["PRECIO"], 2); ?></span></li>
                    <li>Total: <span><?php echo number_format($datoDeSesion["PRECIO"] * $datoDeSesion["CANTIDAD"], 2); ?></span></li>
                </ul>
            </section>
            <section class="area-3">
                <section>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
                    name="cambiar<?php echo $datoDeSesion["ID"]; ?>" id="cambiar<?php echo $datoDeSesion["ID"]; ?>">
                        <input type="hidden" name="id" value="<?php echo $datoDeSesion["ID"]; ?>">
                        <button type="submit" name="escoger" value="Cambiar" onclick="actualizar(<?php echo $datoDeSesion["ID"]; ?>)">
                            Actualizar
                        </button>
                    </form>
                </section>
                <section>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" 
                    name="devolver<?php echo $datoDeSesion["ID"]; ?>" id="devolver<?php echo $datoDeSesion["ID"]; ?>">
                        <input type="hidden" name="id" value="<?php echo $datoDeSesion["ID"]; ?>">
                        <button type="submit" name="escoger" value="Devolver" onclick="eliminar(<?php echo $datoDeSesion["ID"]; ?>)">
                            Eliminar
                        </button>
                    </form>
                </section>  
            </section>
        </section>
        <?php
        $subtotal = $GLOBALS['base']->conexion->
        real_escape_string($subtotal + ($datoDeSesion["PRECIO"] * $datoDeSesion["CANTIDAD"]));
    }
    require_once '../../sql/tienda/descuento.php';
//    require_once '../../sql/tienda/Descuento.php';
    ?>
    <section class="n-limpiar-mas">
        <p><?php echo $alertaDeDescuento; ?></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="devolver-todo" id="devolver-todo">
            <input type="hidden" name="id" value="<?php echo $datoDeSesion["ID"]; ?>">
            <button type="submit" name="escoger" value="Devolver todo">
                Eliminar todas las eleciones <i style='font-size: 1em;' class='far'>&#xf2ed;</i>
            </button>
        </form>
    </section>
    <section class="n-carrito-resultado">
        <section class="montos">
            <ul class="izquierda">
                <li>Subtotal:</li>
                <li>Impuesto:</li>
                <li>Envío:</li>
                <li>Descuento:</li>
                <li>Total:</li>
            </ul>
            <ul class="derecha">
                <li><?php echo number_format($subtotal, 2); ?></li>
                <li><?php echo number_format($impuesto, 2); ?></li>
                <li><?php echo number_format($envio, 2); ?></li>
                <li><?php echo number_format($descuento, 2); ?></li>
                <li><?php echo number_format($total, 2); ?></li>
            </ul>
        </section>
        <section class="procesar">
            <form action="pagar.php" method="POST">
                <label for="correo">Contacto:</label><br>
                <input type="email" name="correo" placeholder="Ingresar correo" required=""><br>
                <button type="submit" name="nComprar">
                    Proceda a pagar <i style='font-size: 1em;' class='fab'>&#xf1ed;</i></button>
            </form>
        </section>
    </section>
    <?php
} else {
    ?>  
    <p>No has escogido ningun artículos.</p>
    <?php
}
?>