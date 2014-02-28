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
            <table class="table table-striped table-bordered table-hover" data-role="table-list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th></th>
                    </tr>
                    <tr data-role="table-search" data-url="{{ route('usuarios') }}">
                        <td>
                            {{ Form::text('search[id]', null, ['size' => 5]) }}
                        </td>
                        <td>
                            {{ Form::text('search[nombre]') }}
                        </td>
                        <td>
                            {{ Form::text('search[apellido]') }}
                        </td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm center-block">
                                <span class="glyphicon glyphicon-search"></span> Buscar
                            </button>
                        </td>
                    </tr>
                </thead>
                <tbody data-role="table-body">
                </tbody>
            </table>
        </div>
    </div>
@stop
