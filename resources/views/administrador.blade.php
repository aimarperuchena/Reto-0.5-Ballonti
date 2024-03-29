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
    

    <form action="{{route('elegir_tienda')}}" method="post" id="formulario_elegir_tienda">
        @csrf
			<label class="trn" data-trn-key="tiendas">Tienda: </label>
            <select name="id_tienda">
            @foreach($tiendas as $tienda)
                <option value="{{$tienda->id}}">{{$tienda->nombre}}</option>
            @endforeach
            </select>
			<input type="submit" value="Elegir">
        </form>	
    

<div id="footer">
<div><img src="imagenes/fotos_ballonti/logo.gif"></div>
        <div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
        <div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
    </div>
    </div>
</body>
</html>