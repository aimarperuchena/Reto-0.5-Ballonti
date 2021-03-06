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
   <a href="administrador" class="trn" data-trn-key="administracion">Administración</a>
 </div>
</div>
    </div>
</div>
<div id="contenedor">
<div id="insertar_producto">
        <div id="insertar_producto_titulo">
            <h2 class="trn" data-trn-key="form1">INSERTAR PRODUCTO</h2>
        </div>
        <div id="formulario_añadir">
        <form action="{{route('insertar')}}" enctype="multipart/form-data" method="POST">
        @csrf
            <label class="trn" data-trn-key="tiendas">Tiendas: </label>
            <select name="id_tienda">
            @foreach($tiendas as $tienda)
                <option value="{{$tienda->id}}">{{$tienda->nombre}}</option>
            @endforeach
            </select>
            <br>
            <label class="trn" data-trn-key="form2">Nombre:</label><input type="text" id="nombre_producto" name="nombre" ><br>
            <label class="trn" data-trn-key="form3">Precio:</label><input type="number" name="precio" id="precio_producto" step=".01"><br>
            <label class="trn" data-trn-key="form4">Descripcion:</label><textarea name="descripcion" id="descripcion_producto"></textarea><br>
            <label class="trn" data-trn-key="stock">Stock: </label><input type="number" name="stock" id="stock_producto"><br>
            <label class="trn" data-trn-key="imagen">Imagen</label><input type="file" name="imagen" id="imagen_producto"><br>
            <label class="trn" data-trn-key="enlace">Enlace</label><input type="url" name="link" id="link_producto"><br>
            <input type="submit" name="enviar" value="Enviar" id="boton_enviar">
            </div>
            </form>
        </div>
    </div>
    
    <script src="javascript/validacion_insertar.js"></script>
<div id="footer">
<div><img src="imagenes/fotos_ballonti/logo.gif"></div>
        <div id="mini" class="trn" data-trn-key="footer">A sólo 10 minutos de Bilbao, C.C. Ballonti es mucho más que un espacio para realizar tus compras, es un lugar donde el tiempo de ocio se llena de emoción para toda la familia...</div>
        <div>Tlf: (+34) 944 915 246<br>Fax:    (+34) 944 926 822<br> mail:   spain.ballonti@cbre.com</div>
    </div>
    </div>
</body>
</html>