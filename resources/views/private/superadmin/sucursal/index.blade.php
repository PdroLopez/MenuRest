@extends('layouts.superadmin')
@section('content')

<div class="card card-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-title">
                            <h3 class="card-label">Sucursal</h3>
                       </div>
                   </div>
                    <div class="col-md-2">
                        <div class="card-title">
                                @include('private.superadmin.sucursal.create')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Acción</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sucursal as $sucursales)
                                    <tr>
                                        <span class="{{$sucursales->class}}">
                                        <td>{{$sucursales->id}}</td>
                                        <td>
                                            <span class="{{$sucursales->class}}">
                                                {{$sucursales->nombre}}
                                            </span>
                                        </td>

                                        <td>
                                            @if ($sucursales->estado_id != null )
                                                <span class="{{$sucursales->class}}">
                                                    {{$sucursales->estado->nombre}}
                                                </span>
                                            @else
                                              Sin Estado
                                            @endif

                                        </td>


                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$sucursales->id}}">Editar</a>
                                                    <a class="dropdown-item" href="{{ asset('sucursal/activar-sucursal') }}/{{ $sucursales->id }}">Activar</a>
                                                    <a class="dropdown-item" href="{{ asset('sucursal/desactivar-sucursal') }}/{{ $sucursales->id }}">Desactivar</a>
                                                    <a class="dropdown-item" href="{{ asset('home/sucursal-menu') }}/{{ $sucursales->id }}">Menu</a>

                                                    @include('private.superadmin.sucursal.destroy')
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('private.superadmin.sucursal.edit')
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Acción</th>
                                </tr>

                            </tfoot>
                        </table>
    </div>
</div>

@endsection
