<button class="btn btn-primary btn-icon-sm" data-target="#create" data-toggle="modal" type="button">
    <i class="flaticon2-plus"></i>
    Nuevo Productos
</button>
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1" enctype="multipart/form-data">
    <div class="modal-dialog" role="document">
        @crsf
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-producto.store',  'method' => 'POST','files'=>true])!!}
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevos Productos
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
                    <strong>Descripcion</strong>
                    <textarea class="form-control" col="4" name="descripcion" placeholder="Enter Description"></textarea>
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Product Image</strong>
                        <input type="file" name="imagen" class="form-control" placeholder="">
                        <span class="text-danger">{{ $errors->first('imagen') }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    {!!Form::number('valor',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                </div>
                <div class="form-group">
                    <label for="">Descuento</label>
                    {!!Form::number('descuento',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                </div>



                <div class="form-group">
                    <label for="">Menu</label>
                    {!!Form::select('menus_id',$menu_select,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    {!!Form::select('categoria_id',$categorias,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
{{--                 <div class="form-group">
                    <label for="">Clase</label>
                    {!!Form::text('class',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..."])!!}
                </div> --}}
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
