
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit{{$locales->id}}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			{!! Form::open(['route' => ['mantenedor-local.update',$locales->id],'files'=>true, 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Local
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">
                        Nombre
                    </label>
                    {!!Form::text('nombre',$locales->nombre,['class'=>"form-control", 'placeholder'=>"Ingrese texto"])!!}
                </div>

                    <div class="form-group">
                        <strong>Descripcion</strong>
                        <textarea class="form-control" col="4" name="descripcion" placeholder="Description"  >{{ $locales->descripcion }}
                        </textarea>

                    </div>

                <div class="col-md-12">
                    <div class="form-group">
                            <strong>Fotografia</strong>

                            <img src="{{ asset('public/imagen').'/'.$locales->fotografia }}" height="150" width="150">

                            <input type="file" name="fotografia" class="form-control" placeholder="" value="{{ $locales->fotografia }}">
                            <span class="text-danger">{{ $errors->first('fotografia') }}</span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                            <strong>Logo</strong>

                            <img src="{{ asset('public/imagen').'/'.$locales->logo }}" height="150" width="150">

                            <input type="file" name="logo" class="form-control" placeholder="" value="{{ $locales->logo }}">
                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                    </div>
                </div>



                <div class="form-group">
                    <label for="">Direccion</label>
                    {!!Form::text('direccion',$locales->direccion,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..."])!!}
                </div>
                <div class="form-group">
                    <label for="">Sitio web</label>
                    {!!Form::url('web',$locales->web,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..."])!!}
                </div>
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    {!!Form::email('correo',$locales->correo,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..."])!!}
                </div>
                <div class="form-group">
                    <label for="">Telefono </label>
                    {!!Form::number('telefono',$locales->telefono,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..."])!!}
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    {!!Form::select('estado_id',$estado,$locales->estado->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                {{-- @if ($locales->sucursal_id != null)
                    <div class="form-group">
                        <label for="">Sucursal</label>
                        {!!Form::select('sucursales_id',$sucursal,$locales->sucursal->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                    </div>
                @else
                    <div class="form-group">
                        <label for="">Sucursal</label>
                        {!!Form::select('sucursales_id',$sucursal,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                    </div>
                @endif --}}

{{--
                <div class="form-group">
                    <label class="form-control-label">
                        Clase
                    </label>
                    {!!Form::text('class',$estado->class,['class'=>"form-control", 'placeholder'=>"Ingrese texto" , 'required'])!!}
                </div> --}}
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
