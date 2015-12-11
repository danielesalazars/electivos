@extends('base')

@section('title')
    Bienvenido
@stop

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt_1em">
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 text-center">
        <a href="{{ route('complementarios') }}">
            COMPLEMENTARIOS
        </a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 text-center">
        <a href="{{ route('vacaciones') }}">
            VACACIONES
        </a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 text-center">
        <a href="{{ route('externado') }}">
            EXTERNADO
        </a>
    </div>
</div>
@stop