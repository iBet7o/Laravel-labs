@extends('layouts.master')

@section('breadcrumbs', Breadcrumbs::render('usuarios'))

@section('content')
    <div class="row">
        <div class="col-md-offset-10 col-md-2">
            {{ HTML::linkRoute('usuarios_nuevo', 'Crear usuario', [], [
                'class' => 'btn btn-default btn-sm',
                'role' => 'button',
            ]) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th></th>
                </tr>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ HTML::linkRoute('usuarios_ver', '[ detalle ]', [$usuario->id]) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
