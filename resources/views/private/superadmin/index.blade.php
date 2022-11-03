@extends('layouts.superadmin')
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">PERFIL SUPERADMIN</h3>
        </div>
    </div>
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center">
                <button class="btn btn-primary btn-icon-sm mt-2" data-target="#create" data-toggle="modal" type="button">
                    <i class="flaticon2-plus"></i>
                    Nuevo Local
                </button>
                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="create" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content left">
                            {!!Form::open(['route' => 'mantenedor-local.store', 'method' => 'POST','files'=>true])!!}
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Nuevo Local
                                </h5>
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Nombre</label>
                                            {!!Form::text('nombre',null,['class'=>"form-control", 'placeholder'=>"Ingrese un nombre..." , 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <strong>Descripcion</strong>
                                            <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese  una Descripcion"></textarea>
                                            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <strong>Fotografia </strong>
                                            <input type="file" name="fotografia" class="form-control" placeholder="">
                                            <span class="text-danger">{{ $errors->first('fotografia') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <strong>Logo </strong>
                                            <input type="file" name="logo" class="form-control" placeholder="">
                                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Direccion</label>
                                            {!!Form::text('direccion',null,['class'=>"form-control", 'placeholder'=>"Ingrese una direccion..." , 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Sitio web</label>
                                            {!!Form::url('web',null,['class'=>"form-control", 'placeholder'=>"Ingrese un sitio web..." , 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Correo Electronico</label>
                                            {!!Form::email('correo',null,['class'=>"form-control", 'placeholder'=>"Ingrese una Correo..." , 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Telefono </label>
                                            {!!Form::number('telefono',null,['class'=>"form-control", 'placeholder'=>"Ingrese un Telefono..." , 'required'])!!}
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="">Estado</label>
                                            {!!Form::select('estado_id',$estado,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="">Sucursal</label>
                                            {!!Form::select('sucursales_id',$sucursal,null,['class'=>"form-control", 'placeholder'=>"Seleccionar"])!!}
                                        </div>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
    <div class="card-body row">
        @foreach ($usuarioLogueado as $locales)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-2">
                <div class="card card-custom gutter-b card-stretch">
                    <div class="card-body text-center pt-4">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="mt-7">
                            <div class="symbol symbol-circle symbol-lg-90">
                                <img src="{{ asset('public/imagen').'/'.$locales->logo }}" height="50" width="50">
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="{{ asset('private/superadmin/local/'.$locales->id) }}" class="text-dark font-weight-bold text-hover-primary font-size-h4">
                               {{ $locales->nombre}}
                            </a>
                        </div>
                        <span class="">
                            Nombre de Sucursal: {{ $locales->sucursal->nombre }}
                        </span>
                        <div class="mt-9">
                            {{-- <a  class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">Detalle Local</a> --}}

                            <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">Ver Menú</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
