var nombre, apellido, nacimiento, correo, codigo, numero, sexo, estado, pais, ciudad, fecha, foto;

nombre      = document.querySelector(".nombre");
apellido    = document.querySelector(".apellido");
nacimiento  = document.querySelector(".nacimiento");
correo      = document.querySelector(".correo");
codigo      = document.querySelector(".codigo");
numero      = document.querySelector(".numero");
sexo        = document.querySelector(".sexo");
estado      = document.querySelector(".estado");
pais        = document.querySelector(".pais");
ciudad      = document.querySelector(".ciudad");
fecha       = document.querySelector(".fecha");
foto        = document.querySelector("img.foto");

fetch('../../../s/red_social/l/Sesion.php', {
    method: 'GET'
}).then(function (response) {
    if(response.ok) { return response.json(); } 
    else { console.log("..........................................."); }
}).then(function (json) {//console.log("Directo: " + json[0].correo);
    nombre.innerHTML        = json[0].nombre + " " + json[0].apellido;
    nacimiento.innerHTML    = json[0].nacimiento;
//    apellido.innerHTML  = json[0].apellido;
    correo.innerHTML        = json[0].correo;
//    codigo.innerHTML    = json[0].codigo;
    numero.innerHTML        = json[0].numero;
    sexo.innerHTML          = json[0].sexo;
    estado.innerHTML        = json[0].estado;
    pais.innerHTML          = json[0].pais;
    ciudad.innerHTML        = json[0].ciudad;
//    fecha.innerHTML         = json[0].fecha;
    foto.src                = '../../../i_img/red_social/i/' + json[0].foto;
}).catch(function (err) {
    console.log('Fetch problem: ' + err.message);
});