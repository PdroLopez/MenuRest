@extends('layouts.master')
@section('content')
<div class="container">
    @foreach ($sucursal as $sucursales)
        <div class="card card-custom bg-success">
            <div class="card-header border-0">
            <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-map" style="color: black;"></i>
                    </span>
            <h3 class="card-label text-white">
           {{$sucursales->nombre}}
            </h3>
            </div>
                <div class="card-toolbar">
                    <a href="{{ asset('/qrmenu') }}/{{ $sucursales->code }}" class="btn btn btn-primary">
                       Ver Qr
                    </a>
                </div>
            </div>
            <div class="separator separator-solid separator-white opacity-20"></div>
            {{-- <div class="card-body text-white">
                ...
            </div> --}}
        </div>
        <br> <br>
    @endforeach

</div>
@stop
