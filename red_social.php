<html>
    <head>
        <title>Red Social</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="front-css/red-social/red-social.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <style>
     
        </style>
</head>
<body>
    <section class="n-form-contenedor">
        <section class="fila">
            <header>
                <h1><a href="http://localhost/AllInOne/index.php">AllInOne</a></h1>
                <p class="resultado"></p>
            </header>
            <section class="linea">
                <span>or</span>
            </section>
            <section class="columna">
<!--                    <section class="hide-md-lg">
                    <p>Or sign in manually:</p>
                </section>-->
                <form action="sql/red-social/Iniciar.php" method="POST" autocomplete="">
                    <h2>Iniciar</h2>
                    <section class="input-contenedor">
                        <input type="email" name="correo" placeholder="Correo" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" oninvalid="Globales.validarCorreo()">
                    </section>
                    <section class="input-contenedor">
                        <input type="password" name="codigo" placeholder="Contraseña" required="">
                    </section>
                    <button type="submit" name="iniciar">Iniciar</button>
                </form>
            </section>
            <section class="columna">
                <form action="sql/red-social/Registrar.php" method="POST" autocomplete=""> 
                    <h2>Registrarse</h2>
                    <section class="input-contenedor">
                        <i class="fas fa-envelope-open-text"></i>
                        <input type="email" name="correo" placeholder="Correo" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" oninvalid="Globales.validarCorreo()">
                    </section>
                    <section class="input-contenedor">
                        <i class="fas fa-key"></i>
                        <input type="password" name="codigo" placeholder="Contraseña" required="">
                    </section>
                    <button type="submit" name="registrar">Registrarse</button>
                </form>
            </section>
        </section>
    </section>
<!--    <section class="bottom-container">
        <section class="fila">
            <section class="columna">
                <a href="#" style="color:white" class="btn">Sign up</a>
            </section>
            <section class="columna">
                <a href="#" style="color:white" class="btn">Forgot password?</a>
            </section>
        </section>
    </section>-->
<script src="show/globales.js"></script>
</body>
</html>
