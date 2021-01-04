<?php require_once '../../sql/red-social/SesionIniciada.php'; ?>
<html>
<head>
    <title>Usuarios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../front-css/red-social/header.css">
    <link rel="stylesheet" href="../../front-css/red-social/nav.css"/>
    <link rel="stylesheet" href="../../front-css/red-social/usuarios.css"/>
    <link rel="stylesheet" href="../../front-css/red-social/aside.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        @import url("http://localhost/AllInOne/front-css/root.css");

        
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
            <article>
                <!--usuarios-->
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
<script src="../../show/red-social/adaptador/usuarios.js" defer=""></script>
</body>
</html> 
