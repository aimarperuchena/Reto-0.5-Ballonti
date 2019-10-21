<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/estilo.css">
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/jquery.translate.js"></script>
	<script type="text/javascript" src="javascript/jsidiomas.js"></script>
	<script src="javascript/js.js"></script>
	<title>Formulario</title>
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
		<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><img src="imagenes/menu.jpg" id="imgMenu">
  </button>
  <div id="myDropdown" class="dropdown-content">
  <a href="inicio" class="trn" data-trn-key="inicio">Inicio</a>
    <a href="tiendas" class="trn" data-trn-key="tiendas">Tiendas</a>
    <a href="ocio" class="trn" data-trn-key="ocio">Ocio</a>
    <a href="localizacion" class="trn" data-trn-key="localizacion">Localizacion</a>
    <a href="administracion" class="trn" data-trn-key="administracion">Administración</a>
  </div>
</div>
	</div>
</div>

<div id="contenedor">
	<div id="elegir_tienda">
		<select>
			<option value="Forum Sport">Forum Sport</option>
			<option value="Game">Game</option>
			<option value="TGB">TGB</option>
		</select>
	</div>
	<div id="insertar_producto">
		<div id="insertar_producto_titulo">
			<h2 class="trn" data-trn-key="form1">INSERTAR PRODUCTO</h2>
		</div>
		<div id="formulario_añadir">
			<label class="trn" data-trn-key="form2">Nombre del Producto:</label>
			<div id="nombre_form">
			<input type="text" name="nombre">
			</div>
			<label class="trn" data-trn-key="form3">Precio:</label>
			<div id="precio_form">
			<input type="text" name="precio">
			</div>
			<label class="trn" data-trn-key="form4">Descripcion:</label>
			<div id="textarea">
			<textarea></textarea>
			</div>
			<div id="botonAgregar">
				<input type="button" name="boton" value="Insertar">
			</div>
		</div>
	</div>
	<div id="modificar_stock">
		<div id="modificar_titulo">
			<h2 class="trn" data-trn-key="form5">MODIFICAR STOCK</h2>
		</div>
		<div id="formulario_modificar">
			<div>
				 <select>
					  <option value="Producto1">Producto1</option>
					  <option value="Producto2">Producto1</option>
					</select>
			</div>
			<label class="trn" data-trn-key="form6">Numero de Stock:</label>
			<div>
				<input type="number" name="stock">
			</div>
		</div>
	</div>
	<div id="eliminar_producto">
		<div id="eliminar_titulo">
			<h2 class="trn" data-trn-key="form7">ELIMINAR PRODUCTO</h2>
		</div>
		<div id="formulario_eliminar">
			<div>
				<select>
					  <option value="Producto1">Producto1</option>
					  <option value="Producto2">Producto1</option>
				</select>
			</div>
			<div id="boton_eliminar">
				<input type="button" name="eliminar" value="Eliminar">
			</div>
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