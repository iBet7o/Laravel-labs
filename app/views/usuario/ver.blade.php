@extends('layouts.master')

@section('breadcrumbs', Breadcrumbs::render('usuarios', 'ver'))

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div class="row">
                <div class="col-xs-2">
                    <strong>Nombre:</strong>
                </div>
                <div class="col-xs-10">
                    {{ $usuario->nombre }}
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <strong>Apellido:</strong>
                </div>
                <div class="col-xs-10">
                    {{ $usuario->apellido }}
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <strong>Registro:</strong>
                </div>
                <div class="col-xs-10">
                    {{ $usuario->created_at }}
                </div>
            </div>

            <div class="row">
                <div class="col-xs-offset-9 col-md-offset-10 col-xs-3 col-md-2">
                    {{ HTML::linkRoute('usuarios', 'Regresar', [], [
                        'class' => 'btn btn-default btn-sm',
                        'role' => 'button'
                    ]) }}
                </div>
            </div>
        </div>
    </div>
@stop
