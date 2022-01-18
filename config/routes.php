<?php 

$routes = [
    '/listar-cursos' => \php6\Cursos\Controller\ListarCursos::class,
    '/form-novo-curso' => \php6\Cursos\Controller\FormInsert::class,
    '/include-info' => \php6\Cursos\Controller\Persist::class,
    '/del-curso' => \php6\Cursos\Controller\Exclusao::class,
    '/alt-curso' => \php6\Cursos\Controller\Editar::class,
    '/login' => \php6\Cursos\Controller\FormLogin::class,
    '/realiza-login' => \php6\Cursos\Controller\RealizaLogin::class,
    '/logout' => \php6\Cursos\Controller\Logout::class,
];

return $routes;