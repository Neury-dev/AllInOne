<?php
session_start();
require_once "../../Conexion.php";

class EditarFotos {
    private  $sql;
    
    public function 
    deEdicion() {
        $foto       = $_FILES['foto']['tmp_name'];
        $portada    = $_FILES['portada']['tmp_name'];
        $editar     = $_POST["editar-fotos"];   
        
        if(isset($editar)) {
            $fotoTipo       = exif_imagetype($foto);
            $portadaTipo    = exif_imagetype($portada);
            
            if ($fotoTipo == IMAGETYPE_PNG or $fotoTipo == IMAGETYPE_JPEG or $fotoTipo == IMAGETYPE_BMP) {
                if (is_uploaded_file($foto)) {
                    $ext        = ".jpg";
                    $namefinal  = trim($_FILES['imagen']['name']);
                    $namefinal  = str_replace(" ", "", $namefinal);
                    $aleatorio  = substr(strtoupper(md5(microtime(true))), 0,6);
                    $namefinal  = "ID-"."-NAME-".$aleatorio;

                    if ($fotoTipo == IMAGETYPE_PNG) {
                        $foto = imagecreatefrompng($foto);
                        imagejpeg($foto, "../../../i_img/red_social/l/".$namefinal.$ext, 100);

                        $nuevaimagen = "../../../i_img/red_social/l/".$namefinal.$ext;
                    } else {
                        $nuevaimagen = $foto;
                    }

                    $original   = imagecreatefromjpeg($nuevaimagen);
                    $max_ancho  = 1080; $max_alto = 1080;
                    list($ancho, $alto) = getimagesize($nuevaimagen);

                    $x_ratio = $max_ancho / $ancho;
                    $y_ratio = $max_alto / $alto;

                    if(($ancho <= $max_ancho) and ($alto <= $max_alto)) {
                        $ancho_final    = $ancho;
                        $alto_final     = $alto;
                    } elseif (($x_ratio * $alto) < $max_alto) {
                        $alto_final = ceil($x_ratio * $alto);
                        $ncho_final = $max_ancho;
                    } else {
                        $ancho_final = ceil($y_ratio * $ancho);
                        $alto_final = $max_alto;
                    }

                    imagedestroy($original);

                    if (is_uploaded_file($foto)) { 
                        $destino =  "../../../i_img/red_social/l/".$namefinal.$ext;
                        copy($foto, $destino);
                    } 

                    if ($foto) {
                        $this->sql = $GLOBALS["base"]->conexion-> 
                            query("UPDATE `Usuarios` SET "
                                . "`foto`='$nombre'' WHERE id = '".$_SESSION['johnDoe']."'"
                            . ""); 

                        echo !empty($this->sql) ? "Foto hecho." : "<span>Foto no hecho.</span>";
                    } else if ($portada) {
                        $this->sql = $GLOBALS["base"]->conexion-> 
                            query("UPDATE `Usuarios` SET "
                                . "`portada`='$apellido' WHERE id = '".$_SESSION['johnDoe']."'"
                            . ""); 

                        echo !empty($this->sql) ? "Portada hecho." : "<span>Portada no hecho.</span>";
                    } else if ($foto and $portada) {
                        $this->sql = $GLOBALS["base"]->conexion-> 
                            query("UPDATE `Usuarios` SET "
                                . "`foto`='$nombre',"
                                . "`portada`='$apellido' WHERE id = '".$_SESSION['johnDoe']."'"
                            . ""); 

                        echo !empty($this->sql) ? "Hecho." : "<span>No hecho.</span>";
                    } else {
                        echo "<span>No se actualizado.<span>";
                    }
                }
            }
        }
    }
}
$ejecutarEditarFotos = new EditarFotos();
$editarFotos = $ejecutarEditarFotos->deEdicion();