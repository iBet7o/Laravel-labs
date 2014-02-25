<?php

class UsuarioController extends BaseController
{
    public function mostrar()
    {
        $usuarios = Usuario::all();

        return View::make('usuario.lista', array(
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
