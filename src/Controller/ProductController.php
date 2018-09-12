<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class ProductController extends BaseController
{
    public function index(Request $request)
    {
        return $this->render('product.html.twig', ['name' => 'abc']);
    }
}
