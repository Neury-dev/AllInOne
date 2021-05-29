<?php require_once '../../../s/red_social/s/SesionIniciada.php'; ?>
<html>
<head>
    <title>AllInOne | Red Social | Edición</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/AllInOne/i_css/i/root.css">
    <link rel="stylesheet" href="../../../i_css/red_social/header.css">
    <link rel="stylesheet" href="../../../i_css/red_social/perfil/perfil.css"/>
    <link rel="stylesheet" href="../../../i_css/red_social/perfil/nav.css"/>
    <link rel="stylesheet" href="../../../i_css/red_social/perfil/editar.css"/>
    <!-- Iconos -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<!------------------------------------------------------------------------------ 
header
------------------------------------------------------------------------------->
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
                <img src="../../../i_img/red_social/i/mist.jpg" class="n-img-portada-header"alt="alt"/>
                <img src="../../../i_img/red_social/i/firefoxos.png" class="n-img-perfil-header" onclick="headerNav()" alt="alt"/>
            </section>
        </section>
    </header>
    <div id="n-header-nav" class="n-header-nav-contenedor">
        <a href="../perfil.php">Perfil</a>
        <a href="">Editar</a>
        <a href="../../../s/CerrarSesion.php">Salir</a>
    </div>
    <section class="n-grid">
<!------------------------------------------------------------------------------ 
main
------------------------------------------------------------------------------->
        <section class="area-1">
            <main>
                <img src="../../../i_img/red_social/i/app.jpg" class="portada" alt="alt"/>
                <section class="contenedor">
                    <img class="foto" alt="alt"/>
                    <!--<h2>Neury E. Aguasvivas L.</h2>-->
<!--                    <section class="perfil-nav">
                        <button><i class='fas fa-user-friends'></i></button>
                        <button><i class='fas fa-comments'></i></button>
                    </section>-->
                </section>
            </main>
        </section>
<!------------------------------------------------------------------------------ 
nav
------------------------------------------------------------------------------->
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
<!------------------------------------------------------------------------------ 
Edición del perfil
------------------------------------------------------------------------------->
        <section class="area-3">
            <section>
                <h5 class="titulo">Foto y Portada</h5>
                <form action="" method="POST" name="form" id="form" enctype="multipart/form-data">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                    <label for="portada">Portada</label>
                    <input type="file" name="portada" id="portada">
                    <button type="submit" name="editar" id="editar" value="Editar">Editar Tu Figura</button>
                </form>
            </section>
            <section>
                <h5 class="titulo">Intereses</h5>
                <form action="" method="POST" name="form" id="form">
                    <label for="intereses" hidden="">Intereses</label>
                    <select name="intereses" id="intereses">
                        <option value="">Escoger interes</option>
                    </select>
                    <button type="submit" name="interes" id="interes" value="Interes">Escoger Intereses</button>
                </form>
            </section>
            <section>
                <h5 class="titulo">Datos</h5>
                <form action="" method="POST" name="form" id="form">
                    <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingresar nombre...">
                    <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" placeholder="Ingresar pellido...">
                    <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" disabled="">
                    <label for="numero">Celular</label>
                        <input type="tel" name="numero" id="numero" placeholder="Ingresar numero...">
                    <label for="estado">Genero</label>
                    <select name="genero" id="genero">
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                    </select>
                    <label for="nacimiento">Cumpleaños</label>
                        <input type="date" name="nacimiento" id="nacimiento">
                    <label for="pais">País</label>
                    <select name="pais" id="pais">
                        <option value="">Escoger país</option>
                    </select>
                    <button type="submit" name="editar" id="editar" value="Editar">Editar Datos</button>
                </form>
            </section>
            <section>
                <h5 class="titulo">Contraseña</h5>
                <form action="" method="POST" name="form" id="form">
                    <label for="codigo">Contraseña antigua</label>
                        <input type="file" name="codigo" id="codigo">
                    <label for="codigo-nuevo">Contraseña nueva</label>
                        <input type="file" name="codigo-nuevo" id="codigo-nuevo">
                    <button type="submit" name="editar" id="editar" value="Editar">Editar Contraseña</button>
                </form>
            </section>
        </section>
<!------------------------------------------------------------------------------ 
Datos del perfil
------------------------------------------------------------------------------->
        <section class="area-4">
            <section class="sesion-1">
                <h2 class="nombre titulo"></h2>
                <p class="nacimiento"></p>
                <p class="correo"></p>
                <p class="numero"></p>
                <p class="sexo"></p>
                <p class="estado"></p>
                <p class="pais"></p>
                <p class="ciudad"></p>
            </section>
            <section class="sesion-2">
                <h4 class="titulo">Intereses</h4>
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
                <h4 class="titulo">Otros</h4>
                <p>text</p>
                <p>text</p>
                <p>text</p>
                <p>text</p>
                <p>text</p>
                <p>text</p>
            </section>
        </section>
    </section>
<script src="../../../l/red_social/i/header.js" async=""></script>
<script src="../../../l/red_social/l/perfil/perfil.js" async=""></script>
<script src="../../../l/red_social/l/perfil/edicion.js" defer=""></script>
<script>
   

</script>
</body>
</html>
