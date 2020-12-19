<?php
require_once '../Conexion.php';
//require_once '../../sql/tienda/Carrito.php';
//require_once 'sql/Conexion.php';

class Articulos {

    private $sql;
    private $resultado;

    public function
    todos() {
        $this->sql = $GLOBALS["base"]->conexion->query("SELECT * FROM Articulos ORDER BY id DESC");
        $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);

        if (empty($this->resultado)) {
            echo 'No hay articulos.';
        }

        return $this->resultado;
    }

}

$articulos = new Articulos();
$informacion = $articulos->todos();

foreach ($informacion as $dato) {
    ?>
<section>
    <img src="multi/tienda/img/<?php echo $dato["imagen"]; ?>" alt="" />
    <div class="n-articulo-contenedor">
        <h3 class="n-marca"><?php echo $dato["marca"]?></h3>
        <p class="n-nombre"><?php echo $dato["nombre"]?></p>
        <p class="n-detalles">
            <a href="front/tienda/detalles.php?id=<?php echo $dato['id']; ?>&marca=<?php echo $dato["marca"]?>">
                Detalles <i class='fas fa-cart-plus'></i>
            </a>
        </p>
<!--        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
        method="POST" 
        name="articulo" 
        id="escoger-form"
        class="escoger-form"
        >-->
        <form action="http://localhost/AllInOne/index.php" method="POST" name="articulo" id="escoger-form">
        <!--<form method="POST">-->
            <input type="hidden" name="id" value="<?php echo $dato["id"]; ?>">
            <input type="hidden" name="marca" id="marca" value="<?php echo $dato["marca"]; ?>">
            <input type="hidden" name="nombre" value="<?php echo $dato["nombre"]; ?>">
            <input type="hidden" name="color" value="<?php echo $dato["color"]; ?>">
            <input type="hidden" name="talla" value="<?php echo $dato["talla"]; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $dato["descripcion"]; ?>">
            <label for="mas" hidden="">
                <input type="number" name="mas" id="mas" value="1">
            </label>
            <input type="hidden" name="cantidad" value="1">
            <input type="hidden" name="precio" value="<?php echo $dato["precio"]; ?>">
            <button type="submit" id="n-escoger" name="escoger" value="Escoger">
                Escoger <i class="fa fa-shopping-cart"></i>
            </button>
                
<!--            <button type="submit" id="n-escoger" name="escoger" value="Escoger"
                formaction="sql/tienda/Carrito.php" formmethod="POST"
            >Escoger <i class="fa fa-shopping-cart"></i></button>-->
        </form>
    </div> 
</section>
<?php
}              
?>


