<html>
<head>
    <title>Chat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../front-css/red-social/header.css">
    <!--<link rel="stylesheet" href="../../../front-css/red-social/perfil/perfil.css"/>-->
    <!--<link rel="stylesheet" href="../../../front-css/red-social/perfil/nav.css"/>-->
    <!--<link rel="stylesheet" href="../../../front-css/red-social/perfil/editar.css"/>-->
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
                <input type="search" name="buscar" id="buscar" placeholder="Buscar gente...">
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
            <section class="dropdown" style="z-index: 9;">
                <img src="../../../front-multimedia/red-social/imagen/mist.jpg" class="n-img-portada-header"alt="alt"/>
                <img src="../../../front-multimedia/red-social/imagen/firefoxos.png" class="n-img-perfil-header" onclick="headerNav()" alt="alt"/>
            </section>
        </section>
    </header>
    <div id="n-header-nav" class="n-header-nav-contenedor">
        <a href="../../front/red_social/perfil/editar.php">Editar</a>
        <a href="#">Salir</a>
    </div>
    <nav></nav>
    <aside></aside>
    <main></main>
    <section></section>
    <article></article>
    <footer></footer>
<script src="../../../show/red-social/header.js" async=""></script>
<script src=""></script>
</body>
</html>
