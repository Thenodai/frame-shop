<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig_Environment;
use Twig_Loader_Filesystem;

trait ControllerTrait
{
    public function render(string $view, array $parameters)
    {
        $loader = new Twig_Loader_Filesystem('src/View');
        $twig = new Twig_Environment($loader, array(
            'debug' => true,
        ));
        return new Response(
            $twig->render($view, $parameters)
        );
    }
}
