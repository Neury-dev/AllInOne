<?php require_once '../../sql/red-social/SesionIniciada.php'; ?>
<html>
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../front-css/red-social/header.css">
    <link rel="stylesheet" href="../../front-css/red-social/nav.css"/>
    <link rel="stylesheet" href="../../front-css/red-social/main.css"/>
    <!--<link rel="stylesheet" href="../../front-css/red-social/article.css"/>-->
    <link rel="stylesheet" href="../../front-css/red-social/article.css"/>
    <link rel="stylesheet" href="../../front-css/red-social/aside.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
       
    </style>
</head>
<body>
<!-- 
    header
-->
    <header id="n-header" class="n-grid-header">
        <section class="area-1">
            <h1><a href="http://localhost/AllInOne/index.php" style="display: block;">AllInOne</a></h1>
        </section>
        <section class="area-2">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" enctype="multipart/form-data">
                <!--<label for="buscar">Buscar:</label>-->
                <input type="search" name="buscar" id="buscar" placeholder="Buscar gente...">
                <!--            <button type="submit" name="enviar" id="enviar" value="Enviar">Enviar</button>
                            <input type="submit" name="enviar" id="enviar" value="Enviar">-->
            </form>
        </section>
        <section class="area-3">
            <section class="sesion-1">
                <a href="" class="n-header-maximo-oculto"><i class='fas fa-chalkboard-teacher'></i></a>
                <a href="" class="n-header-maximo-oculto"><i class="fas fa-envelope-open"></i></a>
                <a href="" class="n-header-maximo-oculto"><i class="fas fa-bell-slash"></i></a>
            </section>
            <section class="n-header-mediano">
                <section id="n-header-mediano">
                    <a href="" class="n-header-maximo-oculto"><i class="fas fa-envelope-open"></i></a>
                    <a href="" class="n-header-maximo-oculto"><i class="fas fa-bell-slash"></i></a>
                </section>
                <span class="n-header-span" id="n-header-span">
                    <a href="" class="n-header-maximo-oculto"><i class='fas fa-chalkboard-teacher'></i></a>
                    <a href="javascript:void(0);" id="n-icono-mediano" class="n-icono-mediano" onclick="ejecutarHeader.mediano();">&#9776;</a>
                </span>
                <!--<a href="javascript:void(0);" id="n-icono-mediano" class="n-icono-mediano" onclick="mediano()">&#9776;</a>-->
            </section>
<!--            <section class="n-header-minimo-oculto">
                <section class="n-header-minimo" id="n-header-minimo">
                    <a href="historial.php">Historial</a>
                    <a href="insertar.php">Insertar</a>
                    <a href="estadisticas.php">Estadisticas</a>
                </section>
                <a href="javascript:void(0);" class="n-icono-minimo" onclick="header()">&#9776;</a>
            </section>-->
            <!--<a href="javascript:void(0);" class="n-icono-minimo n-header-maximo-oculto" onclick="header()">&#9776;</a>-->
            <section>
                <img src="../../front-multimedia/red-social/imagen/mist.jpg" class="n-img-portada-header"alt="alt"/>
                <img src="../../front-multimedia/red-social/imagen/firefoxos.png" class="n-img-perfil-header" onclick="headerNav()" alt="alt"/>
            </section>
        </section>
    </header>
    <div id="n-header-nav" class="n-header-nav-contenedor">
        <a href="perfil.php">Perfil</a>
        <a href="../../front/red_social/perfil/editar.php">Editar</a>
        <a href="../../sql/CerrarSesion.php">Salir</a>
    </div>
<!-- 
    nav
-->
    <section class="n-grid">
        <section class="area-1">
            <nav>
                <section class="principal">
                    <a href="inicio.php"><i class='fas fa-house-user'></i> <span>Inicio</span></a>
                    <a href="#"><i class='fas fa-search'></i> <span>Buscar</span></a>
                    <a href="usuarios.php"><i class='fas fa-users'></i> <span>Usuarios</span></a>
                    <a href="#"><i class='fas fa-file-alt'></i> <span>Publicaciones</span></a>
                    <a href="#"><i class='fas fa-images'></i> <span>Imagenes</span></a>
                    <a href="#"><i class='fas fa-play'></i> <span>Audios</span></a>
                    <a href="#"><i class='fas fa-video'></i> <span>videos</span></a>
                    
                </section>
                <section class="segundario">
                    <ul>
                        <li><a href="#">Aserca de</a></li>
                        <li><a href="#">Mapa del sitio</a></li>
                        <li><a href="#">Idioma</a></li>
                        <li><a href="#">Otros</a></li>
                    </ul>
                </section>
            </nav>
        </section>
        <section class="area-2">
            <main>
<!--
    - Opción para remplazar el JS.
    https://www.w3schools.com/cssref/sel_target.asp
