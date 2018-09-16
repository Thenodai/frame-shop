<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    use ControllerTrait;

    public function singleAction()
    {
        return new Response('The app is running...');
    }
}
