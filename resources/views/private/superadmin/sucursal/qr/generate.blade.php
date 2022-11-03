@extends('layouts.superadmin')
@section('content')
	<div class="visible-print text-center">
		<h1>Sucursal: {{ $sucursal->nombre }}</h1>
	    {!! QrCode::size(250)->generate($ruta); !!}
	</div>
@endsection
