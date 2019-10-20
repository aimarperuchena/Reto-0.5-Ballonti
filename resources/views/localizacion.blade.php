<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/estilo.css">
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/jquery.translate.js"></script>
	<script type="text/javascript" src="javascript/jsidiomas.js"></script>
	<script src="javascript/js.js"></script>
	<title>Localizacion</title>
</head>
<body>
<div id="header">
	<div id="banner">
		<img src="imagenes/fotos_ballonti/ballonti5.jpg" id="ban">
	</div>
	<div id="menu">
		<div class="titulo_index">
		<h1 class="trn" data-trn-key="localizacion">Localizacion</h1>
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
    <a href="#about" class="trn" data-trn-key="ocio">Ocio</a>
    <a href="localizacion" class="trn" data-trn-key="localizacion">Localizacion</a>
    <a href="administracion" class="trn" data-trn-key="administracion">Administración</a>
  </div>
</div>

	</div>
</div>
<div id="contenedor">
	
		<div id="cont_loca">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.460032763207!2d-3.0234890408655173!3d43.31118163251694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e598b8a01d1cb%3A0xf6e7b927a2ba8901!2sBallonti%20merkataritza-zentroa!5e1!3m2!1ses!2ses!4v1571309537290!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" id="mapa"></iframe>
			<div id="texto_mapa">
				<p><label class="trn" data-trn-key="loc_1">Está localizado en Portugalete y fue inaugurado el lunes 21 de abril de 2008. Está en la Margen Izquierda de la Ría de Bilbao.<label><br>
				<label class="trn" data-trn-key="loc_2">Avenida Ballonti, 1 48920 Portugalete (Bizkaia)<label>
				 </p>
			</div>
			
		</div>
	
	<div id="footer">
    <div><img src="imagenes/fotos_ballonti/logo.gif"></div>
		<div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
		<div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
	</div>

</div>
</body>
</html>