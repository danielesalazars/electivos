@extends('base')

@section('title')
    Bienvenido
@stop

@section('content')
<table class="table">
    <thead>
    	<tr>
    		<th>ID</th>
    		<th>DNI</th>
    		<th>EMAIL</th>
    		<th>ROL_ID</th>
    		<th>CREATED_AT</th>
    		<th>UPDATED_AT</th>
    	</tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
    	<tr>
    		<td>{{$usuario->id}}</td>
    		<td>{{$usuario->dni}}</td>
    		<td>{{$usuario->email}}</td>
    		<td>{{$usuario->rol_id}}</td>
    		<td>{{$usuario->created_at}}</td>
    		<td>{{$usuario->updated_at}}</td>
    	</tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">{!! $usuarios->render() !!}</div>
@stop