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
		<h1 class="trn" data-trn-key="productos">Modificar Productos</h1>
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
			<form action="{{route('elegir_tienda')}}" method="post">
			<label>Tienda: </label>
            <select name="id_tienda">
            @foreach($tiendas as $tienda)
                <option value="{{$tienda->id}}">{{$tienda->nombre}}</option>
            @endforeach
            </select>
			<input type="submit" value="Elegir">
			</form>
            </div>

			
            
            

        </div>
	
	<div id="footer">
    <div><img src="{{ asset('imagenes/fotos_ballonti/logo.gif') }}"></div>
		<div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
		<div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
	</div>

</div>
</body>
</html>