<html>
<head>
    <title>Editar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../front-css/red-social/header.css">
    <link rel="stylesheet" href="../../../front-css/red-social/perfil/perfil.css"/>
    <link rel="stylesheet" href="../../../front-css/red-social/perfil/nav.css"/>
    <link rel="stylesheet" href="../../../front-css/red-social/perfil/editar.css"/>
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
    <section class="n-grid">
<!--
    main 
-->
        <section class="area-1">
            <main>
                <img src="../../../front-multimedia/red-social/imagen/app.jpg" class="portada" alt="alt"/>
                <section class="contenedor">
                    <img src="../../../front-multimedia/red-social/imagen/avatar3.png" class="foto" alt="alt"/>
                    <!--<h2>Neury E. Aguasvivas L.</h2>-->
                    <section class="perfil-nav">
                        <button><i class='fas fa-user-friends'></i></button>
                        <button><i class='fas fa-comments'></i></button>
                    </section>
                </section>
            </main>
        </section>
<!--
    nav 
-->
        <section class="area-2">
            <nav>
                <ul>
                    <li><a href="../perfil.php">Perfil</a></li>
                    <li><a href="#">Amigos</a></li>
                    <li><a href="chat.php">Chat</a></li>
                    <li><a href="fotos.php">Fotos</a></li>
                    <li><a href="#">Audios</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Solicitudes</a></li>
                    <li><a href="#">Visitas</a></li>
                    <li><a href="#">Notificaciones</a></li>
                    <li><a href="#"><i class='fas fa-search'></i></a></li>
                </ul>
            </nav>
        </section>
<!-- 
    Editar
-->
        <section class="area-3">
            <section>
                <h3>Intereses</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" enctype="multipart/form-data">
                    <label for="intereses" hidden="">Intereses</label>
                    <select name="intereses" id="intereses">
                        <option value="">Escoger interes</option>
                    </select>
                    <button type="submit" name="interes" id="interes" value="Interes">Escoger</button>
                </form>
            </section>
            <section>
                <h3>Datos</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form" id="form" enctype="multipart/form-data">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingresar nombre...">
                    
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingresar pellido...">
                    
                    <label for="nacimiento">Cumpleaños</label>
                    <input type="date" name="nacimiento" id="nacimiento">
                    
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" placeholder="Ingresar correo...">
                    
                    <label for="numero">Celular</label>
                    <input type="tel" name="numero" id="numero" placeholder="Ingresar numero...">
                    
<!--                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                    </select>-->

                    <label for="pais">País</label>
                    <select name="pais" id="pais">
                        <option value="">Escoger país</option>
                    </select>
                    
<!--                    <label for="ciudad">Ciudad</label>
                    <select name="ciudad" id="ciudad">
                        <option value="...">...</option>
                        <option value="...">...</option>
                    </select>-->
                    
                    <button type="submit" name="editar" id="editar" value="Editar">Editar</button>
                </form>
            </section>
        </section>
        <section class="area-4">
            <section class="sesion-1">
                <h2>Neury Aguasvivas</h2>
                <p>21/09/1991</p>
                <p>neury@email.com</p>
                <p>809 123 4567</p>
                <p>Soltero</p>
                <p>Republica Dominicana</p>
                <p>Santo Domingo</p>
            </section>
            <section class="sesion-2">
                <h4>Intereses</h4>
                <p>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>text</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>text</span>
                </p>
            </section>
            <section class="sesion-3">
                <h4>Otros</h4>
                <p>text</p>
                <p>text</p>
                <p>text</p>
                <p>text</p>
                <p>text</p>
                <p>text</p>
            </section>
        </section>
    </section>
<script src="../../../show/red-social/header.js" async=""></script>
<script src="../../../show/red-social/perfil/editar.js"></script>
<script>
   

</script>
</body>
</html>
