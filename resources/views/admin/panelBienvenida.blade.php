@extends('auth.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>
                <div class="panel-body">
                Bienvenido al panel de Administración
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>
                <div class="panel-body">
                    <form method="get" action="{{url('/admin')}}">
                        <button class="btn btn-primary" type="submit" >Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
