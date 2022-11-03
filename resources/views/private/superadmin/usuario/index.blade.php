@extends('layouts.superadmin')
@section('content')

<div class="card card-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-title">
                            <h3 class="card-label">Usuario</h3>
                       </div>
                   </div>
                    <div class="col-md-2">
                        <div class="card-title">
                                @include('private.superadmin.usuario.create')
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
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->rol->nombre}}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$usuario->id}}">Editar</a>
                                    @include('private.superadmin.usuario.destroy')
                                </div>
                            </div>
                        </td>
                    </tr>
                    @include('private.superadmin.usuario.edit')
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acción</th>
                </tr>
            </tfoot>
        </table>
        {{ $usuarios->render() }}
    </div>
</div>

@endsection