-->
                <p>Publicar?</p>
                <section class="main-nav">
                    <button class="tablinks" onclick="openCity(event, 'n-articulo')"><i class='fas fa-file-alt'></i></button>
                    <button class="tablinks" onclick="openCity(event, 'n-imagen')"><i class='fas fa-images'></i></button>
                    <button class="tablinks" onclick="openCity(event, 'n-audio')"><i class='fas fa-play'></i></button>
                    <button class="tablinks" onclick="openCity(event, 'n-video')"><i class='fas fa-video'></i></button>
                </section>  
                <div id="n-articulo" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form-articulo" id="form-articulo" enctype="multipart/form-data">
                        <label for="titulo" class="etiqueta">Titulo</label>
                        <input type="text" name="titulo" id="titulo" placeholder="Titulo...">
                        <label for="articulo" class="etiqueta">Articulo</label>
                        <textarea name="articulo" id="articulo" rows="5" cols="10" placeholder="Articulo..."></textarea>
                        <label for="imagen" class="cargar-archivo">Seleccionar Imagen</label>
                        <input type="file" name="imagen" id="imagen" hidden="">
                        <input type="text" disabled="">
                        <button type="submit" name="subir" id="subir" value="Articulo">Subir</button>
                    </form>
                </div>

                <div id="n-imagen" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" enctype="multipart/form-data">
                        <label for="imagen" class="cargar-archivo">Seleccionar Imagen</label>
                        <input type="file" name="imagen" id="imagen" hidden="">
                        <input type="text" disabled="">
                        <button type="submit" name="subir-archivo" id="subir-archivo" value="Imagen">Subir</button>
                    </form>
                </div>
                <div id="n-audio" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" enctype="multipart/form-data">
                        <label for="audio" class="cargar-archivo">Seleccionar Audio</label>
                        <input type="file" name="audio" id="audio" hidden="">
                        <input type="text" disabled="">
                        <button type="submit" name="subir-archivo" id="subir-archivo" value="Audio">Subir</button>
                    </form>
                </div>
                <div id="n-video" class="tabcontent">
                    <span class="topright">&times</span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" enctype="multipart/form-data">
                        <label for="video" class="cargar-archivo">Seleccionar Video</label>
                        <input type="file" name="video" id="video" hidden="">
                        <input type="text" disabled="">
                        <button type="submit" name="subir-archivo" id="subir-archivo" value="Video">Subir</button>
                    </form>
                </div>
            </main>
            <article>
                <section class="publicacion">
<!--                    <section class="articulo-head">
                        <section>
                            <img src="../../front-multimedia/red-social/imagen/mist.jpg" class="portada" alt="alt"/>
                            <section>
                                <img src="../../front-multimedia/red-social/imagen/avatar3.png" class="foto" alt="alt"/>
                                <h2><span>Neury</span><br><span>Aguasvivas</span></h2>
                            </section>
                        </section>  
                        <section>
                            <span class="">1 de enero 2021</span> <button><i class='fas fa-ellipsis-v'></i></button>
                        </section>
                    </section>
                    <hr>
                    <section class="articulo-body">
                        <h3>Articulo</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <img src="../../front-multimedia/red-social/imagen/app.jpg" alt="" style="width: 100%;"/>
                    </section>
                    <hr>
                    <section class="articulo-footer">
                        <section><button><i class='fas fa-thumbs-up'></i></button></section><section><span class="">100</span></section>
                        <section><button><i class='fas fa-thumbs-down'></i></button></section><section><span class="">100</span></section>
                        <section><button><i class='fas fa-comments'></i></button></section><section><span class="">100</span></section>
                        <section><button><i class='fas fa-share'></i></button></section><section><span class="">100</span></section>
                    </section>-->
                </section>
            </article>
        </section>
        <section class="area-3">
            <aside>
                <h4>Solicitudes de amistad</h4>
                <section>
                    <img src="../../front-multimedia/red-social/imagen/avatar3.png" alt="alt"/>
                    <h5>Jonh Doe</h5>
                    <section>
                        <button class="aceptar"><i class='fas fa-user-friends'></i></button>
                        <button class="rechazar"><i class='fas fa-user-slash'></i></button>
                    </section>
                </section>
                <section>
                    <img src="../../front-multimedia/red-social/imagen/avatar3.png" alt="alt"/>
                    <h5>Jonh Doe</h5>
                    <section>
                        <button class="aceptar"><i class='fas fa-user-friends'></i></button>
                        <button class="rechazar"><i class='fas fa-user-slash'></i></button>
                    </section>
                </section>
            </aside>
        </section>
    </section>
<script src="../../show/red-social/header.js" async=""></script>
<script src="../../show/red-social/main.js" defer=""></script>
<script src="../../show/red-social/adaptador/publicacionInicio.js" defer=""></script>
<script src="../../show/red-social/adaptador/publicacionMenuInicio.js" defer=""></script>
</body>
</html> 
