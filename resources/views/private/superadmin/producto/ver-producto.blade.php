@extends('layouts.superadmin')
@section('content')


<div class="row">
    @foreach ($menuxd as $item)
        <div class="col-lg-6">

            <!--begin::List Widget 14-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->


                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">  {{ $item->nombre }}</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Opciones:</span>
                                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <button class="btn btn-primary btn-icon-sm" data-target="#create" data-toggle="modal" type="button">
                                                                <i class="flaticon2-plus"></i>
                                                                Nuevo Producto
                                                            </button>
                                                            {{-- <span class="label label-xl label-inline label-light-success"  data-target="#create" data-toggle="modal">Agregar nuevo Producto</span> --}}

                                                        </span>
                                                    </a>
                                                </li>


                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>


                    <!--end::Header-->
                    <!--begin::Body-->
                    @foreach ($producto as  $productos)
                            @if ($productos->menus_id == $item->id)
                                <div class="card-body pt-2">
                                    <!--begin::Item-->

                                    <div class="d-flex flex-wrap align-items-center mb-10">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                            <img class="symbol-label" src="{{ asset('public/imagen/').'/'.$productos->imagen }}" height="80" width="auto">

                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $productos->nombre }}</a>
                                            <span class="text-muted font-weight-bold font-size-sm my-1">{{ $productos->descripcion }}</span>

                                            {{--         <span class="text-muted font-weight-bold font-size-sm">Created by:
                                            <span class="text-primary font-weight-bold">CoreAd</span></span> --}}
                                        </div>
                                        <!--end::Title-->
                                        <?php
                                            $numero = (string)$productos->valor;
                                            $puntos = floor((strlen($numero)-1)/3);
                                            $tmp = "";
                                            $pos = 1;
                                            for($i=strlen($numero)-1; $i>=0; $i--){
                                                $tmp = $tmp.substr($numero, $i, 1);
                                                if($pos%3==0 && $pos!=strlen($numero))
                                                $tmp = $tmp.".";
                                                $pos = $pos + 1;
                                            }
                                            $aqui_vamos = "$ ".strrev($tmp);
                                        ?>
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center py-lg-0 py-2">
                                            <div class="d-flex flex-column text-right">
                                                <span class="text-dark-75 font-weight-bolder font-size-h4"> {{ $aqui_vamos }}</span>
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin: Item-->


                                </div>
                            @else

                            @endif

                    @endforeach
                    <!--end::Body-->
                </div>

            <!--end::List Widget 14-->
        </div>
    @endforeach




</div>
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

@endsection
