const menos     = document.querySelector(".n-menos");
const mas       = document.querySelector(".n-mas");
//const precio    = document.querySelector("#precio").value;
const cantidad  = document.querySelector("#mas");

menos.onclick = function () {
    document.querySelector("#mas").stepDown();
    total();
     console.log(document.forms["mas"]["mas"].value);
};
mas.onclick = function () {
    document.querySelector("#mas").stepUp();
    total();
     console.log(document.forms["mas"]["mas"].value);
};
cantidad.oninput = function (t) {
//    total();
    const masForm = document.querySelector("#mas-form");
    let numero = document.forms["mas"]["mas"].value;

    let datos = new FormData(masForm);
    
    datos.append('mas', numero);
    
    fetch("sql/sistema-PHP/Leer.php", {
        method: "POST",
        body: datos
    }).then(function(response) {
        if(response.ok) { return response.text(); } 
        else { throw "Error en la llamada"; }
    }).then(function(texto) {
        console.log(texto)
//        return leerDatos.innerHTML = texto;
    });
    console.log(document.forms["mas"]["mas"].value);
//     cantidad.addEventListener("keyup", function() {
//        cantidad = document.forms["buscar"]["mas"].value;
//
//        if (cantidad === "") { leer(); } 
//        else { 
//            leer(cantidad); 
//            document.querySelector("#n-masResponde").innerHTML = total();
//        }
//    });
};
function 
total() {
//    document.querySelector("#mas").value;
//    cantidad.value;
document.forms["mas"]["mas"].value;
}
/*
<!--<div>-->
            <button class="n-menos">-</button>
            <form action="" method="POST" name="detalles" id="detalles">
                <input type="number" name="mas" id="mas" value="1">
            </form>
            <button class="n-mas">+</button>
        <!--</div>-->
        <div>
            <button type="submit" name="escoger" id="escogiendo" value="Escoger" form="detalles">
                Escoger <i class="fa fa-shopping-cart"></i>
            </button>
        </div> */