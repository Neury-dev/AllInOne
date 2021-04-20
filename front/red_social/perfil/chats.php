<html>
<head>
    <title>Chat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../front-css/red-social/header.css">
    <link rel="stylesheet" href="../../../front-css/red-social/perfil/chats.css"/>
    <!--<link rel="stylesheet" href="../../../front-css/red-social/perfil/nav.css"/>-->
    <!--<link rel="stylesheet" href="../../../front-css/red-social/perfil/editar.css"/>-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url("http://localhost/AllInOne/front-css/root.css");
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif;}
.w3-bar-block .w3-bar-item{padding:16px}
</style>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
<!-- 
    header
-->
<!--    <header id="n-header" class="n-grid-header">
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
                <a href="javascript:void(0);" id="n-icono-mediano" class="n-icono-mediano" onclick="mediano()">&#9776;</a>
            </section>
            <section class="n-header-minimo-oculto">
                <section class="n-header-minimo" id="n-header-minimo">
                    <a href="historial.php">Historial</a>
                    <a href="insertar.php">Insertar</a>
                    <a href="estadisticas.php">Estadisticas</a>
                </section>
                <a href="javascript:void(0);" class="n-icono-minimo" onclick="header()">&#9776;</a>
            </section>
            <a href="javascript:void(0);" class="n-icono-minimo n-header-maximo-oculto" onclick="header()">&#9776;</a>
            <section class="dropdown" style="z-index: 9;">
                <img src="../../../front-multimedia/red-social/imagen/mist.jpg" class="n-img-portada-header"alt="alt"/>
                <img src="../../../front-multimedia/red-social/imagen/firefoxos.png" class="n-img-perfil-header" onclick="headerNav()" alt="alt"/>
            </section>
        </section>
    </header>
    <div id="n-header-nav" class="n-header-nav-contenedor">
        <a href="../../front/red_social/perfil/editar.php">Editar</a>
        <a href="#">Salir</a>
    </div>-->
<!--    <nav></nav>
    <aside></aside>
    <main></main>
    <section></section>
    <article></article>
    <footer></footer>-->
<!-- 
    Chats 
-->
<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="https://www.w3schools.com/images/w3schools.png" style="width:60%;"></a>
    <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
       class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
    <div id="" class="w3-animate-left">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Borge');w3_close();" id="firstTab">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="/w3images/avatar3.png" style="width:15%;"><span class="w3-opacity w3-large">Borge Refsnes</span>
                <h6>Subject: Remember Me</h6>
                <p>Hello, i just wanted to let you know that i'll be home at...</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');w3_close();">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="/w3images/avatar5.png" style="width:15%;"><span class="w3-opacity w3-large">Jane Doe</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');w3_close();">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="/w3images/avatar2.png" style="width:15%;"><span class="w3-opacity w3-large">John Doe</span>
                <p>Welcome!</p>
            </div>
        </a>
    </div>
</nav>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<!-- Page content -->
<div class="w3-main" style="margin-left:320px;">
    <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-top" onclick="w3_open()"></i>
    <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

    <div id="Borge" class="w3-container person" style="margin-top: 100px;">
        
        <section class="chat">
            
        </section>
        <section>
             <form action="" method="POST" name="chat" id="chat" class="form-container">
                <!--<label for="mensaje"><b>Mensaje</b></label>-->
                <textarea rows="3" placeholder="Mensaje.." name="mensaje" required></textarea>
                <!--<input type="hidden" id="usuario" name="usuario">-->
                <button type="submit" name="chat-boton" class="btn send" onclick="Chat.mensaje()">Send</button>
                <!--<button type="button" class="btn cancel" onclick="closeForm()">Close</button>-->
            </form>
        </section>
    </div>
    <div id="Jane" class="w3-container person">
        <br>
        <img class="w3-round w3-animate-top" src="/w3images/avatar5.png" style="width:20%;">
        <h5 class="w3-opacity">Subject: None</h5>
        <h4><i class="fa fa-clock-o"></i> From Jane Doe, Sep 25, 2015.</h4>
        <a class="w3-button">Reply<i class="w3-padding fa fa-mail-reply"></i></a>
        <a class="w3-button">Forward<i class="w3-padding fa fa-arrow-right"></i></a>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Forever yours,<br>Jane</p>
    </div>

    <div id="John" class="w3-container person">
        <br>
        <img class="w3-round w3-animate-top" src="/w3images/avatar2.png" style="width:20%;">
        <h5 class="w3-opacity">Subject: None</h5>
        <h4><i class="fa fa-clock-o"></i> From John Doe, Sep 23, 2015.</h4>
        <a class="w3-button">Reply<i class="w3-padding fa fa-mail-reply"></i></a>
        <a class="w3-button">Forward<i class="w3-padding fa fa-arrow-right"></i></a>
        <hr>
        <p>Welcome.</p>
        <p>That's it!</p>
    </div>

</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

openMail("Borge")
function openMail(personName) {
    var i;
    var x = document.getElementsByClassName("person");
  
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
  
    x = document.getElementsByClassName("test");
  
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" w3-light-grey", "");
    }
  
    document.getElementById(personName).style.display = "block";
    event.currentTarget.className += " w3-light-grey";
}
</script>

<script>
var openTab = document.getElementById("firstTab");
openTab.click();
</script>
<script src="../../../show/red-social/header.js" async=""></script>
<script src="../../../show/red-social/adaptador/chats.js"></script>
</body>
</html>
