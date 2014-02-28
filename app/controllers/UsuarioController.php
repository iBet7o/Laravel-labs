<?php

class UsuarioController extends BaseController
{
    public function mostrar()
    {
        $QueryBuilder   = DB::table('usuarios');

        if (Input::has('search.id')) {
            $QueryBuilder
                ->where('id', '=', Input::get('search.id'))
            ;
        }

        if (Input::has('search.nombre')) {
            $QueryBuilder
                ->where('nombre', 'LIKE', sprintf('%%%s%%', Input::get('search.nombre')))
            ;
        }

        if (Input::has('search.apellido')) {
            $QueryBuilder
                ->where('apellido', 'LIKE', sprintf('%%%s%%', Input::get('search.apellido')))
            ;
        }

        $usuarios   = $QueryBuilder->get();
        $view       = !Request::ajax() ? 'usuario.lista' : 'usuario.lista_ajax';

        return View::make($view, array(
            'usuarios' => $usuarios,
        ));
    }

    public function nuevo()
    {
        return View::make('usuario.crear');
    }

    public function crear()
    {
        Usuario::create(Input::all());

        return Redirect::route('usuarios');
    }

    public function ver($id)
    {
        $usuario = Usuario::find($id);

        return View::make('usuario.ver', array(
            'usuario' => $usuario
        ));
    }
}
