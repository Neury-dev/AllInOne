<html>
<head>
    <title>Neury</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv="last-modified" content="Thu, 18 Nov 2020 19:11:42 GMT">
    <link rel="stylesheet" href="i_css/index.css">
    <!-- Iconos: JavaScript-->
    <!--<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
    <style>
        .mySlides {display: none;}
        /*.mySlides > img {vertical-align: middle;}*/    

.area-3 > img.slide-1 {
    float: left;
    width: 200px;
    height: 200px;
    shape-outside: url(i_svg/blob-haikei-1.svg);
    clip-path: url(i_svg/blob-haikei-1.svg);
}
.area-3 > img.slide-2 {
    float: left;
    width: 200px;
    height: 200px;
    shape-outside: url(i_svg/blob-haikei-2.svg);
    clip-path: url(i_svg/blob-haikei-2.svg);
}
.area-3 > img.slide-3 {
    float: left;
    width: 200px;
    height: 200px;
    shape-outside: url(i_svg/blob-haikei-3.svg);
    clip-path: url(i_svg/blob-haikei-3.svg);
}
    </style>
</head>
<body>
    <!--<img src="i_svg/body.svg" alt="svg" class="n-svg-body">-->
<img src="i_svg/cool-background.svg" alt="svg" class="n-svg-1">
<section class="n-grid">
<section class="area-1">  
    <header>
        <P>¡Hola!</p>
        <h1>Neury</h1>
        <h2>Full Stack Developer</h2> 
        <P>neury.eleasar@gmail.com</p>
    </header>
</section>
<section class="area-2">
    <main>
        <div class="circulo">
            <img src="i_img/foto-avatar.png" alt="foto" class="foto">
        </div>
        <h3>Lenguajes y Herramientas</h3>
            <h4>Frontend developer</h4>
                <p>HTML, CSS, JavaScript, Java...</p>
            <h4>Backend developer</h4>
                <p>PHP, JavaScript, Java, JSON, SQL, NoSQL...</p>
            <h4>Tools developer</h4>
                <p>Apache NetBeans...</p>
    </main>
</section>
<section class="area-3">
    <img src="i_svg/desarrollos.svg" alt="svg" class="svg-desarrollos" width="200" height="200">
   
<!--            <img src="i_svg/blob-haikei-1.svg" class="mySlides slide-1">
       
            <img src="i_svg/blob-haikei-2.svg" class="mySlides slide-2">
       
            <img src="i_svg/blob-haikei-3.svg" class="mySlides slide-3">-->
    
    <h3>Desarrollos</h3>
    <article>
        <h4>Loto</h4>
        <p>04/07/2020 - 13/09/2020</p>
        <a href="loto.php">http://localhost/AllInOne/loto.php</a>
    </article>
    <article>
        <h4>Tienda</h4>
        <p>14/09/2020 - 29/11/2020</p>
        <a href="tienda.php">http://localhost/AllInOne/tienda.php</a>
    </article>
    <article>
        <h4>Plantillas de código</h4>
        <p>01/12/2020 - 01/12/2020</p>
        <a href="plantillas_de_codigo.php">http://localhost/AllInOne/plantillas_de_codigo.php</a>
    </article>
    <article>
        <h4>Sistema PHP</h4>
        <p>01/12/2020 - 06/12/2020</p>
        <a href="sistema_PHP.php">http://localhost/AllInOne/sistema_PHP.php</a>
    </article>
    <article>
        <h4>Sistema JSON</h4>
        <p>09/12/2020 - 16/12/2020</p>
        <a href="sistema_JSON.php">http://localhost/AllInOne/sistema_JSON.php</a>
    </article>
    <article>
        <h4>Red Social</h4>
        <p>19/12/2020 - 22/04/2021</p>
        <a href="red_social.php">http://localhost/AllInOne/red_social.php</a>
    </article>
</section>
<section class="area-4">
    <aside>
        aside
    </aside>
</section>
<section class="area-5">
    <footer>
       <!--<img src="i_svg/emoji.svg" alt="svg" class="">--> 
    </footer>
</section>
</section>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
//  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1;}    
//  for (i = 0; i < dots.length; i++) {
////    dots[i].className = dots[i].className.replace(" active", "");
//  }
  slides[slideIndex-1].style.display = "block";  
//  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>