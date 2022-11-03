@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    @foreach ($plato as $platos)

                    <li class="active nav-item" role="presentation"><a class="active nav-link " href="#platos" aria-controls="platos" data-toggle="tab" role="tab" > {{ $platos->nombre }}</a> </li>
                    @endforeach
                    @foreach ($vino as $vinos)
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#vinos" aria-controls="vinos" data-toggle="tab" role="tab"> {{ $vinos->nombre }}</a> </li>

                    @endforeach
                    @foreach ($postre as $postres)
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#postres" aria-controls="postres" data-toggle="tab" role="tab"> {{ $postres->nombre }}</a> </li>

                    @endforeach
                    @foreach ($sopa as $sopas)
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#sopas" aria-controls="sopas" data-toggle="tab" role="tab"> {{ $sopas->nombre }}</a> </li>
                    @endforeach


                </ul>
                <div class="tab-content">
                    <div role="active tabpanel " class="active tab-pane" id="platos">
                        @foreach ($productos as $cat_platos)
                            @if ($cat_platos->categoria->id == 6)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-custom card-stretch gutter-b">
                                            <div class="card-header border-0">
                                                <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="d-flex flex-wrap align-items-center mb-10">
                                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                        <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                            <img src="{{ asset('public/imagen').'/'.$cat_platos->imagen }}" height="50" width="50">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $cat_platos->nombre }}</a>
                                                        <span class="text-muted font-weight-bold font-size-sm my-1">{{ $cat_platos->descripcion }}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                                        <div class="d-flex flex-column text-right">Antes
                                                            <strike>
                                                                <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                    ${{number_format($cat_platos->valor, 0, ',', '.')}}
                                                                </span>
                                                            </strike>
                                                            <br>
                                                            Ahora
                                                            @php
                                                                $producto_con_descuento = ($cat_platos->descuento*$cat_platos->valor)/100;

                                                            @endphp
                                                            <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                ${{number_format($producto_con_descuento, 0, ',', '.')}}
                                                            </span>

                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endforeach


                    </div>


                    <div role="tabpanel  " class="tab-pane" id="vinos">
                        @foreach ($productos as $cat_platos)
                            @if ($cat_platos->categoria->id == 7)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-custom card-stretch gutter-b">
                                            <div class="card-header border-0">
                                                <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="d-flex flex-wrap align-items-center mb-10">
                                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                        <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                            <img src="{{ asset('public/imagen').'/'.$cat_platos->imagen }}" height="50" width="50">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $cat_platos->nombre }}</a>
                                                        <span class="text-muted font-weight-bold font-size-sm my-1">{{ $cat_platos->descripcion }}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                                        <div class="d-flex flex-column text-right">Antes
                                                            <strike>
                                                                <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                    ${{number_format($cat_platos->valor, 0, ',', '.')}}
                                                                </span>
                                                            </strike>
                                                            <br>
                                                            Ahora
                                                            @php
                                                                $producto_con_descuento = ($cat_platos->descuento*$cat_platos->valor)/100;

                                                            @endphp
                                                            <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                              ${{number_format($producto_con_descuento, 0, ',', '.')}}
                                                            </span>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endforeach

                    </div>

                    <div role="tabpanel  " class="tab-pane" id="postres">
                        @foreach ($productos as $cat_platos)
                            @if ($cat_platos->categoria->id == 8)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-custom card-stretch gutter-b">
                                            <div class="card-header border-0">
                                                <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="d-flex flex-wrap align-items-center mb-10">
                                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                        <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                            <img src="{{ asset('public/imagen').'/'.$cat_platos->imagen }}" height="50" width="50">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $cat_platos->nombre }}</a>
                                                        <span class="text-muted font-weight-bold font-size-sm my-1">{{ $cat_platos->descripcion }}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                                        <div class="d-flex flex-column text-right">Antes
                                                            <strike>
                                                                <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                    ${{number_format($cat_platos->valor, 0, ',', '.')}}
                                                                </span>
                                                            </strike>
                                                            <br>
                                                            Ahora
                                                            @php
                                                                $producto_con_descuento = ($cat_platos->descuento*$cat_platos->valor)/100;

                                                            @endphp
                                                            <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                ${{number_format($producto_con_descuento, 0, ',', '.')}}
                                                            </span>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endforeach
                    </div>

                    <div role="tabpanel  " class="tab-pane" id="sopas">
                        @foreach ($productos as $cat_platos)
                            @if ($cat_platos->categoria->id == 9)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-custom card-stretch gutter-b">
                                            <div class="card-header border-0">
                                                <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="d-flex flex-wrap align-items-center mb-10">
                                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                        <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                            <img src="{{ asset('public/imagen').'/'.$cat_platos->imagen }}" height="50" width="50">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $cat_platos->nombre }}</a>
                                                        <span class="text-muted font-weight-bold font-size-sm my-1">{{ $cat_platos->descripcion }}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center py-lg-0 py-2">
                                                        <div class="d-flex flex-column text-right">Antes
                                                            <strike>
                                                                <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                    ${{number_format($cat_platos->valor, 0, ',', '.')}}
                                                                </span>
                                                            </strike>
                                                            <br>
                                                            Ahora
                                                            @php
                                                                $producto_con_descuento = ($cat_platos->descuento*$cat_platos->valor)/100;

                                                            @endphp
                                                            <span class="text-dark-75 font-weight-bolder font-size-h4">
                                                                ${{number_format($producto_con_descuento, 0, ',', '.')}}
                                                            </span>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                    @endforeach

                    </div>

                </div>



            </div>



        </div>
    </div>
</div>

 @endsection

