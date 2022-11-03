
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit{{$usuario->id}}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			{!! Form::open(['route' => ['mantenedor-usuarios.update',$usuario->id],'files'=>true, 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar usuario
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">
                        Nombre
                    </label>
                    {!!Form::text('name',$usuario->name,['class'=>"form-control", 'placeholder'=>"Ingrese texto" , 'required'])!!}
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    {!!Form::email('email',$usuario->email,['class'=>"form-control", 'placeholder'=>"Ingrese texto..."])!!}
                </div>
                <div class="form-group">
                    <label for="">Rol</label>
                    {!!Form::select('rol_id',$roles,$usuario->rol_id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary">
                    Actualizar
                </button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
