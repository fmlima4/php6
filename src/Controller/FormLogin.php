<?php

namespace php6\Cursos\Controller;

use php6\Cursos\Helper\HtmlTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormLogin implements RequestHandlerInterface
{
    use HtmlTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->renderHtml('login/formLogin.php', [
            'titulo' => 'Login'
        ]);

        return new Response(200, [], $html);
    }
}