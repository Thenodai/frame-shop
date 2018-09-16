<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    use ControllerTrait;

    public function base(): RedirectResponse
    {
        return new RedirectResponse('/product');
    }

    public function singleAction(): Response
    {
        return new Response('The app is running...');
    }
}
