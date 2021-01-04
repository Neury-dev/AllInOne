<?php
//require_once "../../../sql/Conexion.php";
require_once "../Conexion.php";

session_start();

class Usuario {
    public function 
    visitado() {
        if(isset($_SESSION["usuario"])) {
            $sql = $GLOBALS["base"]->conexion->query("SELECT * FROM `Usuarios` WHERE id = '".$_SESSION["usuario"]."'");
            $resultado = $sql->fetch_all(MYSQLI_ASSOC);

            exit(json_encode($resultado)); 
//            return $resultado;
        }
//        exit(json_encode($resultado)); 
    }
//    public function 
//    visitado() {
//        $sql = $GLOBALS["base"]->conexion->query("SELECT * FROM `Usuarios` WHERE id = '".$_GET["id"]."'");
//        $resultado = $sql->fetch_all(MYSQLI_ASSOC);
//        
//        return $resultado;
////        exit(json_encode($resultado)); 
//    }
}
$usuario    = new Usuario();
$visitado   = $usuario->visitado();

//foreach ($visitado as $perfil) {
?>
<!--    <main>
        <img src="../../../front-multimedia/red-social/imagen/app.jpg" class="portada" alt="alt"/>
        <section class="contenedor">
            <img src="../../../front-multimedia/red-social/imagen/<?php echo $perfil["foto"]?>" class="foto" alt=""/>
            <h2>Neury E. Aguasvivas L.</h2>
            <section class="perfil-nav">
                <button><i class='fas fa-user-friends'></i></button>
                <button><i class='fas fa-comments'></i></button>
            </section>
        </section>
    </main>-->
<?php
//}
?>