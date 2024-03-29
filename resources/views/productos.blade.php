<!DOCTYPE html>
<html>
<head>
  
    <link href="{{ asset('style/estilo.css') }}" rel='stylesheet' type='text/css' />
	<script src="{{ asset('javascript/jquery.min.js') }}"></script>
	<script src="{{ asset('javascript/jquery.translate.js') }}"></script>
	<script type="text/javascript" src="{{ asset('javascript/jsidiomas.js') }}"></script>
	<script src="{{ asset('javascript/js.js') }}"></script>
	<title>Localizacion</title>
</head>
<body>
<div id="header">
	<div id="banner">
		<img src="{{ asset('imagenes/fotos_ballonti/ballonti5.jpg') }}" id="ban">
	</div>
	<div id="menu">
		<div class="titulo_index">
		<h1 class="trn" data-trn-key="productos">Productos</h1>
		</div>
		<div id="idiomas">
			<div class="div_idiomas_fotos">
				<img src="{{ asset('imagenes/españa.png') }}" class="idiomas_fotos" onclick="cambiarEspañol()">
			</div>
			<div class="div_idiomas_fotos">
				<img src="{{ asset('imagenes/ikurriña.png') }}" class="idiomas_fotos" onclick="cambiarEuskera()">
			</div>
			<div class="div_idiomas_fotos">
				<img src="{{ asset('imagenes/ingles.jpg') }}" class="idiomas_fotos" onclick="cambiarIngles()">
			</div>
		</div>
		<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><img src="{{ asset('imagenes/menu.jpg') }}" id="imgMenu"></button>
  <div id="myDropdown" class="dropdown-content">
  <a href="{{ asset('inicio') }}" class="trn" data-trn-key="inicio">Inicio</a>
    <a href="{{ asset('tiendas') }}" class="trn" data-trn-key="tiendas">Tiendas</a>
    <a href="{{ asset('ocio') }}" class="trn" data-trn-key="ocio">Ocio</a>
    <a href="{{ asset('localizacion') }}"class="trn" data-trn-key="localizacion">Localizacion</a>
    <a href="{{ asset('administrador') }}" class="trn" data-trn-key="administracion">Administración</a>
  </div>
</div>

	</div>
</div>
<div id="contenedor">
	
<div id="div_general_productos">
            <div id="div_nombre_tienda">
			@if(count($nombre_tienda)>0)
			@foreach($nombre_tienda as $nombre)
                <p id="nombre_tienda">{{$nombre->nombre}}</p>
			@endforeach
			@endif
            </div>

			@if (count($productos)>0)
            @foreach($productos as $producto)
            <div id="div_producto">
                <div id="div_imagen_producto">

				<img src="/imagenes/productos/{{$producto->id_tienda}}/{{ $producto->link_imagen}}" alt="">

                </div>
                <div id="detalles_producto">
				
                    <label class="trn" data-trn-key="form2" style="font-size:1.5em; font-weight:bold;">Nombre:</label> <label id="nombre_producto">{{$producto->nombre}}</label>					
                    <label class="trn" data-trn-key="form3" style="font-size:1.5em;  font-weight:bold;" >Precio: </label> <label id="precio_producto">{{$producto->precio}}</label>
                    <label class="trn" data-trn-key="form4" style="font-size:1.5em;  font-weight:bold;">Descripción:</label> <label id="descipcion_producto">{{$producto->descripcion}}</label>
                    <label class="trn" data-trn-key="stock" style="font-size:1.5em;  font-weight:bold;">Stock:</label> <label id="stock_producto">{{$producto->stock}}</label>
                     <a class="trn" data-trn-key="enlace" href="{{$producto->link}}">Enlace</a>
                </div>
            </div>
				
			@endforeach
			@else
			<h2>No hay productos</h2>
            @endif
            
            

        </div>
	
	<div id="footer">
    <div><img src="{{ asset('imagenes/fotos_ballonti/logo.gif') }}"></div>
		<div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
		<div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
	</div>

</div>
</body>
</html>