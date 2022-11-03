@extends('layouts.superadmin')
@section('content')

<div class="card card-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-title">
                            <h3 class="card-label">Menu</h3>
                       </div>
                   </div>
                    <div class="col-md-2">
                        <div class="card-title">
                                @include('private.superadmin.menu.create')
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
                                @foreach ($menu as $menus)
                                    <tr>
                                        <td>{{$menus->id}}</td>
                                        <td>
                                            <span class="{{$menus->class}}">
                                                {{$menus->nombre}}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="{{$menus->class}}">
                                                {{$menus->estado->nombre}}
                                            </span>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$menus->id}}">Editar</a>
                                                    <a class="dropdown-item" href="{{ asset('menu/activar-menu') }}/{{ $menus->id }}">Activar</a>
                                                    <a class="dropdown-item" href="{{ asset('menu/desactivar-menu') }}/{{ $menus->id }}">Desactivar</a>

                                                    @include('private.superadmin.menu.destroy')
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('private.superadmin.menu.edit')
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>

                                    <th>Acción</th>
                                </tr>

                            </tfoot>
                        </table>
    </div>
</div>

@endsection
