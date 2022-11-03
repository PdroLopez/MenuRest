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


                        <div class="row">
                            @foreach ($platos_menu as $productos)
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
                            <div class="col-lg-12">


                                <!--begin::List Widget 14-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->

                                    <div class="card-header border-0">
                                        <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-ver"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                        <li class="navi-footer py-4">
                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                     <!--end::Header-->
                                    <!--begin::Body-->

                                    <div class="card-body pt-2">
                                        <!--begin::Item-->


                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                            <!--begin::Symbol-->
                                            {{-- <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                    <img src="{{ asset('public/imagen').'/'.$productos->imagen }}" height="50" width="50">


                                                </div>
                                            </div> --}}
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $productos->nombre }}</a>
                                                <span class="text-muted font-weight-bold font-size-sm my-1">{{ $productos->descripcion }}</span>

                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center py-lg-0 py-2">
                                                <div class="d-flex flex-column text-right">
                                                    <span class="text-dark-75 font-weight-bolder font-size-h4">$ {{ $productos->valor }}</span>
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>



                                    <!--end::Body-->
                                </div>

                                <!--end::List Widget 14-->
                            </div>
                            @endforeach
                        </div>

                    </div>


                    <div role="tabpanel  " class="tab-pane" id="vinos">
                        <div class="row">
                            @foreach ($vinos_menu as $productos)
                            <div class="col-lg-12">


                                <!--begin::List Widget 14-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->

                                    <div class="card-header border-0">
                                        <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-ver"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                        <li class="navi-footer py-4">
                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                     <!--end::Header-->
                                    <!--begin::Body-->

                                    <div class="card-body pt-2">
                                        <!--begin::Item-->


                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                            <!--begin::Symbol-->
                                            {{-- <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                    <img src="{{ asset('public/imagen').'/'.$productos->imagen }}" height="50" width="50">


                                                </div>
                                            </div> --}}
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $productos->nombre }}</a>
                                                <span class="text-muted font-weight-bold font-size-sm my-1">{{ $productos->descripcion }}</span>

                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center py-lg-0 py-2">
                                                <div class="d-flex flex-column text-right">
                                                    <span class="text-dark-75 font-weight-bolder font-size-h4">$ {{ $productos->valor }}</span>
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>



                                    <!--end::Body-->
                                </div>

                                <!--end::List Widget 14-->
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <div role="tabpanel  " class="tab-pane" id="postres">
                        <div class="row">
                            @foreach ($postres_menu as $productos)
                            <div class="col-lg-12">


                                <!--begin::List Widget 14-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->

                                    <div class="card-header border-0">
                                        <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-ver"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                        <li class="navi-footer py-4">
                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                     <!--end::Header-->
                                    <!--begin::Body-->

                                    <div class="card-body pt-2">
                                        <!--begin::Item-->


                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                            <!--begin::Symbol-->
                                            {{-- <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                    <img src="{{ asset('public/imagen').'/'.$productos->imagen }}" height="50" width="50">


                                                </div>
                                            </div> --}}
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $productos->nombre }}</a>
                                                <span class="text-muted font-weight-bold font-size-sm my-1">{{ $productos->descripcion }}</span>

                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center py-lg-0 py-2">
                                                <div class="d-flex flex-column text-right">
                                                    <span class="text-dark-75 font-weight-bolder font-size-h4">$ {{ $productos->valor }}</span>
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>



                                    <!--end::Body-->
                                </div>

                                <!--end::List Widget 14-->
                            </div>
                            @endforeach
                        </div>

                     </div>

                     <div role="tabpanel  " class="tab-pane" id="sopas">
                        <div class="row">
                            @foreach ($sopas_menu as $productos)
                            <div class="col-lg-12">


                                <!--begin::List Widget 14-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->

                                    <div class="card-header border-0">
                                        <h3 class="card-title font-weight-bolder text-dark">Menu del día
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-ver"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                        <li class="navi-footer py-4">
                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                     <!--end::Header-->
                                    <!--begin::Body-->

                                    <div class="card-body pt-2">
                                        <!--begin::Item-->


                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                            <!--begin::Symbol-->
                                            {{-- <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url('/metronic/theme/html/demo5/dist/assets/media/stock-600x400/img-17.jpg')">
                                                    <img src="{{ asset('public/imagen').'/'.$productos->imagen }}" height="50" width="50">


                                                </div>
                                            </div> --}}
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $productos->nombre }}</a>
                                                <span class="text-muted font-weight-bold font-size-sm my-1">{{ $productos->descripcion }}</span>

                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center py-lg-0 py-2">
                                                <div class="d-flex flex-column text-right">
                                                    <span class="text-dark-75 font-weight-bolder font-size-h4">{{ $aqui_vamos }}</span>
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>



                                    <!--end::Body-->
                                </div>

                                <!--end::List Widget 14-->
                            </div>
                            @endforeach
                        </div>

                     </div>

                </div>



            </div>



        </div>
    </div>
</div>

 @endsection

