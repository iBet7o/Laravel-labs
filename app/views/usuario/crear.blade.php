@extends('layouts.master')

@section('breadcrumbs', Breadcrumbs::render('usuarios', 'crear'))

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            {{ Form::open(array('route' => 'usuarios_crear', 'class' => 'form-horizontal', 'role' => 'form')) }}
                <div class="form-group">
                    {{ Form::label('nombre', 'Nombre', ['class' => 'col-xs-12 col-md-2 control-label']) }}
                    <div class="col-xs-12 col-md-10">
                        {{ Form::text('nombre', '', ['class' => 'form-control input-xs', 'placeholder' => 'Nombre']) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('apellido', 'Apellido', ['class' => 'col-xs-12 col-md-2 control-label']) }}
                    <div class="col-xs-12 col-md-10">
                        {{ Form::text('apellido', '', ['class' => 'form-control input-xs', 'placeholder' => 'Apellido']) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-offset-7 col-md-offset-7 col-xs-5 col-md-5">
                        {{ HTML::linkRoute('usuarios', 'Regresar', [], [
                            'class' => 'btn btn-default btn-sm',
                            'role' => 'button'
                        ]) }}
                        {{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop
