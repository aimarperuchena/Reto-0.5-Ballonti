

<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="style/estilo.css">
      <script src="javascript/jquery.min.js"></script>
      <script src="javascript/jquery.translate.js"></script>
      <script src="javascript/efectos.js"></script>
      <script type="text/javascript" src="javascript/jsidiomas.js"></script>
      <title>Centro Comercial Ballonti</title>
   </head>
   <body>
      <div id="header">
         <div id="banner">
            <img src="imagenes/fotos_ballonti/ballonti5.jpg" id="ban">
         </div>
         <div id="menu">
            <div class="titulo_index">
               <h1 class="trn" data-trn-key="titulo">Centro Comercial Ballonti</h1>
            </div>
            <div id="idiomas">
               <div class="div_idiomas_fotos">
                  <img src="imagenes/españa.png" class="idiomas_fotos" onclick="cambiarEspañol()">
               </div>
               <div class="div_idiomas_fotos">
                  <img src="imagenes/ikurriña.png" class="idiomas_fotos" onclick="cambiarEuskera()">
               </div>
               <div class="div_idiomas_fotos">
                  <img src="imagenes/ingles.jpg" class="idiomas_fotos" onclick="cambiarIngles()">
               </div>
            </div>
            <div id="inf">
               <a href="informacion"><img src="imagenes/inf.jpg" id="infb"></a>
            </div>
         </div>
      </div>
      <div id="contenedor">
         <div id="div_introduccion">
            <p id="txt_mensaje" class="trn" data-trn-key="introduccion1">VEN A BALLONTI A DISFRUTAR DE TU TIEMPO LIBRE</p>
            <p id="txt_mensaje2" class="trn" data-trn-key="introduccion2">En Ballonti encontraras un ampli centro comercial dirigido a todas las edades, donde podras hacer tus compras en las mejores tiendas. Disponemos de un amplio sitio ocio tales como cines, boleras, txikiparks y muchos mas !!!</p>
         </div>
         <div id="paginas">
            <div id="etiquetas_general_titulo">
               <p id="titulo_general_etiquetas_texto" class="trn" data-trn-key="titulo_servicios">SERVICIOS</p>
            </div>
            <div id="cuadrados">
               <div class="servicios">
                  <a href="tiendas"><img src="imagenes/tiendas.jpg" class="serImg"></a>
                  <p id="etiqueta_nombre" class="trn" data-trn-key="tiendas">Tiendas</p>
               </div>
               <div class="servicios">
                  <a href="ocio"><img src="imagenes/ocio.jpg" class="serImg"></a>
                  <p id="etiqueta_nombre" class="trn" data-trn-key="ocio">Ocio</p>
               </div>
               <div class="servicios">
                  <a href="localizacion"><img src="imagenes/maps.png" class="serImg"></a>
                  <p id="etiqueta_nombre" class="trn" data-trn-key="localizacion">Localizacion</p>
               </div>
            </div>
         </div>
         <div class="slideshow-container">
            <div class="mySlides fade">
               <img src="imagenes/fotos_ballonti/ballonti1.jpg" style="width:100%" class="carrImg">
            </div>
            <div class="mySlides fade">
               <img src="imagenes/fotos_ballonti/ballonti2.jpg" style="width:100%" class="carrImg">
            </div>
            <div class="mySlides fade">
               <img src="imagenes/fotos_ballonti/ballonti3.jpg" style="width:100%" class="carrImg">
            </div>
            <div class="mySlides fade">
               <img src="imagenes/fotos_ballonti/ballonti4.jpg" style="width:100%" class="carrImg">
            </div>
            <div class="mySlides fade">
               <img src="imagenes/fotos_ballonti/ballonti5.jpg" style="width:100%" class="carrImg">
            </div>
            <div class="mySlides fade">
               <img src="imagenes/fotos_ballonti/ballonti6.jpg" style="width:100%" class="carrImg">
            </div>
         </div>
         <br>
         <script src="javascript/js.js"></script>
         <div id="footer">
            <div><img src="imagenes/fotos_ballonti/logo.gif"></div>
            <div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
            <div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
         </div>
      </div>
   </body>
</html>

