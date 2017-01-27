@extends('app')

@section('content')
<h1>Hola Mundo</h1>
<a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-off"></i> Cerrar Sesión</a>
@endsection
