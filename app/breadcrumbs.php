<?php

Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('usuarios', function($breadcrumbs, $action = null) {
    $breadcrumbs->push('Usuarios', route('usuarios'));

    if ($action) {
        $breadcrumbs->push($action);
    }
});
