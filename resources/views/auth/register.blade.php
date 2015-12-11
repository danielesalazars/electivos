@extends('base')

@section('title')
    Registrar Usuario
@stop

@section('content')
<form method="POST" class="navbar-form navbar-right" action="{{ route('register') }}">
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password_confirmation" placeholder="Repeat - Password" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Registrar</button>
</form>
@stop