<!DOCTYPE html>


<head>
<link rel="stylesheet" type="text/css" href="{{url('/style/estilo.css')}}">

    <title>Centro Comercial Ballonti</title>
</head>

<body>
    <div id="header">
        <div id="banner">
            <img src="imagenes/ballontifeat.jpg" id="ban">
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
        <div id="div_texto_introduccion">

        </div>
        <div id="etiquetas_general">
            <div id="etiquetas_general_titulo">
                <p id="titulo_general_etiquetas_texto">TIENDAS</p>
            </div>
            <div id="etiquetas_div">
                <div id="etiquetas">
                    <a href="#"><img src="imagenes/tgb_logo.jpg" id="serImg"></a>
                </div>
                <div id="etiquetas">
                    <a href="#"><img src="imagenes/forumsport_logo.jpg" id="serImg"></a>
                </div>
                <div id="etiquetas">
                    <a href="#"><img src="imagenes/game_logo.jpg" id="serImg"></a>
                </div>
            </div>
        </div>



        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">

                <img src="imagenes/forum/forum4.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">

                <img src="imagenes/tgb7.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">

                <img src="imagenes/game3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
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