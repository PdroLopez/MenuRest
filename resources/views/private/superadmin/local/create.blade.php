<button class="btn btn-primary btn-icon-sm" data-target="#create" data-toggle="modal" type="button">
    <i class="flaticon2-plus"></i>
    Nuevo Local
</button>
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-local.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevo Local
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nombre</label>
                    {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                </div>
                <div class="form-group">
                    <strong>Descripcion</strong>
                    <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese  una Descripcion"></textarea>
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                </div>
                <div class="form-group">
                    <strong>Fotografia </strong>
                    <input type="file" name="fotografia" class="form-control" placeholder="">
                    <span class="text-danger">{{ $errors->first('fotografia') }}</span>
                </div>
                <div class="form-group">
                    <strong>Logo </strong>
                    <input type="file" name="logo" class="form-control" placeholder="">
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                </div>

                <div class="form-group">
                    <label for="">Direccion</label>
                    {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..." , 'required'])!!}
                </div>
                <div class="form-group">
                    <label for="">Sitio web</label>
                    {!!Form::url('web',null,['class'=>"form-control", 'placeholder'=>"Ingrese un sitio web..." , 'required'])!!}
                </div>
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    {!!Form::email('correo',null,['class'=>"form-control", 'placeholder'=>"Ingrese una Correo..." , 'required'])!!}
                </div>
                <div class="form-group">
                    <label for="">Telefono </label>
                    {!!Form::number('telefono',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Telefono..." , 'required'])!!}
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                {{-- <div class="form-group">
                    <label for="">Sucursal</label>
                    {!!Form::select('sucursales_id',$sucursal,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div> --}}
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
