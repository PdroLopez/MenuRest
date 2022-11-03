{!! Form::open(['route'=>['mantenedor-sucursal.delete',$sucursales->id],'method'=>'delete']) !!}
	<button class="dropdown-item" onclick="return confirm('¿Quiere borrar el registro?')">Eliminar</button>
{!! Form::close() !!}
