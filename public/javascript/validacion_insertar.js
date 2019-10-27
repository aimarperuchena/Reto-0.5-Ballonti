$(document).ready(function() {

    let txtNombre = document.getElementById("nombre_producto")
    let txtDescrip = document.getElementById("descripcion_producto");
    let txtPrecio = document.getElementById("precio_producto");
    let txtStock = document.getElementById("stock_producto");
    let txtEnlace = document.getElementById("link_producto");
    let boton_enviar = document.getElementById("boton_enviar");
    boton_enviar.hidden = true;

    $('input').change(function() {
        validar();
    });


    function validar() {
        var cont = 0;

        if (txtNombre.value.length > 0) {
            cont++;

        }
        if (txtDescrip.value.length > 0) {
            cont++;

        }
        if (txtPrecio.value > 0) {
            cont++;
        }
        if (txtEnlace.value.includes("http")) {
            cont++;
        }


        if (cont === 4) {
            boton_enviar.hidden = false;
        } else {
            boton_enviar.hidden = true;
        }


        console.log(cont);
    }













































});