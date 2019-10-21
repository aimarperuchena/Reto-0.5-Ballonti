@if (count($tiendas)>0)
<h4>Listado de tiendas</h4>
<ul>

@foreach($tiendas as $tienda)
<li>{{$tienda->nombre}}</li>
@endforeach
</ul>
@endif