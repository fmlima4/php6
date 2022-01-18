<?php

namespace php6\Cursos\Helper;

trait HtmlTrait
{
    public function renderHtml(string $caminhotemplate,array $dados): string
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../view/'. $caminhotemplate ;
        $html = ob_get_clean();

        return $html;
    }
}