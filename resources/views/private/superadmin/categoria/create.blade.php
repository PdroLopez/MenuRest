<button class="btn btn-primary btn-icon-sm" data-target="#create" data-toggle="modal" type="button">
    <i class="flaticon2-plus"></i>
    Nueva Categoria
</button>
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-categoria.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nueva Categoria
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nombre</label>
                    {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                </div>

                <div class="form-group">
                    <label for="">Estado</label>
                    {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary">
                    Registrar
                </button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
