@extends('layouts.superadmin')
@section('content')

<div class="card card-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-title">
                            <h3 class="card-label">LOCAL</h3>
                       </div>
                   </div>
                    <div class="col-md-2">
                        <div class="card-title">
                                @include('private.superadmin.local.create')
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
                                    <th>Descripcion</th>

                                    <th>Direccion</th>
                                    <th>Sitio Web</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>

                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($local as $locales)
                                    <tr>
                                        <td>

                                            {{$locales->id}}

                                        </td>
                                        <td>

                                            {{$locales->nombre}}

                                        </td>
                                        <td>

                                            {{$locales->descripcion}}

                                        </td>

                                        <td>

                                            {{$locales->direccion}}

                                        </td>
                                        <td>

                                            {{$locales->web}}

                                        </td>
                                        <td>

                                            {{$locales->correo}}

                                        </td>
                                        <td>

                                            {{$locales->telefono}}

                                        </td>
                                        <td>

                                            {{$locales->estado->nombre}}

                                        </td>






                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$locales->id}}">Editar</a>
                                                    <a class="dropdown-item" href="{{ asset('local/activar-local') }}/{{ $locales->id }}">Activar</a>
                                                    <a class="dropdown-item" href="{{ asset('local/desactivar-local') }}/{{ $locales->id }}">Desactivar</a>
                                                    <a class="dropdown-item" href="{{ asset('home/local/sucursal') }}/{{ $locales->id }}">Sucursales</a>

                                                    @include('private.superadmin.local.destroy')
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('private.superadmin.local.edit')
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Direccion</th>
                                    <th>Sitio Web</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>


                        </table>
    </div>
</div>

@endsection
