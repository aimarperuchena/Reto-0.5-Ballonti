<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
    <link rel="stylesheet" type="text/css" href="style/tienda.css">
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
	
<div id="div_general_productos">
            <div id="div_nombre_tienda">
                <p id="nombre_tienda">Forum Spot</p>
            </div>

            @foreach($productos as $producto)
            <div id="div_producto">
                <div id="div_imagen_producto">
                    <img src="{{$producto->link_imagen}}" alt="">
                </div>
                <div id="detalles_producto">
                    <p>Nombre: <span id="nombre_producto">{{$producto->nombre}}</span></p>
                    <p>Precio: <span id="precio_producto">{{$producto->precio}}</span></p>
                    <p>Descripción: <span id="descipcion_producto">{{$producto->descripcion}}</span></p>
                    <p>Stock: <span id="stock_producto">{{$producto->stock}}</span></p>
                    <p>Link: <a href="google.com">{{$producto->link}}</a></p>
                </div>
            </div>
				<option value="{{$tienda->id}}">{{$tienda->nombre}}</option>
			@endforeach
            
            <div id="div_producto">
                <div id="div_imagen_producto">
                </div>
                <div id="detalles_producto">
                    <p>Nombre: <span id="nombre_producto">Bicicleta de montaña</span></p>
                    <p>Precio: <span id="precio_producto">4000 €</span></p>
                    <p>Descripción: <span id="descipcion_producto">Bicicleta de montaña de alta gama con cuadro de carbono</span></p>
                    <p>Stock: <span id="stock_producto">10</span></p>
                    <p>Link: <a href="google.com">Enlace</a></p>
                </div>
            </div>

            <div id="div_producto">
                <div id="div_imagen_producto">
                </div>
                <div id="detalles_producto">
                    <p>Nombre: <span id="nombre_producto">Bicicleta de montaña</span></p>
                    <p>Precio: <span id="precio_producto">4000 €</span></p>
                    <p>Descripción: <span id="descipcion_producto">Bicicleta de montaña de alta gama con cuadro de carbono</span></p>
                    <p>Stock: <span id="stock_producto">10</span></p>
                    <p>Link: <a href="google.com">Enlace</a></p>
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