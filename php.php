<?php

//class Publicacion {
//    //put your code here
//}
if(isset($_POST["submit"])) {
    require_once '../Conexion.php';
    
    $imagen         = $_FILES['file-input']['tmp_name'];
    $imagen_tipo    = exif_imagetype($_FILES['file-input']['tmp_name']);
    
    if ($imagen_tipo == IMAGETYPE_PNG or $imagen_tipo == IMAGETYPE_JPEG or $imagen_tipo == IMAGETYPE_BMP) {
        
        $descripcion = $_POST["descripcion"];
        
        if (is_uploaded_file($_FILES['file-input']['tmp_name'])) {
            
            $result     = $mysqli->query("SHOW TABLE STATUS WHERE Name = imagenes");
            $data       = $result->fetch_assoc();
            $next_id    = $data['Auto_increment'];
            
            $ext        = ".jpg";
            $namefinal  = trim($_FILES['file-input']['name']);
            $namefinal  = str_replace(" ", "", $namefinal);
            $aleatorio  = substr(strtoupper(md5(microtime(true))), 0,6);
            $namefinal  = "ID-".$next_id."-NAME-".$aleatorio;
            
            if ($imagen_tipo == IMAGETYPE_PNG) {
                $imagen = imagecreatefrompng($imagen);
                imagejpeg($imagen, "../../front-multimedia/red-social/imagen/".$namefinal.$ext, 100);
                
                $nuevaimagen = "../../front-multimedia/red-social/imagen/".$namefinal.$ext;
            }
            
            else {
                $nuevaimagen = $imagen;
            }
            
            $original   = imagecreatefromjpeg($nuevaimagen);
            $max_ancho  = 1080; $max_alto = 1080;
            list($ancho, $alto) = getimagesize($nuevaimagen);
            
            $x_ratio = $max_ancho / $ancho;
            $y_ratio = $max_alto / $alto;
            
            if(($ancho <= $max_ancho) and ($alto <= $max_alto)) {
                $ancho_final    = $ancho;
                $alto_final     = $alto;
            }
            elseif (($x_ratio * $alto) < $max_alto) {
                $alto_final = ceil($x_ratio * $alto);
                $ncho_final = $max_ancho;
            }
            else {
                $ancho_final = ceil($y_ratio * $ancho);
                $alto_final = $max_alto;
            }
            
//            $lienzo = 
            imagedestroy($original);
            
            if ($_FILES['file-input']['tmp_name']) {
                
            }
        }
    }
}