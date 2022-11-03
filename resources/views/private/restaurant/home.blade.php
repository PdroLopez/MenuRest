
@extends('layouts.master')
@section('content')



<!-- Modal-->
<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Codigo de tu menú</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <img src="https://www.emy.org/images/glossary-qr.png" alt="Italian Trulli" width="50%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="createSucursal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-sucursal.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sucursales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Local</label>
                            {!!Form::select('locales_id',$local,null,['class'=>"form-control", 'placeholder'=>"Seleccionar", 'required'])!!}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Estado</label>
                            {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div>

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
                    Registrar
                </button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>


<div class="modal fade" id="createMenu" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-menu.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Menus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                        </div>
                    </div>
                    {{-- <div class="col-4">
                        <div class="form-group">
                            <label for="">Local</label>
                          {!!Form::select('locales_id',$local,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div> --}}

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Estado</label>
                            {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Sucursal</label>
                            {!!Form::select('sucursales_id',$sucursales,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div>
                    <div class="col-6">
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

<div class="modal fade" id="createProducto" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-producto.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <textarea class="form-control" col="4" name="descripcion" placeholder="Enter Description"></textarea>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="file" name="imagen" class="form-control" placeholder="">
                            <span class="text-danger">{{ $errors->first('imagen') }}</span>                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Descuento</label>
                            {!!Form::number('descuento',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Valor</label>
                            {!!Form::number('valor',null,['class'=>"form-control", 'placeholder'=>"Ingrese texto..." , 'required'])!!}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Menu</label>
                            {!!Form::select('menus_id',$menu,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Estado</label>
                            {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Categoria</label>
                            {!!Form::select('categoria_id',$categoria,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
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


<div class="modal fade" id="createLocal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            {!!Form::open(['route' => 'mantenedor-local.store', 'method' => 'POST','files'=>true])!!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Local</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Descripcion</strong>
                            <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese  una Descripcion"></textarea>
                            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Fotografia </strong>
                            <input type="file" name="fotografia" class="form-control" placeholder="">
                            <span class="text-danger">{{ $errors->first('fotografia') }}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Logo </strong>
                            <input type="file" name="logo" class="form-control" placeholder="">
                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Sitio web</label>
                            {!!Form::text('web',null,['class'=>"form-control", 'placeholder'=>"Ingrese un sitio web..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Correo Electronico</label>
                            {!!Form::email('correo',null,['class'=>"form-control", 'placeholder'=>"Ingrese una Correo..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Telefono </label>
                            {!!Form::number('telefono',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Telefono..." , 'required'])!!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Estado</label>
                            {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div>
                    {{-- <div class="col-6">
                        <div class="form-group">
                            <label for="">Sucursal</label>
                            {!!Form::select('sucursales_id',$sucursal,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                        </div>
                    </div> --}}
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



<div class="row">

    <div class="col-xl-8">
        <div class="card-body p-0">
            <!--begin::Nav Tabs-->
            <ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
                <!--begin::Item-->
                <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_1">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Home/Library.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center" data-toggle="modal" data-target="#createLocal">Crear Local</span>
                    </a>
                </li>
                <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_1">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Home/Library.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center" data-toggle="modal" data-target="#createSucursal">Crear Sucursal</span>
                    </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_2">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center" data-toggle="modal" data-target="#createMenu">Crear menú</span>
                    </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                {{-- <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                    <a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_3">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Media/Movie-Lane2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M6,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,19 C20,20.1045695 19.1045695,21 18,21 L6,21 C4.8954305,21 4,20.1045695 4,19 L4,5 C4,3.8954305 4.8954305,3 6,3 Z M5.5,5 C5.22385763,5 5,5.22385763 5,5.5 L5,6.5 C5,6.77614237 5.22385763,7 5.5,7 L6.5,7 C6.77614237,7 7,6.77614237 7,6.5 L7,5.5 C7,5.22385763 6.77614237,5 6.5,5 L5.5,5 Z M17.5,5 C17.2238576,5 17,5.22385763 17,5.5 L17,6.5 C17,6.77614237 17.2238576,7 17.5,7 L18.5,7 C18.7761424,7 19,6.77614237 19,6.5 L19,5.5 C19,5.22385763 18.7761424,5 18.5,5 L17.5,5 Z M5.5,9 C5.22385763,9 5,9.22385763 5,9.5 L5,10.5 C5,10.7761424 5.22385763,11 5.5,11 L6.5,11 C6.77614237,11 7,10.7761424 7,10.5 L7,9.5 C7,9.22385763 6.77614237,9 6.5,9 L5.5,9 Z M17.5,9 C17.2238576,9 17,9.22385763 17,9.5 L17,10.5 C17,10.7761424 17.2238576,11 17.5,11 L18.5,11 C18.7761424,11 19,10.7761424 19,10.5 L19,9.5 C19,9.22385763 18.7761424,9 18.5,9 L17.5,9 Z M5.5,13 C5.22385763,13 5,13.2238576 5,13.5 L5,14.5 C5,14.7761424 5.22385763,15 5.5,15 L6.5,15 C6.77614237,15 7,14.7761424 7,14.5 L7,13.5 C7,13.2238576 6.77614237,13 6.5,13 L5.5,13 Z M17.5,13 C17.2238576,13 17,13.2238576 17,13.5 L17,14.5 C17,14.7761424 17.2238576,15 17.5,15 L18.5,15 C18.7761424,15 19,14.7761424 19,14.5 L19,13.5 C19,13.2238576 18.7761424,13 18.5,13 L17.5,13 Z M17.5,17 C17.2238576,17 17,17.2238576 17,17.5 L17,18.5 C17,18.7761424 17.2238576,19 17.5,19 L18.5,19 C18.7761424,19 19,18.7761424 19,18.5 L19,17.5 C19,17.2238576 18.7761424,17 18.5,17 L17.5,17 Z M5.5,17 C5.22385763,17 5,17.2238576 5,17.5 L5,18.5 C5,18.7761424 5.22385763,19 5.5,19 L6.5,19 C6.77614237,19 7,18.7761424 7,18.5 L7,17.5 C7,17.2238576 6.77614237,17 6.5,17 L5.5,17 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M11.3521577,14.5722612 L13.9568442,12.7918113 C14.1848159,12.6359797 14.2432972,12.3248456 14.0874656,12.0968739 C14.0526941,12.0460053 14.0088196,12.002002 13.9580532,11.9670814 L11.3533667,10.1754041 C11.1258528,10.0189048 10.8145486,10.0764735 10.6580493,10.3039875 C10.6007019,10.3873574 10.5699997,10.4861652 10.5699997,10.5873545 L10.5699997,14.1594818 C10.5699997,14.4356241 10.7938573,14.6594818 11.0699997,14.6594818 C11.1706891,14.6594818 11.2690327,14.6290818 11.3521577,14.5722612 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Crear productos</span>
                    </a>
                </li> --}}
                <!--end::Item-->
                <!--begin::Item-->
                <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_4">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center"  data-toggle="modal" data-target="#createProducto">Crear productos</span>
                    </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                {{-- <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_5">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/General/Shield-check.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">System Security</span>
                    </a>
                </li> --}}
                <!--end::Item-->
                <!--begin::Item-->
                {{-- <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_5">
                        <span class="nav-icon py-2 w-auto">
                            <span class="svg-icon svg-icon-3x">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Communication/Group.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Customer Support</span>
                    </a>
                </li> --}}
                <!--end::Item-->
            </ul>
            <!--end::Nav Tabs-->
            <!--begin::Nav Content-->
            <div class="tab-content m-0 p-0">
                <div class="tab-pane active" id="forms_widget_tab_1" role="tabpanel"></div>
                <div class="tab-pane" id="forms_widget_tab_2" role="tabpanel"></div>
                <div class="tab-pane" id="forms_widget_tab_3" role="tabpanel"></div>
                <div class="tab-pane" id="forms_widget_tab_4" role="tabpanel"></div>
                <div class="tab-pane" id="forms_widget_tab_6" role="tabpanel"></div>
            </div>
            <!--end::Nav Content-->
        </div>

    </div>
    <div class="col-xl-8">
        <div class="card card-custom gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center py-1">
                    <!--begin:Pic-->
                    {{-- <div class="symbol symbol-80 symbol-light-danger mr-5">
                        <span class="symbol-label">
                            @foreach ($restaurante as $restaurantes)
                            <img src="{{ asset('public/restaurante/imagen').'/'.$restaurantes->imagen_restaurante }}" height="80" width="auto">
                            <br>


                            @endforeach
                        </span>
                    </div> --}}
                    <!--end:Pic-->
                    <!--begin:Title-->

                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                        <div class="row">
                            <div class="col-9">
                                <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h5">{{ Auth::user()->name }}
                            </div>
                            <div class="col-3">
                                @foreach ($restaurante as $restaurantes)
                                <a href="#" class="btn btn-primary btn-shadow font-weight-bold mr-2" data-toggle="modal" data-target="#editRestaurante{{ $restaurantes->id }}">Editar</a>                            </div>
                                <div class="modal fade" id="editRestaurante{{ $restaurantes->id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            {!!Form::open(['route' => ['mantenedor-usuarios.update',$restaurantes->id],'files'=>true, 'method' => 'PUT']) !!}
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Nombre*</label>
                                                            {!!Form::text('name',$restaurantes->name,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..."])!!}
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Correo*</label>
                                                            {!!Form::text('email',$restaurantes->email,['class'=>"form-control", 'placeholder'=>"Ingrese un Correo..."])!!}
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Telefono*</label>
                                                            {!!Form::text('telefono',$restaurantes->telefono,['class'=>"form-control", 'placeholder'=>"Ingrese un Telefono..."])!!}
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Nueva Contraseña </label>
                                                            <input type="password" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                    {{-- <br>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Contraseña Nueva</label>
                                                            <input type="password" class="form-control" name="contraseña_nueva">

                                                            {{-- {!!Form::password('contraseña_nueva',null,['class'=>"form-control", 'placeholder'=>"Ingrese su  Nueva Contraseña..."])!!}
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Descripcion</label>
                                                            <textarea class="form-control" col="4" name="descripcion_restaurante" placeholder="Enter Description">{{ $restaurantes->descripcion_restaurante }}</textarea>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Imagen o Logo</label>
                                                            <img src="{{ asset('public/restaurante/imagen').'/'.$restaurantes->imagen_restaurante }}" height="100" width="100">
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Logo o Imagen de Restaurante*</label>
                                                            <input type="file" name="imagen_restaurante" class="form-control" placeholder="">
                                                            <span class="text-danger">{{ $errors->first('fotografia') }}</span>
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
                                @endforeach

                            </div>
{{--
                        {{ Auth::user()->nombre_restaurante }}</a>
                        <span class="text-muted text-justify font-weight-bold font-size-lg">  {{ Auth::user()->descripcion_restaurante }}</span> --}}
                    </div>

                </div>
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">

        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Lista de sucursales </span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">sucursales que se han creado </span>
                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->

            <div class="card-body pt-4 col-8">

                <!--begin::Container-->
                <div>
                    <!--begin::Item-->
                    @foreach ($sucursal as $sucursales)
                    <div class="d-flex align-items-center mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol mr-5 pt-1">
                            <div class="symbol-label min-w-65px min-h-100px" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/books/4.png')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="d-flex flex-column">
                            <!--begin::Title-->
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $sucursales->nombre }}</a>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="text-muted font-weight-bold font-size-sm pb-4">{{ $sucursales->direccion }}
                            <br></span>
                            <!--end::Text-->
                            <!--begin::Action-->
                            <div>
                                <a href="#" class="btn btn-light btn-shadow font-weight-bold mr-2" data-toggle="modal" data-target="#edicion{{ $sucursales->id }}">Edición</a>
                                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="edicion{{$sucursales->id}}" role="dialog" tabindex="-1">
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
                                                            {!!Form::text('nombre',$sucursales->nombre,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..."])!!}
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Direccion</label>
                                                            {!!Form::text('direccion',$sucursales->direccion,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..."])!!}
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Local</label>
                                                            {!!Form::select('locales_id',$local,$sucursales->local->id,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                                                        </div>
                                                    </div>
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
                                <a href="{{ asset('private/productos/') }}/{{ $sucursales->id }}" class="btn btn-success btn-shadow font-weight-bold mr-2">Ver Menú</a>
                                {{-- <a href="#" class="btn btn-primary btn-shadow font-weight-bold mr-2">Menú</a> --}}
                                <a href="{{ asset('private/sucursal/qr')}}/{{ $sucursales->code }}" class="btn btn-danger btn-shadow font-weight-bold mr-2" >Ver QR</a>
                                {{-- <a href="#" class="btn btn-warning btn-shadow font-weight-bold mr-2">Warning</a> --}}
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Info-->
                    </div>
                    @endforeach
                    <!--end::Item-->
                    <!--begin::Item-->
                    <!--end::Item-->
                    <!--begin::Item-->
                    <!--end::Item-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Body-->
        </div>



    </div>
    <div class="col-xl-6">

    </div>
</div>










@endsection
