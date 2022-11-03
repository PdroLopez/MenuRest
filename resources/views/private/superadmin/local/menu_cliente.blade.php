@extends('layouts.superadmin')
@section('content')

@foreach ($menu as $menus)

{{ $menus->id }}

@endforeach


@endsection
