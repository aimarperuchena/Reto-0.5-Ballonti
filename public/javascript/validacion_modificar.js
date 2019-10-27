$(document).ready(function() {
    let txtStock = document.getElementById("stock_mod");
    let boton_enviar = document.getElementById("btn_modificar");
    boton_enviar.hidden = true;
    $('input').change(function() {
        validar();
    });


    function validar() {
        let cont = 0;

        if (txtStock.value > 0) {
            cont++;
        }
        if (cont > 0) {
            boton_enviar.hidden = false;
        }



        console.log(cont);
    }





});