<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{url('/style/estilo.css')}}">

    <title>Centro Comercial Ballonti</title>
</head>

<body>
    <div id="header">
        <div id="banner">
            <img src="imagenes/fotos_ballonti/ballonti5.jpg" id="ban">
        </div>
        <div id="menu">
            <div id="div_menu_titulo">
                <p id="menu_titulo">Centro Comercial Ballonti</p>
            </div>
            <div id="div_idiomas">
             <p id="español">Castellano</p>
             <p id="euskera">Euskera</p>
            </div>
            <div id="inf">
                <a href="#"><img src="imagenes/info.jpg" id="infb"></a>
            </div>
        </div>
    </div>
    <div id="contenedor">
        <div id="div_introduccion">
        <p id="txt_mensaje">VEN A BALLONTI A DISFRUTAR DE TU TIEMPO LIBRE</p>
            <p>En Ballonti encontraras un ampli centro comercial dirigido a todas las edades, donde podras hacer tus compras en las mejores tiendas. Disponemos de un amplio sitio ocio tales como cines, boleras, txikiparks y muchos mas !!!</p>
            <img src="/imagenes/fotos_ballonti/ballonti1.jpg" alt="">
        </div>
        <div id="etiquetas_general">
            <div id="etiquetas_general_titulo">
                <p id="titulo_general_etiquetas_texto">SERVICIOS</p>
            </div>
            <div id="etiquetas_div">
                <div id="etiquetas">
                    <a href="#" id="etiqueta_imagen"><img src="imagenes/cine.jpg" id="serImg"></a>
                    <p id="etiqueta_nombre">OCIO</p>

                </div>
                <div id="etiquetas">
                    <a href="#" id="etiqueta_imagen"><img src="imagenes/tiendas.jpg" id="serImg"></a>
                    <p id="etiqueta_nombre">TIENDAS</p>

                </div>
                <div id="etiquetas">
                    <a href="#" id="etiqueta_imagen"><img src="imagenes/maps.png" id="serImg"></a>
                    <p id="etiqueta_nombre">COMO LLEGAR</p>

                </div>
            </div>
        </div>
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti1.jpg">
            </div>

            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti2.jpg">
            </div>

            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti3.jpg">
            </div>
            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti4.jpg">
            </div>
            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti5.jpg">
            </div>
            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti6.jpg">
            </div>
            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti7.jpg">
            </div>
            <div class="mySlides fade">
                <img src="imagenes/fotos_ballonti/ballonti8.jpg">
            </div>


        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script src="js/js.js"></script>
        <div id="footer">
            <div id="div_img_footer">
                <img id="img_footer" src="imagenes/logo.gif">
            </div>
            <p id="texto_footer_1">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</p>
            <p id="texto_footer_2">Tlf: (+34) 944 915 246 <br> Fax: (+34) 944 926 822<br> Mail: spain.ballonti@cbre.com</p>
        </div>

    </div>
</body>

</html