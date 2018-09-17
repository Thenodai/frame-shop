<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Twig_Environment;
use Twig_Loader_Filesystem;

trait ControllerTrait
{
    public function render(string $view, array $parameters): Response
    {
        $loader = new Twig_Loader_Filesystem('src/View');
        $twig = new Twig_Environment($loader, []);
        return new Response(
            $twig->render($view, $parameters)
        );
    }

    public function redirect(string $url, int $status, array $headers = []): RedirectResponse
    {
        return new RedirectResponse($url, $status, $headers);
    }
}
