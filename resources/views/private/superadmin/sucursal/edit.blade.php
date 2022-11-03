
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit{{$sucursales->id}}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			{!! Form::open(['route' => ['mantenedor-sucursal.update',$sucursales->id],'files'=>true, 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Sucursal
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',$sucursales->nombre,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            {!!Form::text('direccion',$sucursales->direccion,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Local</label>
                            {!!Form::select('locales_id',$local,$sucursales->local->id,['class'=>"form-control", 'placeholder'=>"Seleccionar", 'required'])!!}
                        </div>
                    </div>
                    {{-- <div class="col-6">
                        <div class="form-group">
                            <label for="">Estado</label>
                            {!!Form::select('estado_id',$estado,$sucursales->estado->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div> --}}

                    {{--
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Menu</label>
                            {!!Form::select('menus_id',$menu,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>

                    </div> --}}

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
