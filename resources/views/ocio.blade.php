<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/estilo.css">
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/jquery.translate.js"></script>
	<script type="text/javascript" src="javascript/jsidiomas.js"></script>
	<script src="javascript/js.js"></script>
	<title>Ocio</title>
</head>
<body>
<div id="header">
	<div id="banner">
    <img src="imagenes/fotos_ballonti/ballonti5.jpg" id="ban">	</div>
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
		<div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><img src="imagenes/menu.jpg" id="imgMenu"></button>
  
  <div id="myDropdown" class="dropdown-content">
  <a href="inicio" class="trn" data-trn-key="inicio">Inicio</a>
    <a href="tiendas" class="trn" data-trn-key="tiendas">Tiendas</a>
    <a href="ocio" class="trn" data-trn-key="ocio">Ocio</a>
    <a href="localizacion" class="trn" data-trn-key="localizacion">Localizacion</a>
    <a href="administrador" class="trn" data-trn-key="administracion">Administración</a>
  </div>
</div>
	</div>
</div>

<div id="contenedor">
	<div id="ocio_titulo">
		<p class="trn" data-trn-key="ocio">OCIO</p>
	</div>
	<div id="ocio_cine">
		<h2 class="trn" data-trn-key="cines_titulo">DOCK CINES</h2>
		<div id="texto_cine">
			<p class="trn" data-trn-key="texto_cine">Si buscas una tarde de cine, aquí podrás encontrar la cartelera de ésta semana.</p>
		</div>
		<div class="slideshow-container_cine">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 5</div>
			  <img src="imagenes/cine/cine1.jpg" style="width:100%" class="carrImg_cine">
			  
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 5</div>
			  <img src="imagenes/cine/cine2.jpg" style="width:100%" class="carrImg_cine">
			  
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 5</div>
			  <img src="imagenes/cine/cine3.jpg" style="width:100%" class="carrImg_cine">
			  
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">4 / 5</div>
			  <img src="imagenes/cine/cine4.jpg" style="width:100%" class="carrImg_cine">
			  
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">5 / 5</div>
			  <img src="imagenes/cine/cine5.jpg" style="width:100%" class="carrImg_cine">
			  
			</div>

	</div>
<br>

	
	<script src="javascript/js.js"></script>
	</div>
	<div id="ocio_bolera">
		<h2>OZONE BOWLING</h2>
		<div class="texto_ocio">
			<p class="trn" data-trn-key="texto_bolera">En Ozone Ballonti puedes encontrar 18 pistas de bowling homologadas por la ACB, máquinas de redemption, deportivas, simuladores, video-juegos y 400 metros cuadrados de trampoline park. Además, podrás disfrutar de un estupendo servicio de bar-cafetería.</p>
		</div>
		<div id="imagen_bolera">
			<img src="imagenes/bolera/bolera1.jpg" id="boleraImg">
		</div>
		
<br>

	
	
	</div>
	<div id="ocio_gym">
		<h2 class="trn" data-trn-key="gym_titulo">GIMNASIO WORLD FITNESS</h2>
		<div class="texto_ocio">
			<p class="trn" data-trn-key="texto_gym">En World Fitness Center serás asesorado por un staff de profesionales altamente capacitados y experimentados, que te llevaran a conseguir tus objetivos. Te ofreceremos soluciones a TU medida.</p>
		</div>
		<div id="imagen_gym">
			<img src="imagenes/gym.jpg" id="gymImg">
		</div>
	</div>

<div id="footer">
		<div><img src="imagenes/logo.gif"></div>
		<div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
		<div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
	</div>
	</div>
</body>
</html>