@extends('layouts.superadmin')
@section('content')

<div class="card card-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-title">
                            <h3 class="card-label">Productos</h3>
                       </div>
                   </div>
                    <div class="col-md-2">
                        <div class="card-title">
                                @include('private.superadmin.producto.create')
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
                                    <th>Descipcion</th>
                                    <th>Valor</th>
                                    <th>Descuento</th>
                                    <th>Menu</th>
                                    <th>Estado</th>
                                    <th>Imagen</th>



                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($producto as $productos)
                                <td>
                                    {{ $productos->id }}
                                </td>
                                <td>
                                    {{ $productos->nombre }}
                                </td>
                                <td>
                                    {{ $productos->descripcion }}
                                </td>
                                <td>
                                    {{ $productos->valor }}
                                </td>
                                <td>
                                    {{ $productos->descuento }}
                                </td>
                                <td>
                                    {{ $productos->menus->nombre }}
                                </td>
                                <td>
                                    {{ $productos->estado->nombre }}
                                </td>



                                <td>
                                    <img src="{{ asset('public/imagen').'/'.$productos->imagen }}" height="50" width="50">
                                </td>



                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$productos->id}}">Editar</a>
                                                    <a class="dropdown-item" href="{{ asset('producto/activar-producto') }}/{{ $productos->id }}">Activar</a>
                                                    <a class="dropdown-item" href="{{ asset('producto/desactivar-producto') }}/{{ $productos->id }}">Desactivar</a>

                                                    @include('private.superadmin.producto.destroy')
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('private.superadmin.producto.edit')
                                    @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Valor</th>
                                    <th>Descuento</th>
                                    <th>Menu</th>
                                    <th>Estado</th>
                                    <th>Imagen</th>

                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
    </div>
</div>

@endsection
