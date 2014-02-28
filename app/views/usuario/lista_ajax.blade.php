@if (count($usuarios))
    @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ HTML::linkRoute('usuarios_ver', '[ detalle ]', [$usuario->id]) }}</td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="4" class="text-center">
            - Sin resultados para mostrar -
        </td>
    </tr>
@endif