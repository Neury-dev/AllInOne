<?php
require_once '../Conexion.php';

class Publicacion2 {
    private $sql;
    private $resultado;

    public function
    publicada() {
        $this->sql = $GLOBALS["base"]->conexion->query("SELECT * FROM `Publicaciones` ORDER BY id DESC");
        $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
        
        if (empty($this->resultado)) { echo 'No hay publicaciones.'; }
        
        foreach ($this->resultado as $valor) {
            $this->sql = $GLOBALS["base"]->conexion->query("SELECT nombre, foto FROM `Usuarios` WHERE id = '".$valor["idUsuario"]."'");
            $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
            
            foreach ($this->resultado as $usuario) {
                $this->sql = $GLOBALS["base"]->conexion->query("SELECT imagen FROM `Imagenes` WHERE idPublicacion = '".$valor["id"]."'");
                $this->resultado = $this->sql->fetch_all(MYSQLI_ASSOC);
            
                foreach ($this->resultado as $imagen) {   
                     $fecha = DateTime::createFromFormat('Y-m-d H:i:s', $valor['fecha']);
?>
                    <article>
                        <section class="articulo-head">
                            <section>
                                <img src="../../front-multimedia/red-social/imagen/<?php echo $usuario["foto"]; ?>" class="foto" alt="alt"/>
                                <span class=""><?php echo $fecha->format('d M Y'); ?>, Por</span>
                                <h2><?php echo $usuario["nombre"]; ?></h2>
                            </section>  
                            <section>
                                <span class=""><?php // echo $fecha->format('d M Y'); ?>
                                </span> <button><i class='fas fa-ellipsis-v'></i></button>
                            </section>
                        </section>
                        <hr>
                        <section class="articulo-body">
                            <p><?php echo $valor["publicacion"]; ?></p>
                            <img src="../../front-multimedia/red-social/imagen/<?php echo $imagen["imagen"]; ?>" alt="" style="width: 100%;"/>
                        </section>
                        <hr>
                        <section class="articulo-footer">
                            <section><button><i class='fas fa-star'></i></button></section><section><span class="">100</span></section>
                            <section><button><i class='fas fa-frog'></i></button></section><section><span class="">100</span></section>
                            <section><button><i class='fas fa-comments'></i></button></section><section><span class="">100</span></section>
                            <section><button><i class='fas fa-share'></i></button></section><section><span class="">100</span></section>
                        </section>
                    </article>
<?php
                }
            }
        }
    }
}
$publicacion    = new Publicacion2();
$publicada      = $publicacion->publicada();
?>
