{!! Form::open(['route'=>['mantenedor-producto.delete',$productos->id],'method'=>'delete']) !!}
	<button class="dropdown-item" onclick="return confirm('¿Quiere borrar el registro?')">Eliminar</button>
{!! Form::close() !!}
