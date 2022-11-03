
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edit{{$productos->id}}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			{!! Form::open(['route' => ['mantenedor-producto.update',$productos->id],'files'=>true, 'method' => 'PUT']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Editar Producto
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                </button>
            </div>
            <div class="modal-body">
                {{ @csrf_field() }}
                 @method('PATCH')
                <div class="form-group">
                    <label class="form-control-label">
                        Nombre*
                    </label>
                    {!!Form::text('nombre',$productos->nombre,['class'=>"form-control", 'placeholder'=>"Ingrese texto" , 'required'])!!}
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Descripcion</strong>
                        <textarea class="form-control" col="4" name="descripcion" placeholder="Description"  >{{ $productos->descripcion }}
                        </textarea>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Product Image</strong>

                        <img src="{{ asset('public/imagen').'/'.$productos->imagen }}" height="150" width="150">

                        <input type="file" name="imagen" class="form-control" placeholder="" value="{{ $productos->imagen }}">
                        <span class="text-danger">{{ $errors->first('imagen') }}</span>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="">Valor*</label>
                        {!!Form::number('valor',$productos->valor,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                    </div>
                    <div class="form-group">
                        <label for="">Descuento*</label>
                        {!!Form::number('descuento',$productos->descuento,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                    </div>
                <div class="form-group">
                    <label for="">Menu</label>
                    {!!Form::select('menus_id',$menu,$productos->menus->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    {!!Form::select('estado_id',$estado,$productos->estado->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    {!!Form::select('categoria_id',$categorias,$productos->categoria->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>



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
