{!! Form::open(['route'=>['mantenedor-local.delete',$locales->id],'method'=>'delete']) !!}
	<button class="dropdown-item" onclick="return confirm('¿Quiere borrar el registro?')">Eliminar</button>
{!! Form::close() !!}
