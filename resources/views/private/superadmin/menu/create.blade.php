<button class="btn btn-primary btn-icon-sm" data-target="#create" data-toggle="modal" type="button">
    <i class="flaticon2-plus"></i>
    Nuevo Menu
</button>
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-menu.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Nuevo Menu
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
                    <label for="">Local</label>
                    {!!Form::select('locales_id',$local,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="">Sucursales</label>
                    {!!Form::select('sucursales_id',$sucursales,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                </div>
                <div class="form-group">
                    <label for="sancion" class="">¿Que estilo de Menú desea?</label>
                    <div class="col-md-6"><div class="form-group">
                        <label> </label>
                        <div class="radio-inline">
                            <label class="radio radio-rounded">
                            <input type="radio" name="sancion" value="Estilo1" onChange="sancionValue(this)">
                            <span></span>
                            <img src="{{asset('/public/estilos/estilo1.jpg')}}" width="100%" height="auto"></label>
                            <label class="radio radio-rounded">
                            <input type="radio" checked="checked" name="sancion" value="Estilo2" onChange="sancionValue(this)">
                            <span></span>  <img src="{{asset('/public/estilos/estilo2.PNG' )}}" width="100%" height="auto"></label>
                        </div>
                        <script type="text/javascript">
                        function sancionValue(x) {
                            if(x.value == 'No'){
                                document.getElementById("estilo").style.display = 'none';
                            }
                            else{
                                document.getElementById("estilo").style.display = 'block';
                            }
                        }
                        </script>
                        <div id="estilo" style="display:none;">
                        </div>
                    </div>
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
