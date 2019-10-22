<form action="" method="post">
    <label>Nombre</label><input type="text" name="nombre" id=""><br>
    <label>Descripcion</label><input type="text" name="descripcion" id=""><br>
    <label>Precio</label><input type="text" name="precio" id=""><br>
    <label>Imagen</label><input type="file" name="imagen" id=""><br>
    <label>Link</label><input type="text" name="link" id=""><br>
    <input type="submit" value="Enviar">
</form>

@if ($errors->any())
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif