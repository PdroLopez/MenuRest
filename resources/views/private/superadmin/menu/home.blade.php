@extends('layouts.superadmin')
@section('content')
    <div class="row">
        @foreach ($menu as $menus)
            <div class="col-lg-6">
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">{{ $menus->nombre }}</h3>
                        <div class="card-toolbar">
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        @foreach ($producto as $productos)
                            <div class="d-flex flex-wrap align-items-center mb-10">
                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('{{ asset('public/imagen').'/'.$productos->imagen }}')"></div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $productos->nombre }}</a>
                                    <span class="text-muted font-weight-bold font-size-sm my-4">Descripcion: {{ $productos->descripcion }}</span>
                                    <span class="text-muted font-weight-bold font-size-sm">Categoria: {{ $productos->categoria->nombre }}</span>
                                </div>
                                <div class="d-flex align-items-center py-lg-0 py-2">
                                    <div class="d-flex flex-column text-right">
                                        <span class="text-dark-75 font-weight-bolder font-size-h4">$ {{ $productos->valor }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
@endsection
